<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use App\Models\Image as IMG;


class CollectionController extends Controller
{
    public function addCollection()
    {
        $allCollections = Collection::all();
        return view('admin_view.collection.add_collection', compact('allCollections'));
    }

    public function storeCollection(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'Collection_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
            'description' => 'required',
        ], [
            'name.required' => 'Enter Collection Name',
            'img_path.required' => 'Enter Collection Img',
            'img_path.mimes' => 'image extension must be jpg,png,jpeg,gif,svg',
            'description.required' => 'Enter Collection Description',
        ]);

        $img = $request->file('Collection_img');
        $createName = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
        $save_url = 'uploads/collections/' . $createName;
        Image::make($img)->save($save_url);


        $newCollection = Collection::insert([
            'name' => $request->name,
            'img_path' => $save_url,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Collection Added Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function deleteCollection($id)
    {
        $collection = Collection::findOrFail($id);
        unlink($collection->img_path);
        Collection::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Collection Deleted Successfully',
            'alert-type' => 'error',
        );

        return redirect()->back()->with($notification);
    }

    public function ActiveCollection($id)
    {
        Collection::findOrFail($id)->updated([
            'status' => true,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Collection Active Successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }

    public function disActiveCollection($id)
    {

        Collection::findOrFail($id)->updated([
            'status' => false,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Collection Dis-Active Successfully',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);
    }

    public function editCollection($id)
    {
        $collection = Collection::findOrFail($id);

        return view('admin_view.collection.edit_collection', compact('collection'));
    }

    public function updateCollection(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'img_path' => 'image|mimes:jpg,png,jpeg,gif,svg',
            'description' => 'required',
        ], [
            'name.required' => 'Enter Collection Name',
            'img_path.image' => 'file must be image',
            'img_path.mimes' => 'image extension must be jpg,png,jpeg,gif,svg',
            'description.required' => 'Enter Collection Description',
        ]);

        $id = $request->collection_id;
        $collection = Collection::findOrFail($id);

        if ($request->file('Collection_img')) {

            $img = $request->file('Collection_img');
            $createNewName = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            $newPath = 'uploads/collections/' . $createNewName;
            Image::make($img)->save($newPath);

            $oldImg = $collection->img_path;
            unlink($oldImg);

            $collection->update([
                'name' => $request->name,
                'img_path' => $newPath,
                'description' => $request->description,
            ]);

        } else {
            $collection->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
        }

        $collection = Collection::findOrFail($id)->update([
            'name' => $request,
            'Collection_img' => $request,
            'description' => $request,
        ]);

        $notification = array(
            'message' => 'Collection Updated Successfully',
            'alert-type' => 'info',
        );

        return redirect()->route('add.collection')->with($notification);
    }

    public function addPhotos($id)
    {
        $collection = Collection::findOrFail($id);
        $collection_img = IMG::where('collection_id', $id)->get();
//        dd($collection_img);

       return view('admin_view.collection.add_photos', compact('collection', 'collection_img'));
    }

//    public function addPhotos()
//    {
//        $collection = Collection::orderBy('name','ACED')->get();
//        return view('admin_view.collection.add_photos', compact('collection'));
//    }
}
