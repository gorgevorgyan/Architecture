<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts=Post::all()->toarray();
        return view('home',['posts'=>$posts]);
    }
        public function about()
    {
        return view('about');
    }
            public function contact()
    {
        return view('contact');
    }
    public function chat()
    {
        return view('chat');
    }
}
