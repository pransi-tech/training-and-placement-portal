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

// Company Details (Dynamic)
Route::get('/company-details/{company}', function ($company) {
    return view('company_details', compact('company'));


// Admin Login Page
Route::get('/admin/login', function () {
    return view('admin.login');
});


// Student Login Page
Route::get('/student/login', function () {
    return view('student.login');

});