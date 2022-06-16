<?php

use App\Http\Livewire\Subscribe;
use App\Http\Livewire\MessageForm;
use App\Http\Controllers\NewsLetter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MessagesController;

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
    return view('welcome');
});


// ---------------------------Redirect links----------------------------------
Route::get('/welcome', function(){
    return view('welcome');
})->name('welcome');
Route::get('/teachings', [PostController::class, 'index'])->name('teachings');
Route::get('/give', function(){
    return view('give');
})->name('give');
Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');
Route::get('/single-post/{post:slug}', [PostController::class, 'show'])->name('single-post');
Route::get('/videos', function(){
    return view('videos');
})->name('videos');


// --------------------------dashboard routes----------------------------------
Route::get('/messages', [MessagesController::class, 'index'])->name('messages');
Route::get('/create', function(){
    return view('dashboard/create-post');
})->name('create-post');
Route::get('/subscribers', [NewsLetter::class, 'index'])->name('subscribers');

// ---------------------------save post-------------------------------------
Route::post('/save', [PostController::class, 'store'])->name('post.store');

// ---------------------------edit post-----------------------------------
Route::get('/edit/{post}', [PostController::class, 'edit'])->name('post.edit');

// ---------------------------update post--------------------------------------
Route::put('/update/{post}', [PostController::class, 'update'])->name('post.update');

// ---------------------------delete post---------------------------------------
Route::delete('delete/{post}', [PostController::class, 'destroy'])->name('post.destroy');

// ---------------------------search post---------------------------------------
Route::get('teachings/search', [PostController::class, 'search'])->name('post.search');



Auth::routes(['verify' => true]);

// Register route
Route::get('/register', function(){
    return view('auth/register');
})->name('register');

// Login route
Route::get('/login', function(){
    return view('auth/login');
})->name('login');

// Logout Route
Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

// Livewrie Message Form Validation and Save
Route::post('/message', MessageForm::class);

// Newsletter livewire route
Route::post('/subscribe' , Subscribe::class);
