<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
   
    public function index()
    {

       
        $posts = Post::latest()->get();/* >
        filter(request(['month','id']))
        ->get(); */
        
        return view('posts.index',compact('posts'));
    }

    
    public function create()
    {
        //
        return view('posts.create');
    }

    public function store(Request $request)
    {

        //validate the form data
        $this->validate($request,[
            'title' =>   'required|unique:posts|max:255',
            'body'  =>    'required',
        ]);
        //store to the DB
          auth()->user()->publish(
              new Post(request(['title','body']))
          );

            //redirct the user
            return redirect()->route('post.index');
    }

   
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
    
    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

   
    public function destroy(Post $post)
    {
        //
    }
}
