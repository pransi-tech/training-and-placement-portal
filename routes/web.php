<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('welcome');
});


// Admin Login Page
Route::get('/admin/login', function () {
    return view('admin.login');
});


// Student Login Page
Route::get('/student/login', function () {
    return view('student.login');
});