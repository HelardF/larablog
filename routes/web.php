<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

// Route::get Conultar
// Route::post Guardar
// Route::put Actualizar
//Rote::delete eliminar


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog',function (){
    //consulta a la base de atos
    $posts =[
        ['id'=>1,'title'=>'PHP','slug'=>'php'],
        ['id'=>2,'title'=>'Javascript','slug'=>'javascript'],
        ['id'=>3,'title'=>'Laravel','slug'=>'laravel'],
    ];
    return view('blog',compact('posts'));
})->name('blog');

Route::get('/blog/{slug}',function ($slug){
    $post =$slug;
    return view('post',['post' => $post]);
})->name('post');


