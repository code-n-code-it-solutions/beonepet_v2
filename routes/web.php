<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function (){
    Route::get('/', 'index')->name('home');
    Route::get('/detail/{slug}', 'show')->name('animal-detail');
    Route::get('/contact-us', 'contactUs')->name('contact-us');
    Route::get('/about-us', 'aboutUs')->name('about-us');
    Route::get('/planes', 'planes')->name('planes');
    Route::get('/faqs', 'faqs')->name('faqs');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/blog-detail/{slug}', 'blogDetail')->name('blog-detail');
    Route::get('/lost-n-found', 'lostAndFound')->name('lost-n-found');
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacy-policy');
    Route::get('/terms-and-conditions', 'termsAndConditions')->name('terms-and-conditions');
    Route::get('/publish-ad', 'publishAd')->name('publish-ad');
});
