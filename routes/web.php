<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/', 'Frontend.home')->name('home');
Route::view('/about', 'Frontend.about')->name('about');
Route::view('/pricing', 'Frontend.pricing')->name('pricing');
Route::view('/contact', 'Frontend.contact')->name('contact');
Route::view('/blogs', 'Frontend.blogs')->name('blogs');
Route::view('/blog-details', 'Frontend.blog-details')->name('blog-details');

// Expert Services Near You

Route::view('/bookkeeping-in-chicago', 'Frontend.Services.bookkeeping-in-chicago')->name('bookkeeping-in-chicago');
Route::view('/bookkeeping-in-austin', 'Frontend.Services.bookkeeping-in-austin')->name('bookkeeping-in-austin');
Route::view('/bookkeeping-in-brooklyn', 'Frontend.Services.bookkeeping-in-brooklyn')->name('bookkeeping-in-brooklyn');
Route::view('/bookkeeping-in-honolulu', 'Frontend.Services.bookkeeping-in-honolulu')->name('bookkeeping-in-honolulu');

Route::view('/bookkeeping-in-houston', 'Frontend.Services.bookkeeping-in-houston')->name('bookkeeping-in-houston');
Route::view('/bookkeeping-in-indianapolis', 'Frontend.Services.bookkeeping-in-indianapolis')->name('bookkeeping-in-indianapolis');
Route::view('/bookkeeping-in-los-angeles', 'Frontend.Services.bookkeeping-in-los-angeles')->name('bookkeeping-in-los-angeles');
Route::view('/bookkeeping-in-portland', 'Frontend.Services.bookkeeping-in-portland')->name('bookkeeping-in-portland');

Route::view('/bookkeeping-in-santa-rosa', 'Frontend.Services.bookkeeping-in-santa-rosa')->name('bookkeeping-in-santa-rosa');
Route::view('/bookkeeping-in-california', 'Frontend.Services.bookkeeping-in-california')->name('bookkeeping-in-california');
Route::view('/bookkeeping-in-miami', 'Frontend.Services.bookkeeping-in-miami')->name('bookkeeping-in-miami');
Route::view('/bookkeeping-in-manchester', 'Frontend.Services.bookkeeping-in-manchester')->name('bookkeeping-in-manchester');

Route::view('/bookkeeping-in-denver', 'Frontend.Services.bookkeeping-in-denver')->name('bookkeeping-in-denver');
Route::view('/bookkeeping-in-dallas', 'Frontend.Services.bookkeeping-in-dallas')->name('bookkeeping-in-dallas');
Route::view('/bookkeeping-in-san-diego', 'Frontend.Services.bookkeeping-in-san-diego')->name('bookkeeping-in-san-diego');
Route::view('/bookkeeping-in-san-francisco', 'Frontend.Services.bookkeeping-in-san-francisco')->name('bookkeeping-in-san-francisco');


require __DIR__.'/auth.php';
require __DIR__.'/backend.php';
require __DIR__.'/frontend.php';
