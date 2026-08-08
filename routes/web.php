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

// Admin Login Page
// Admin Login Page
Route::get('/admin/login', function () {
    return view('admin');
});
// Admin Login Submit
Route::post('/admin/login', function(Request $request){

    $credentials = $request->only('email','password');

    if(Auth::attempt($credentials))
    {
        return redirect('/admin/dashboard');
    }

    return back()->with('error','Invalid Email or Password');
});

// Student Login Page
Route::get('/student/login', function () {
    return view('student');
});

// Student Login Page
// Company Login Submit
Route::post('/company/login', [CompanyController::class, 'login'])
    ->name('company.login.submit');
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
// Company Registration Page
Route::get('/company-register', function () {
    return view('company_register');
});

// Student Registration Submit
Route::post('/register', [StudentRegistrationController::class, 'store']);
Route::get('/admin/dashboard', function () {
    return view('admin_dashboard');
});