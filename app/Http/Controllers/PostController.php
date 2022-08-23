<?php

namespace App\Http\Controllers;

use App\Models\post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::all();

        return view('admin_view.news.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_view.news.add_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required',
            'post_img' => 'required | image | mimes:jpeg,png,jpg,gif',
            'post_title' => 'required'
        ], [
            'content.required' => 'please enter post content',
            'post_img.required' => 'upload post image',
            'post_img.mimes' => 'post image extension must be [ jpeg, png, jpg, gif]',
            'post_img.image' => 'upload real image',
            'post_title.required' => 'enter title for the post',
        ]);



        $img = $request->file('post_img');
        $newName = hexdec(uniqid()). '.' . $img->getClientOriginalExtension();
        $newPath = 'uploads/posts/' . $newName;

        $image = Image::make($img)->save($newPath);

        $post = post::create([
            'title' => $request['post_title'],
            'tag' =>  $request['post_tag'],
            'content' => $request['content'],
            'post_img' => $newPath,
        ]);
        $post->save();

        $notification = array(
            'message' => 'Post Shared Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('news.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::findOrFail($id);

        return view('user_view.news.post_view', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = post::findOrFail($id);
        return view('admin_view.news.edit_post', compact('post'));
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
        $validated = $request->validate([
            'content' => 'required',
            'post_img' => 'required | image | mimes:jpeg,png,jpg,gif',
            'post_title' => 'required'
        ], [
            'content.required' => 'please enter post content',
            'post_img.required' => 'upload post image',
            'post_img.mimes' => 'post image extension must be [ jpeg, png, jpg, gif]',
            'post_img.image' => 'upload real image',
            'post_title.required' => 'enter title for the post',
        ]);


        $post = post::findOrFail($id);

        dd($post);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Post deleted Successfully',
            'alert-type' => 'error',
        );

        return redirect()->back()->with($notification);
    }

    public function activatedPost($id)
    {

        $post = post::findOrFail($id);

        $post->update([
           'status' => true,
           'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Post activated Successfully',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);
    }

    public function disActivePost($id)
    {
        $post = post::findOrFail($id);

        $post->update([
            'status' => false,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Post dis-activated Successfully',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);
    }

    public function allPosts()
    {
        $posts = post::where('status', true)->orderBy('created_at', 'DESC')->paginate(1);
        return view('user_view.news.blog', compact(['posts']));
    }
}
