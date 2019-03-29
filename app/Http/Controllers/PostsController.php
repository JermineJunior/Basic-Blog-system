<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;

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
          Session::flash('success' , "The Post Is Successfully Created!");
            //redirct the user
            return redirect()->route('post.index');
    }

   
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
    
    public function edit(Post $post)
    {
        
        return view('posts.edit',compact(['post']));
    }

    public function update(Request $request, Post $post)
    {
        $this->validate($request,array(
            'title' => 'required|max:255',  
            'body' => 'required'
        ));

       
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        Session::flash('success' , "The Post Is Successfully Saved!");
        
        return redirect()->route('post.show' , $post->id);
    }

   
    public function destroy(Post $post)
    {
        $post->delete();
        $post->save;

        Session::flash('success' , "The Post Is Successfully Deleted!");
        return redirect()->route('post.index');
    }
}
