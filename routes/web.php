<?php
use App\Post;
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
 $posts =   Post::all();
    return view('welcome')->withPosts($posts);
})->name('home');

Route::get('/contact', function () {
   
       return view('pages.contact');
   });
   Route::get('/about', function () {
   
    return view('pages.about');
});




Route::resource('post', 'PostsController');

Route::post('post/{post}/comment','CommentsController@store' );
//Register routes
Route::get('/register','RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
//login and logout routes
Route::get('/login','SessionsController@create');
Route::post('/login','SessionsController@store');
Route::get('/logout','SessionsController@destroy');


