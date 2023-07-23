<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

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
    return view('blog.blog');
});

Route::get('/detailblog_pengunjung', function () {
    return view('blog.blogpengunjung');
});

Route::get('/detailblog_seo', function () {
    return view('blog.blogseo');
});

Route::get('/detailblog_macam_macam', function () {
    return view('blog.blogmacam');
});

Route::get('/detailblog_domain_hosting', function () {
    return view('blog.blogdomain');
});

Route::get('/detailblog_masa_aktif', function () {
    return view('blog.blogmasa');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/internship', function () {
    return view('internship.internship');
});

Route::get('/internshipdata', function () {
    return view('internship.internshipdata');
});

Route::post('/internshipdata/create', [GuestController::class, 'internshipCreate'])->name('internshipdata.create');

Route::get('/detailservice', function () {
    return view('service.detailservice');
});

Route::get('/advertising', function () {
    return view('service.advertising');
});

Route::get('/contentwriting', function () {
    return view('service.contentwriting');
});

Route::get('/creativeservice', function () {
    return view('service.creativeservice');
});

Route::get('/itconsultant', function () {
    return view('service.itconsultant');
});

Route::get('/seoservice', function () {
    return view('service.seoservice');
});

Route::get('/webdevelopment', function () {
    return view('service.webdevelopment');
});