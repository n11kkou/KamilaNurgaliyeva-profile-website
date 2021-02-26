<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

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

Route::get('/n1kkou', function () {
    return view('n1kkou');
}) ->name('home');

Route::get('/n1kkou/skills', function () {
    return view('skills');
}) ->name('skills');

Route::get('/n1kkou/about', function () {
    return view('about');
}) ->name('about');

Route::get('/post/create', function () {
    DB::table('posts')-> insert([
        'title' => 'post1',
        'body' => 'heeeyyy'
    ]);
});

Route::get('/post', function() {
    $post = Post::find(1);
    return $post;
});