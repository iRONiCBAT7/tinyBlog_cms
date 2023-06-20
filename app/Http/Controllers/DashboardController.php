<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class DashboardController extends Controller
{
    //


    public function showDash(){


         $userId = Auth::id();

        $posts = Post::where('user_id', $userId)
        ->orderByDesc('created_at')
        ->with('user')
        ->get();




        return view('dashboard', ['posts'=>$posts, 'user'=>auth()->user() ]);

        // return view('dashboard', ['user'=>auth()->user()]);
        
    }



    // public function userPosts(){


       
    //     return view('dashboard', ['posts'=>$posts]);
        

    // } 
}
