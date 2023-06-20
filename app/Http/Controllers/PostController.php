<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;
use \App\Models\User;
use \Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Auth;



class PostController extends Controller
{
    //


    public function list(){

        // $posts = Post::orderByDesc('created_at')->get();

        $posts = Post::orderByDesc('created_at')->with('user')->get();

        if(isset(auth()->user()->id)){
            $userId = auth()->user()->id;
        }
        else{

            $userId = null;
        }

        return view('list', [ 'posts'=> $posts, 'userId'=> $userId]);


    }




// // Check if the user is logged in
// if (Auth::check()) {
//     // Retrieve the logged-in user's ID
//     $userId = Auth::id();

//     // Use the ID as needed
//     // ...
// } else {
//     // User is not logged in
//     // Handle the situation accordingly
//     // ...
// }





    public function create(){

       $userId = auth()->user()->id;


        return view('create', ['userId'=> $userId]);
        // return view('create');
        
    }

    public function store(){


        // $data = request()->all();
        $data = request()->validate([
            'user_id'=>['integer', Rule::exists('users', 'id')],
            'title'=>['string'],
            'content'=>['string'],
        ]);

        Post::create($data);

        return redirect('/');
        
    }

   

    public function edit(Post $post){     

        // $post = Post::find($post);   //no need anymore becuase we already did in parameters of this method

        return view('edit', ['post' => $post]);
        
    }

    public function update(Post $post){

        $data = request()->validate([
            'title'=>['string'],
            'content'=>['string'],
        ]);

        $post->update($data);

        return redirect('/');

        
    }

    public function destroy(Post $post){

        $post->delete();

        return redirect('/');
        
    }
}
