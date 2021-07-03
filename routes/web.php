<?php

use Illuminate\Support\Facades\Route;
use App\Models\Admin\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    Alert::info("Oyina.uz saytiga xush kelibsiz!", "Ushbu sayt hozirda sinov rejimda ishlamoqda!");
    return view('site.index');
});

<<<<<<< HEAD
Route::get('/post/{slug}', function(Post $post) {
    return view('site.single-news', 'post');
=======
Route::get('/posts/{post:slug}', function(Post $post) {
    return view('site.single-news', ['post' => $post]);
>>>>>>> 3b5574fde172a1ff329db38cd88a5c9d6aa58fb1
});

Route::get('/categorynews', function () {
    return view('site.category-news');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
