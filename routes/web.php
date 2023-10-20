<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

use App\Models\Category;


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
        "image" => "aul.jpeg",

        "name2" => "aurel gustiyarani ",
        "email2" => "aurelgustiyarani200768@gmail.com",
        "image2" => "aurel.jpeg",

        "name3" => "Nabila Amelia ",
        "email3" => "nblamelia@gmail.com",
        "image3" => "amel.jpeg",

        "name4" => "Dina Linda Sari ",
        "email4" => "dinasarii@gmail.com",
        "image4" => "dina.jpeg",

        "name5" => "Alifa Azzahra ",
        "email5" => "azzahraalifa534@gmail.com",
        "image5" => "alifa.jpeg"

    ]);
});

Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});


Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});