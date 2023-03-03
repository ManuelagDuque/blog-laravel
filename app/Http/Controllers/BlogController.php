<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function home(){
        return view('home');
    }

    public function blog(){
        // $posts = Post::get(); // Esto es Eloquent
        // $post = Post::first(); // obtener un único registro
        // $post = Post::find(17); // obtener un registro por id
        //dd($post);
        $posts = Post::latest()->paginate(5); // paginar 
        return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post){
        return view('post', ['post'=>$post]);
    }
}
