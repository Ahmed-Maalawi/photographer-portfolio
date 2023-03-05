<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePostRequest;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Intervention\Image\Facades\Image;
use App\Models\post;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = post::all();

        return view('admin_view.news.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin_view.news.add_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(StorePostRequest $request)
    {
        $request->validated();

        $img = $request->file('post_img');
        $newName = hexdec(uniqid()). '.' . $img->getClientOriginalExtension();
        $newPath = 'uploads/posts/' . $newName;

        Image::make($img)->save($newPath);

        post::create([
            'title' => $request['post_title'],
            'tag' =>  $request['post_tag'],
            'content' => $request['content'],
            'post_img' => $newPath,
        ]);

        return redirect()->route('news.index')->with('toast_success', 'post created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(int $id)
    {
        $post = post::findOrFail($id);

        return view('user_view.news.post_view', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(int $id)
    {
        $post = post::findOrFail($id);
        return view('admin_view.news.edit_post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdatePostRequest $request, int $id)
    {
        $validated = $request->validated();

        $post = post::findOrFail($id);

        if ($request->file('newImg')) {

            unlink($post['post_img']);

            $img = $request->file('post_img');
            $newName = hexdec(uniqid()). '.' . $img->getClientOriginalExtension();
            $newPath = 'uploads/posts/' . $newName;

            Image::make($img)->save($newPath);

            $post->update([
                'title' => $request['post_title'],
                'tag' =>  $request['post_tag'],
                'content' => $request['content'],
                'post_img' => $newPath,
            ]);

        } else {

            $post = post::findOrFail($id)->update([
                'title' => $request['post_title'],
                'tag' =>  $request['post_tag'],
                'content' =>  $request['content'],
            ]);
        }

        return redirect()
            ->route('news.index')
            ->with('toast_success', 'post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        $post = post::findOrFail($id)->delete();

        return redirect()->back()->with('toast_success', 'post deleted');
    }

    /**
     * Active the specified resource.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function activatedPost(int $id)
    {
        post::findOrFail($id)->update([
            'status' => true,
            'updated_at' => Carbon::now(),
        ]);

        return redirect()->back()->with('toast_success', 'post activated');
    }

    /**
     * Dis-Active the specified resource.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function disActivePost(int $id)
    {
       post::findOrFail($id)->update([
           'status' => false,
           'updated_at' => Carbon::now(),
       ]);

       return redirect()->back()->with('toast_success', 'post dis-activated');
    }

    public function allPosts()
    {
        $posts = post::where('status', true)->orderBy('created_at', 'DESC')->paginate(4);
        return view('user_view.news.blog', compact(['posts']));
    }
}
