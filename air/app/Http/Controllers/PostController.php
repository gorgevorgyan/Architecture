<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all()->toarray();
        return view('admin/posts/index',['posts'=>$posts]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/posts/create');
    }
        public function posts()
    {
       return view('posts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');
        $data['img'] = $request->input('img');
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        Post::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'img' => $imageName
        ]);

        return redirect()->route('adminpost');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $post=Post::find($id)->toarray();
        return view('post',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::find($id)->toarray();
        return view('admin/posts/edit',['posts' => $posts]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {   $id=$request->input('id');
         $data['title'] = $request->input('title');
        $data['description'] = $request->input('description');
        $data['img'] = $request->input('img');
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        Post::find($id)->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'img' => $imageName
        ]);

        return redirect()->route('adminpost');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         if(Post::destroy($id)){
            return redirect()->route('adminpost');
        }

    }
}
