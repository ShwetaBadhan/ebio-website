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

Route::get('/blog-details', function () {
    return view('frontend.pages.blog-details');
})->name('blog-details');

Route::get('/records', function () {
    return view('frontend.pages.records');
})->name('records');

Route::get('/record-details', function () {
    return view('frontend.pages.record-details');
})->name('record-details');


Route::get('/autism', function () {
    return view('frontend.pages.services.autism');
})->name('autism');

Route::get('/cerebral-palsy', function () {
    return view('frontend.pages.services.cerebral-palsy');
})->name('cerebral-palsy');

Route::get('/adhd', function () {
    return view('frontend.pages.services.adhd');
})->name('adhd');

Route::get('/cancer-treatment', function () {
    return view('frontend.pages.services.cancer-treatment');
})->name('cancer-treatment');

Route::get('/paralysis', function () {
    return view('frontend.pages.services.paralysis');
})->name('paralysis');


Route::get('/diabetes', function () {
    return view('frontend.pages.services.diabetes');
})->name('diabetes');

Route::get('/lung-diseases', function () {
    return view('frontend.pages.services.lung-diseases');
})->name('lung-diseases');

