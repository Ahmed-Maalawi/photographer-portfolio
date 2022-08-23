<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Feedback;
use App\Models\Image;
use App\Models\Member;
use App\Models\post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $collections = Collection::all();
        $photos = Image::where('status', true)->get();
        $news = post::where('status', true)->get();
        $feedback = Feedback::where('status', true)->get();

        return view('user_view.index', compact('collections', 'photos', 'feedback', 'news'));
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

    public function work()
    {
        $collection = Collection::where('status', true)->get();

        return view('user_view.work', compact('collection'));
    }

    public function photos()
    {
        $collections = Collection::where('status', true)->orderBy('name', 'ASC')->get();
        $images = Image::where('status', true)->latest()->get();
        return view('user_view.gallery.photos', compact('images', 'collections'));
    }

    public function view_collection($id)
    {

        $collection = Collection::findOrFail($id);

        $photos = Image::where(function ($query) {
            $query->where('status', '=', true);
        })->where(function ($query) use ($id){
            $query->where('collection_id', '=', $id);
        })->get(); //'status', true, 'collection_id', $id

        return view('user_view.view_collection', compact('collection', 'photos'));
    }
}
