<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as IMG;

class ImageController extends Controller
{
    public function storeImage(Request $request)
    {
        $collection_id = $request->collectionID;
        $images = $request->file('images');
//        dd($images);

        foreach ($images as $img) {

            $createName = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            $save_url = 'uploads/photos/' . $createName;
            IMG::make($img)->save($save_url);

            Image::create([
               'img_path' =>  $save_url,
               'collection_id' => $collection_id,
            ]);
        }

        $notification = array(
            'message' => 'Image Added successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
//        return redirect()->route('add.collection')->with($notification);
    }

    public function displayImages()
    {
        $images = Image::all();
        return view('admin_view.collection.manange_images', compact('images'));
    }

    public function Activate($id)
    {
        $Image = Image::findOrFail($id)->update([
           'status' => true,
        ]);

        $notification = array(
            'message' => 'Image Activated Successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }

    public function disActivate($id)
    {
        $Image = Image::findOrFail($id)->update([
            'status' => false,
        ]);

        $notification = array(
            'message' => 'Image Dis-Activated Successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);
    }

    public function deleteImage($id)
    {
        Image::faindOrFail($id)->delete();

        $notification = array(
            'message' => 'Image Dis-Activated Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
