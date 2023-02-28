<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateVideoRequest;
use App\Http\Requests\uploadVideoRequest;
use App\Models\Video;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Intervention\Image\Facades\Image;


class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return view
     */
    public function index()
    {
        $videos = Video::all();

        session()->flush('success', 'all videos loaded');

        return view('admin_view.videos.manange-videos', ['videos' => $videos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return view
     */
    public function create()
    {
        return view('admin_view.videos.add-video');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  uploadVideoRequest  $request
     * @return RedirectResponse
     */
    public function store(uploadVideoRequest $request)
    {
        $request->validated();

        // --------------   upload video    ------------------
         $videoPath = $request->file('Video_file')->store('video',['disk' => 'video']);

        //----------------  upload imgae    --------------------

        $imgName = hexdec(uniqid()) . '.' . $request->file('video_img')->getClientOriginalExtension();
        $save_url = 'uploads/videos/videos-cover/' . $imgName;
        $img = Image::make($request->file('video_img'))->save($save_url);

        if ($videoPath) {
            Video::create([
                'video_title' => $request['video_title'],
                'video_img' => $save_url,   
                'video_path' => '/uploads/videos/'.$videoPath,
            ]);
        }

        return redirect()->route('admin.videos.all')->with('toast_success', 'video uploaded successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return view
     */
    public function edit(int $id)
    {
        return  view('admin_view.videos.edit-video', ['video' => Video::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateVideoRequest  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(UpdateVideoRequest $request, int $id)
    {
        $request->validated();

        $video = Video::findOrFail($id);

        if ($request->file('new_cover')) {

            unlink($video['video_img']);

            $imgName = hexdec(uniqid()) . '.' . $request->file('video_img')->getClientOriginalExtension();
            $save_url = 'uploads/videos/videos-cover/' . $imgName;
            $img = Image::make($request->file('video_img'))->save($save_url);

            $video->update([
                'video_title' => $request['video_title'],
                'video_img' => $save_url,
            ]);

        } else {

            $video->update([
                'video_title' => $request['video_title'],
            ]);

        }

        $video->save();

        return redirect()->route('admin.videos.all')->with('toast_success', 'video updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        try {
            $video = Video::findOrFail($id);

            unlink($video['video_img']);
            unlink($video['video_path']);

            $video->delete();

            return redirect()->back()->with('success', 'video deleted successfully !');

        } catch ( HttpResponseException $exception) {
            return redirect()->back()->with('toast_error', 'deleting video failed!');
        }
    }
}
