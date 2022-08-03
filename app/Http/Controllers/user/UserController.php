<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Feedback;
use App\Models\Image;
use App\Models\Member;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $collections = Collection::all();
        $photos = Image::where('status', true)->get();
        $feedback = Feedback::where('status', true)->get();

        return view('user_view.index', compact('collections', 'photos', 'feedback'));
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
        return view('user_view.work');
    }

    public function photos()
    {
        $collections = Collection::where('status', true)->orderBy('name', 'ASC')->get();
        $images = Image::where('status', true)->latest()->get();
        return view('user_view.gallery.photos', compact('images', 'collections'));
    }
}
