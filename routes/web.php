<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('welcome');
});

// Placement Officer Login
Route::get('/placement-officer/login', function () {
    return view('placement_officer_login');
});

// Explore Opportunities
Route::get('/explore-opportunities', function () {
    return view('explore_opportunities');
});

// Company Details
Route::get('/company-details/{company}', function ($company) {
    return view('company_details', compact('company'));
});

// Admin Login Page
Route::get('/admin/login', function () {
    return view('admin');
});

// Student Login Page
Route::get('/student/login', function () {
<<<<<<< HEAD
    return view('student.student');
});
// Company Login Page (GET)
Route::get('/company/login', function () {
    return view('company_login');
})->name('company.login');

// Company Login Form Submission (POST)
Route::post('/company/login', function () {
    // Authentication logic later
})->name('company.login.submit');
Route::get('/register', function () {
    return view('register');

    return view('student');
});