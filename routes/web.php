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

Route::view('/thankyou', 'Frontend.thankyou')->name('thankyou');
Route::view('/privacy-policy', 'Frontend.privacy-policy')->name('privacy-policy');
Route::view('/terms-conditions', 'Frontend.terms-conditions')->name('terms-conditions');

// Expert Services Near You

// Route::view('/bookkeeping-in-chicago', 'Frontend.Services.bookkeeping-in-chicago')->name('bookkeeping-in-chicago');
// Route::view('/bookkeeping-in-austin', 'Frontend.Services.bookkeeping-in-austin')->name('bookkeeping-in-austin');
// Route::view('/bookkeeping-in-brooklyn', 'Frontend.Services.bookkeeping-in-brooklyn')->name('bookkeeping-in-brooklyn');
// Route::view('/bookkeeping-in-honolulu', 'Frontend.Services.bookkeeping-in-honolulu')->name('bookkeeping-in-honolulu');

// Route::view('/bookkeeping-in-houston', 'Frontend.Services.bookkeeping-in-houston')->name('bookkeeping-in-houston');
// Route::view('/bookkeeping-in-indianapolis', 'Frontend.Services.bookkeeping-in-indianapolis')->name('bookkeeping-in-indianapolis');
// Route::view('/bookkeeping-in-los-angeles', 'Frontend.Services.bookkeeping-in-los-angeles')->name('bookkeeping-in-los-angeles');
// Route::view('/bookkeeping-in-portland', 'Frontend.Services.bookkeeping-in-portland')->name('bookkeeping-in-portland');

// Route::view('/bookkeeping-in-santa-rosa', 'Frontend.Services.bookkeeping-in-santa-rosa')->name('bookkeeping-in-santa-rosa');
// Route::view('/bookkeeping-in-california', 'Frontend.Services.bookkeeping-in-california')->name('bookkeeping-in-california');
// Route::view('/bookkeeping-in-miami', 'Frontend.Services.bookkeeping-in-miami')->name('bookkeeping-in-miami');
// Route::view('/bookkeeping-in-manchester', 'Frontend.Services.bookkeeping-in-manchester')->name('bookkeeping-in-manchester');

// Route::view('/bookkeeping-in-denver', 'Frontend.Services.bookkeeping-in-denver')->name('bookkeeping-in-denver');
// Route::view('/bookkeeping-in-dallas', 'Frontend.Services.bookkeeping-in-dallas')->name('bookkeeping-in-dallas');
// Route::view('/bookkeeping-in-san-diego', 'Frontend.Services.bookkeeping-in-san-diego')->name('bookkeeping-in-san-diego');
// Route::view('/bookkeeping-in-san-francisco', 'Frontend.Services.bookkeeping-in-san-francisco')->name('bookkeeping-in-san-francisco');

// WHAT WE OFFER

Route::view('/bookkeeping-services', 'Frontend.Offer.bookkeeping-services')->name('bookkeeping-services');
Route::view('/payroll-services', 'Frontend.Offer.payroll-services')->name('payroll-services');
Route::view('/tax-and-accounting', 'Frontend.Offer.tax-and-accounting')->name('tax-and-accounting');
Route::view('/cfo-advisory', 'Frontend.Offer.cfo-advisory')->name('cfo-advisory');
Route::view('/incorporation', 'Frontend.Offer.incorporation')->name('incorporation');
Route::view('/sales-tax-consulting', 'Frontend.Offer.sales-tax-consulting')->name('sales-tax-consulting');


// INDUSTRIES WE SERVE

Route::view('/accounting-services-for-small-business', 'Frontend.Industries.accounting-services-for-small-business')->name('accounting-services-for-small-business');
Route::view('/healthcare', 'Frontend.Industries.healthcare')->name('healthcare');
Route::view('/private-industries', 'Frontend.Industries.private-industries')->name('private-industries');
Route::view('/real-estate', 'Frontend.Industries.real-estate')->name('real-estate');
Route::view('/lodging-facilities', 'Frontend.Industries.lodging-facilities')->name('lodging-facilities');
Route::view('/ecommerce', 'Frontend.Industries.ecommerce')->name('ecommerce');
Route::view('/colleges-and-universities', 'Frontend.Industries.colleges-and-universities')->name('colleges-and-universities');
Route::view('/accounting-services-for-startup', 'Frontend.Industries.accounting-services-for-startup')->name('accounting-services-for-startup');


Route::fallback(function () {
    return response()->view('Error.404', [], 404);
});

require __DIR__.'/auth.php';
require __DIR__.'/backend.php';
require __DIR__.'/frontend.php';
