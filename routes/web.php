<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/products/{id?}', function (string $id = null) {
    if ($id) {
        return view('products', ['id' => $id]);
    } else {
        return 'no content was found';
    }
})->whereNumber('id')->name('products');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');