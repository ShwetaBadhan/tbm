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

Route::get('/service-details', function () {
    return view('frontend.pages.service-details');
})->name('service-details');


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


