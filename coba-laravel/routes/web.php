<?php

use App\Http\Controllers\DashboardController;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "leonardo yemi",
        "email" => "leonardoyemi@gmail.com",
        "image" => "gambar1.png"
    ]);
});




Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);


Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});


Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'posts' => $category->posts->load('category', 'author')
    ]);
});

Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),

    ]);
});
