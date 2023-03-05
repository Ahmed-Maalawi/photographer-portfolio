<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Feedback;
use App\Models\Image;
use App\Models\Member;
use App\Models\post;
use App\Models\Video;

class UserController extends Controller
{
    public function index()
    {

        $photos = Image::latest()->where('status', true)->take(20)->get();
        $news = post::latest()->where('status', true)->take(5)->get();
        $feedback = Feedback::where('status', true)->get();
//        $photos [] = shuffle($photos);

        return view('user_view.index', compact( 'photos', 'feedback', 'news'));
    }

    public function about()
    {
        $teamMember = Member::where('status', true)->get();
        return view('user_view.about', compact('teamMember'));
    }

    public function contact()
    {
        return view('user_view.contact');
    }

    public function service()
    {
        return view('user_view.services');
    }

    public function videos()
    {
        return view('user_view.gallery.video', [
            'videos' => Video::all()
        ]);
    }

    public function photos()
    {
        $collections = Collection::where('status', true)
            ->orderBy('name', 'ASC')->get();

        $images = Image::where('status', true)->latest()->get();

        return view('user_view.gallery.photos', compact('images', 'collections'));
    }

    public function view_collection(int $id)
    {
        return view('user_view.view_collection', [
            'collection' => Collection::where('status', true)->find($id)
        ]);
    }

    public function work()
    {
        return view('user_view.work', [
            'collections' => Collection::where('status', true)->get(),
        ]);
    }
}
