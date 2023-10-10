<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name1" => "pauzia  ",
        "email1" => "pauziaaziaahh@gmail.com",
        "image1" => "paupau.jpeg",

    
        "name" => "cut khaulah ",
        "email" => "cutkhaulahh@gmail.com",
        "image" => "aul.jpeg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts/{slug}', [PostController::class, 'show']);