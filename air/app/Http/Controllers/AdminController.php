<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {      
        if(Auth::user()->role != 'admin'){
            return redirect()->route('login');
        }
        return $next($request);
       });



    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/admin');
    }
        public function about()
    {
        $data=['text','io'];
        return view('about',['po'=>$data]);
    }
    public function users()
    {
        return view('admin/users/index');
    }
    public function adduser()
    {
        return view('admin/users/adduser');
    }
}
