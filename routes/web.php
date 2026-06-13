<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.index');
})->name('home');

Route::get('/about-us', function () {
    return view('frontend.pages.about-us');
})->name('about-us');

Route::get('/services', function () {
    return view('frontend.pages.services');
})->name('services');

Route::get('/service-details', function () {
    return view('frontend.pages.service-details');
})->name('service-details');

Route::get('/the-founder', function () {
    return view('frontend.pages.the-founder');
})->name('the-founder');


Route::get('/awards', function () {
    return view('frontend.pages.awards');
})->name('awards');

Route::get('/award-details', function () {
    return view('frontend.pages.award-details');
})->name('award-details');


Route::get('/contact-us', function () {
    return view('frontend.pages.contact-us');
})->name('contact-us');

