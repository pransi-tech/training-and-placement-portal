<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegistrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CompanyController;

// Home / Welcome Route
Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

// Placement Officer Routes
Route::get('/placement-officer/login', function () {
    return view('placement_officer_login');
});

Route::get('/placement-officer/dashboard', function () {
    return view('placement_officer_dashboard');
})->name('placement.officer.dashboard');

// Explore Opportunities
Route::get('/explore-opportunities', function () {
    return view('explore_opportunities');
});

// Company Details
Route::get('/company-details/{company}', function ($company) {
    return view('company_details', compact('company'));
});

// Admin Routes
Route::get('/admin/login', function () {
    return view('admin');
});

Route::post('/admin/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect('/admin/dashboard');
    }

    return back()->with('error', 'Invalid Email or Password');
});

Route::get('/admin/dashboard', function () {
    return view('admin_dashboard');
});

// Student Routes
Route::get('/student/login', function () {
    return view('student');
});

Route::post('/student/login', [StudentRegistrationController::class, 'login']);

Route::get('/student', function () {
    return view('student');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [StudentRegistrationController::class, 'register']);

// Company Routes
Route::get('/company/login', function () {
    return view('company_login');
})->name('company.login');

Route::post('/company/login', [CompanyController::class, 'login'])
    ->name('company.login.submit');

Route::get('/company-register', function () {
    return view('company_register');
});

Route::get('/company/dashboard', function () {
    return view('company_dashboard');
});