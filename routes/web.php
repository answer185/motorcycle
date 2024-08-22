<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Livewire\Posts;
use App\Livewire\Todos;

Route::get("/lw/counter", Counter::class);
Route::get("/lw/post", CreatePost::class);
Route::get("/lw/posts", Posts::class);
Route::get("/lw/todos", Todos::class);

// Route::get('/', function () {
//     return view('welcome');
// });
