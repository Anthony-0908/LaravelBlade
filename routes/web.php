<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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


//Sa navbar naka connnect
Route::get('/', [\App\Http\Controllers\HomeController::class , 'index'])->name('home');
Route::get('posts/{post}',[\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');


// Route::get('/About',function() {
//     return view('about');
// });

// Route::get('/contact', function() {
//     return view('contact');
// });
