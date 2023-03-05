<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image as IMG;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function storeImage(Request $request)
    {
        $collection_id = $request->collectionID;
        $images = $request->file('images');

        foreach ($images as $img) {

            $createName = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            $save_url = 'uploads/photos/' . $createName;
            IMG::make($img)->save($save_url);

            Image::create([
               'img_path' =>  $save_url,
               'collection_id' => $collection_id,
            ]);
        }

        return redirect()->back()->with('toast_success', 'photo add successfully');
    }

    public function displayImages()
    {
        $images = Image::all();
        return view('admin_view.collection.manange_images', compact('images'));
    }

    public function Activate(int $id)
    {
        $Image = Image::findOrFail($id)->update(['status' => true]);

        return redirect()->back()->with('toast_success', 'photo activated');
    }

    public function disActivate(int $id)
    {
        $Image = Image::findOrFail($id)->update(['status' => false]);

        return redirect()->back()->with('toast_success', 'photo dis-activated');
    }

    public function deleteImage(int $id)
    {
        Image::faindOrFail($id)->delete();

        return redirect()->back()->with('toast_success', 'photo deleted');
    }
}
