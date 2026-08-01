<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegistrationController;

// Home
Route::get('/', function () {
    return view('welcome');
});

// Register
Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [StudentRegistrationController::class, 'store']);

// Student Login
Route::get('/student/login', function () {
    return view('student');
});

// Admin Login
Route::get('/admin/login', function () {
    return view('admin');
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