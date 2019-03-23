<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{


  public function __construct()
  {
      $this->middleware('guest')->except('destroy');
  }



    public function create()
    {
        return view('auth.login');
    }


    public function store()
    {
       if(!auth()->attempt(request(['email','password']))){
         return back();
       }
    
       return redirect()->route('home');
       
    }


    public function destroy()
    {
      auth()->logout();

      return redirect()->home();
    }
}
