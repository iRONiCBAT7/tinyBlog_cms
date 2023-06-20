<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\User;
use \Illuminate\Validation\Rule;


class AuthController extends Controller
{
    //, 


    public function show()
    {
        return view('login');
    }

    public function registerShow()
    {
        return view('register');
    }



    
    public function register(){


        $data = request()->all();
        // $data = request()->validate([
        //     // 'user_id'=>['integer', Rule::exists('users', 'id')],
        //     'name'=>['string'],
        //     'email'=>['string', Rule::exists('users', 'email')],   // users is here dbs name
        // ]);

//         $data = request()->validate([
//             'name' => ['required', 'string'],
//             'email' => ['string', Rule::exists('users', 'email')],
//         ]);
// dd($data);




        User::create($data);              /// User is a model

        return redirect('/dashboard');
        
    }







    public function login()
    {
        validator(request()->all(), [
            'email'=>['required', 'email'],
            'password'=>['required']
        ])->validate();

        if(auth()->attempt(request()->only(['email', 'password']))){
            return redirect('/dashboard');
        }

        return redirect()->back()->withErrors(['email'=>"Invalid Credentials!"]);
    }




    public function logout()
    {
        auth()->logout();

        return redirect('/login');
    }









}
