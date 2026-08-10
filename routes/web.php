<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegistrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CompanyController;

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

// Admin Login Submit
Route::post('/admin/login', function (Request $request) {

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect('/admin/dashboard');
    }

    return back()->with('error', 'Invalid Email or Password');
});

// Admin Dashboard
Route::get('/admin/dashboard', function () {
    return view('admin_dashboard');
});

// Student Login Page
Route::get('/student/login', function () {
    return view('student');
});

// Student Login Submit
Route::post('/student/login', [StudentRegistrationController::class, 'login']);

// Company Login Page
Route::get('/company/login', function () {
    return view('company_login');
})->name('company.login');

// Company Login Submit
Route::post('/company/login', [CompanyController::class, 'login'])
    ->name('company.login.submit');

// Company Dashboard
Route::get('/company/dashboard', function () {
    return view('company_dashboard');
});

// Student Registration Page
Route::get('/register', function () {
    return view('register');
});

// Student Registration Submit
Route::post('/register', [StudentRegistrationController::class, 'store']);

// Student Page
Route::get('/student', function () {
    return view('student');
});

// Welcome Page
Route::get('/welcome', function () {
    return view('welcome');
});