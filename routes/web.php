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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/detailblog', function () {
    return view('detailblog');
});

Route::get('/gallery', function () {
    return view('gallery');
});

// Route::get('/portfolio-details', function () {
//     return view('portfolio-details');
// });

Route::get('/internship', function () {
    return view('internship');
});

Route::get('/internshipdata', function () {
    return view('internshipdata');
});

Route::get('/detailservice', function () {
    return view('detailservice');
});

Route::get('/advertising', function () {
    return view('advertising');
});
