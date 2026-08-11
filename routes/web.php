<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegistrationController;
use App\Http\Controllers\CompanyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| HOME PAGE
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| PLACEMENT OFFICER
|--------------------------------------------------------------------------
*/

// Placement Officer Login
Route::get('/placement-officer/login', function () {
    return view('placement_officer_login');
});

// Placement Officer Dashboard
Route::get('/placement-officer/dashboard', function () {
    return view('placement_officer_dashboard');
})->name('placement.officer.dashboard');


/*
|--------------------------------------------------------------------------
| EXPLORE OPPORTUNITIES
|--------------------------------------------------------------------------
*/

Route::get('/explore-opportunities', function () {
    return view('explore_opportunities');
});


/*
|--------------------------------------------------------------------------
| COMPANY DETAILS
|--------------------------------------------------------------------------
*/

Route::get('/company-details/{company}', function ($company) {
    return view('company_details', compact('company'));
});


/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

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


/*
|--------------------------------------------------------------------------
| STUDENT
|--------------------------------------------------------------------------
*/

// Student Login Page
Route::get('/student/login', function () {
    return view('student');
});

// Student Login Submit
Route::post('/student/login', [
    StudentRegistrationController::class,
    'login'
]);

// Student Page
Route::get('/student', function () {
    return view('student');
});

// Student Registration Page
Route::get('/register', function () {
    return view('register');
});

// Student Registration Submit
Route::post('/register', [
    StudentRegistrationController::class,
    'store'
]);


/*
|--------------------------------------------------------------------------
| COMPANY LOGIN
|--------------------------------------------------------------------------
*/

// Company Login Page
Route::get('/company/login', function () {
    return view('company_login');
})->name('company.login');

// Company Login Submit
Route::post('/company/login', [
    CompanyController::class,
    'login'
])->name('company.login.submit');


/*
|--------------------------------------------------------------------------
| COMPANY DASHBOARD
|--------------------------------------------------------------------------
*/

// Main Company Dashboard
Route::get('/company/dashboard', function () {
    return view('company_dashboard');
})->name('company.dashboard');


/*
|--------------------------------------------------------------------------
| COMPANY PROFILE
|--------------------------------------------------------------------------
*/

Route::get('/company/profile', function () {
    return view('company_profile');
})->name('company.profile');


/*
|--------------------------------------------------------------------------
| COMPANY JOB POSTINGS
|--------------------------------------------------------------------------
*/

// All Job Postings
Route::get('/company/jobs', function () {
    return view('company_jobs');
})->name('company.jobs');

// Create New Job
Route::get('/company/jobs/create', function () {
    return view('company_create_job');
})->name('company.jobs.create');


/*
|--------------------------------------------------------------------------
| COMPANY APPLICATIONS
|--------------------------------------------------------------------------
*/

// All Applications
Route::get('/company/applications', function () {
    return view('company_applications');
})->name('company.applications');

// Individual Application Details
Route::get('/company/application/{id}', function ($id) {
    return view('company_application_details', compact('id'));
})->name('company.application.details');


/*
|--------------------------------------------------------------------------
| SHORTLISTED STUDENTS
|--------------------------------------------------------------------------
*/

Route::get('/company/shortlisted', function () {
    return view('company_shortlisted');
})->name('company.shortlisted');


/*
|--------------------------------------------------------------------------
| COMPANY INTERVIEWS
|--------------------------------------------------------------------------
*/

// All Interviews
Route::get('/company/interviews', function () {
    return view('company_interviews');
})->name('company.interviews');

// Schedule New Interview
Route::get('/company/interviews/create', function () {
    return view('company_schedule_interview');
})->name('company.interviews.create');


/*
|--------------------------------------------------------------------------
| UPCOMING DRIVES
|--------------------------------------------------------------------------
*/

// All Upcoming Drives
Route::get('/company/drives', function () {
    return view('company_drives');
})->name('company.drives');

// Individual Drive Details
Route::get('/company/drive/{id}', function ($id) {
    return view('company_drive_details', compact('id'));
})->name('company.drive.details');


/*
|--------------------------------------------------------------------------
| COMPANY NOTIFICATIONS
|--------------------------------------------------------------------------
*/

Route::get('/company/notifications', function () {
    return view('company_notifications');
})->name('company.notifications');


/*
|--------------------------------------------------------------------------
| COMPANY SETTINGS
|--------------------------------------------------------------------------
*/

Route::get('/company/settings', function () {
    return view('company_settings');
})->name('company.settings');


/*
|--------------------------------------------------------------------------
| COMPANY LOGOUT
|--------------------------------------------------------------------------
*/

Route::get('/company/logout', function () {

    session()->forget('company_name');

    return redirect()
        ->route('company.login')
        ->with('success', 'You have been logged out successfully.');

})->name('company.logout');


/*
|--------------------------------------------------------------------------
| WELCOME PAGE
|--------------------------------------------------------------------------
*/

Route::get('/welcome', function () {
    return view('welcome');
});