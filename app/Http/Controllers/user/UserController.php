<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Image;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $collections = Collection::all();
        $photos = Image::all();

        return view('user_view.index', compact('collections', 'photos'));
    }

    public function about()
    {
        return view('user_view.about');
    }

    public function contact()
    {
        return view('user_view.contact');
    }
}
