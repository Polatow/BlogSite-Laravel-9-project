<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function front_index()
    {
        return view('Front.front_index');
    }

    public function news()
    {
        return view('Front.news');
    }

    public function single_new()
    {
        return view('Front.single_new');
    }

    public function makalalar()
    {
        return view('Front.makalalar');
    }

    public function single_makala()
    {
        return view('Front.single_makala');
    }

    public function about()
    {
        return view('Front.about');
    }

    public function contact()
    {
        return view('Front.contact');
    }
}
