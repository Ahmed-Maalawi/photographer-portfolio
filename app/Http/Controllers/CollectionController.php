<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCollectionRequest;
use App\Http\Requests\UpdateCollectionRequest;
use Intervention\Image\Facades\Image;
use App\Models\Image as IMG;
use App\Models\Collection;


class CollectionController extends Controller
{
    public function addCollection()
    {
        $allCollections = Collection::all();
        return view('admin_view.collection.add_collection', compact('allCollections'));
    }

    public function storeCollection(StoreCollectionRequest $request)
    {
        $request->validated();

        $img = $request->file('Collection_img');
        $createName = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
        $save_url = 'uploads/collections/' . $createName;
        Image::make($img)->save($save_url);

        Collection::create([
            'name' => $request['name'],
            'img_path' => $save_url,
            'description' => $request['description'],
        ]);

        return redirect()->back()->with('toast_success', 'collection added successfully');
    }

    public function deleteCollection(int $id)
    {
        $collection = Collection::findOrFail($id);
        $images = IMG::where('collection_id', $id)->get();;

        foreach ($images as $img) { $this->deletePhoto($img['id']); }

        unlink( $collection['img_path'] );
        $collection->delete();

        return redirect()->back()->with('toast_success', 'collection deleted successfully!');
    }

    public function editCollection(int $id)
    {
        $collection = Collection::findOrFail($id);

        return view('admin_view.collection.edit_collection', compact('collection'));
    }

    public function updateCollection(UpdateCollectionRequest $request)
    {
        $request->validated();

        $id = $request->collection_id;
        $collection = Collection::findOrFail($id);

        if ($request->file('Collection_img')) {

            $img = $request->file('Collection_img');
            $createNewName = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            $newPath = 'uploads/collections/' . $createNewName;
            Image::make($img)->save($newPath);

            $oldImg = IMG::where('collection_id', $id)->get();

            unlink($oldImg);

            $collection->update([
                'name' => $request['name'],
                'img_path' => $newPath,
                'description' => $request['description'],
            ]);

        } else {

            $collection->update([
                'name' => $request['name'],
                'description' => $request['description'],
            ]);
        }

        return redirect()->route('add.collection')->with('toast_success', 'collection updated successfully!');
    }


    public function ActiveCollection(int $id)
    {
        Collection::findOrFail($id)->update(['status' => true]);

        $images = IMG::where('collection_id', $id)->get();
        foreach ($images as $img) { $img->update(['status' => true]); }

        return redirect()->back()->with('toast_success', 'collection activated');
    }

    public function disActiveCollection(int $id)
    {
        Collection::findOrFail($id)->update(['status' => false]);

        $images = IMG::where('collection_id', $id)->get();
        foreach ($images as $img) { $img->update(['status' => false]); }

        return redirect()->back()->with('toast_success', 'collection dis-activated');
    }

    public function addPhotos(int $id)
    {
        $collection = Collection::findOrFail($id);
        $collection_img = IMG::where('collection_id', $id)->get();

       return view('admin_view.collection.add_photos', compact('collection', 'collection_img'));
    }

    public function deletePhoto(int $id)
    {
        $img = IMG::findOrFail($id);

        unlink($img->img_path);
        $img->delete();

        return redirect()->back()->with('toast_success', 'image deleted successfully!');
    }
}
