<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

use App\Models\Post;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MailController;

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
Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('n1kkou', function() {
    return view('n1kkou');
 }) ->name('home');
Route::get('n1kkou/skills', function() {
    return view('skills');
}) ->name('skills');
Route::get('/n1kkou/about', function() {
    return view('about');
}) ->name('about');


Route::get('n1kkou/{lang}', function($lang) {
    App::setlocale($lang);
    return view('n1kkou');
 });
Route::get('n1kkou/skills/{lang}', function($lang) {
    App::setlocale($lang);
    return view('skills');
});
Route::get('/n1kkou/about/{lang}', function($lang) {
    App::setlocale($lang);
    return view('about');
});






Route::get('/post/add', function () {
    DB::table('posts')-> insert([
        'title' => 'post1',
        'body' => 'heeeyyy'
    ]);
});



Route::get('/post', [BlogController::class, 'index'] );

Route::get('/post/create', function(){
    return view('blog.create');
});

Route::post('/post/create', [BlogController::class, 'store']) 
    -> name ('add-post');



Route::get('/post/{id}', [BlogController::class, 'get_post']);
    

Route::get('/client', [ClientController::class, 'index'] );
Route::get('/client/create', function(){
    return view('client.create'); });
Route::post('/client/create', [ClientController::class, 'store']) 
    -> name ('add-client');

    
Route::get('mail/send', [MailController::class, 'send']);

