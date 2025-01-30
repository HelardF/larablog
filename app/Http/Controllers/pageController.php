<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        $posts = Post::all();
        //$posts = Post::first();
        //$posts = Post::find(46);

        return view('blog',compact('posts'));

    }

    public function post(Post $post)
    {

        return view('post',['post' => $post]);

    }
}
