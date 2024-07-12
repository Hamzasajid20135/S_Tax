<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\FeedbackController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact_us');
Route::get('/blog-details', [PageController::class, 'blogDetails'])->name('blog_details');
Route::get('/blog-listing', [PageController::class, 'blogListing'])->name('blog_listing');
Route::get('/quotation', [PageController::class, 'Quotation'])->name('quotation');
Route::get('feedback', [FeedbackController::class, 'create']);
Route::post('feedback', [FeedbackController::class, 'store']);
Route::get('messages', [FeedbackController::class, 'user_messages']);
Route::get('/map', function () {
    return view('map');
});

