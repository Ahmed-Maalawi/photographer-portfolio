<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();

        return redirect()->route('admin_view.videos.manange-video', ['videos' => $videos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_view.videos.add-video');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'video_title' => 'required|min:3|string',
            'Video_file' => 'required|mimetypes:video/avi,video/mpeg,video/quicktime',
            'video_img' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);



        // --------------   upload video    ------------------

        $videoPath = $request->file('Video_file')->store('videos', ['disk' => 'Video']);


        //----------------  upload imgae    --------------------

        $imgName = hexdec(uniqid()) . '.' . $request->file('video_img')->getClientOriginalExtension();
        $save_url = 'uploads/collections/' . $imgName;
        $img = Image::make($request->file('video_img'))->save($save_url);

        Video::create([
            'video_title' => $request['video_title'],
            'video_img' => $save_url,
            'video_path' => $videoPath,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}