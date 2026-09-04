<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.index');
})->name('home');

Route::get('/about-us', function () {
    return view('frontend.pages.about-us');
})->name('about-us');

Route::get('/our-team', function () {
    return view('frontend.pages.our-team');
})->name('our-team');

Route::get('/services', function () {
    return view('frontend.pages.services');
})->name('services');

// Services

Route::get('/crm-development', function () {
    return view('frontend.pages.services.crm-development');
})->name('crm-development');

Route::get('/digital-marketing', function () {
    return view('frontend.pages.services.digital-marketing');
})->name('digital-marketing');

Route::get('/performance-marketing', function () {
    return view('frontend.pages.services.performance-marketing');
})->name('performance-marketing');

Route::get('/seo-and-aeo', function () {
    return view('frontend.pages.services.seo-and-aeo');
})->name('seo-and-aeo');

Route::get('/social-media-marketing', function () {
    return view('frontend.pages.services.social-media-marketing');
})->name('social-media-marketing');

Route::get('/website-development', function () {
    return view('frontend.pages.services.website-development');
})->name('website-development');

Route::get('/whatsapp-api', function () {
    return view('frontend.pages.services.whatsapp-api');
})->name('whatsapp-api');

Route::get('/political-pr', function () {
    return view('frontend.pages.services.political-pr');
})->name('political-pr');


// Industries

Route::get('/education', function () {
    return view('frontend.pages.industries.education');
})->name('education');

Route::get('/food-and-beverage', function () {
    return view('frontend.pages.industries.food-and-beverage');
})->name('food-and-beverage');

Route::get('/healthcare', function () {
    return view('frontend.pages.industries.healthcare');
})->name('healthcare');

Route::get('/manufacturing-and-fmcg', function () {
    return view('frontend.pages.industries.manufacturing-and-fmcg');
})->name('manufacturing-and-fmcg');

Route::get('/real-estate', function () {
    return view('frontend.pages.industries.real-estate');
})->name('real-estate');

Route::get('/tour-and-travel', function () {
    return view('frontend.pages.industries.tour-and-travel');
})->name('tour-and-travel');


Route::get('/our-work', function () {
    return view('frontend.pages.our-work');
})->name('our-work');

Route::get('/contact-us', function () {
    return view('frontend.pages.contact-us');
})->name('contact-us');

Route::get('/blogs', function () {
    return view('frontend.pages.blogs');
})->name('blogs');

Route::get('/blog-details', function () {
    return view('frontend.pages.blog-details');
})->name('blog-details');


