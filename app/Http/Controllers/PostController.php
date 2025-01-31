<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index()
    {

        return view('posts.index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    //muestra el formulario para crear el recurso
    public function create(Post $post)
    {
        return view('posts.create', ['post' => $post]);

    }

    public function store(Request $request)
    {
        $post = $request->user()->posts()->create([
           'title' => $title = $request->title,
            'slug' => Str::slug($title),
            'body' => $request->body,

        ]);
        return redirect('/posts');

    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);

    }

//    public function update(Request $request, Post $post)
//    {
//
//    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
