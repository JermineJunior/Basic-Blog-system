<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Welcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }


    public function store(Request $data)
    {
          $this->validate(request(),[

            'name' =>  'required',
            'email'  =>   'required|email',
            'password'  =>  'required|min:6|confirmed',
          ]);

              $password = request('password');

       $user =    User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
    ]);
      
       auth()->login($user);
     /*   \Mail::to($user)->send(new Welcome); */
        
       return redirect()->route('home');

    }

  
}






