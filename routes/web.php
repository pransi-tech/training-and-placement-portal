<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentRegistrationController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactMessageController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/contact', [ContactMessageController::class, 'store']);


/*
|--------------------------------------------------------------------------
| PLACEMENT OFFICER
|--------------------------------------------------------------------------
*/

// Placement Officer Login Page
Route::get('/placement-officer/login', function () {
    return view('placement_officer_login');
})->name('placement.officer.login');

// Placement Officer Login
Route::post('/placement-officer/login', function (Request $request) {

    $email = $request->input('email');
    $password = $request->input('password');

    /*
     * Temporary login handling.
     * Replace this with database authentication when
     * Placement Officer table/authentication is connected.
     */

    if ($email && $password) {

        session([
            'placement_officer_logged_in' => true,
            'placement_officer_email' => $email
        ]);

        return redirect()
            ->route('placement.officer.dashboard');
    }

    return back()->with('error', 'Invalid Email or Password');

})->name('placement.officer.login.submit');


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

})->name('admin.login');


// Admin Login
Route::post('/admin/login', function (Request $request) {

    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {

        $request->session()->regenerate();

        return redirect()
            ->route('admin.dashboard');
    }

    return back()
        ->with('error', 'Invalid Email or Password');

})->name('admin.login.submit');


// Admin Dashboard
Route::get('/admin/dashboard', function () {

    return view('admin_dashboard');

})->name('admin.dashboard');


/*
|--------------------------------------------------------------------------
| STUDENT
|--------------------------------------------------------------------------
*/

// Student Login Page
Route::get('/student/login', function () {

    return view('student');

})->name('student.login');


// Student Login
Route::post('/student/login', [
    StudentRegistrationController::class,
    'login'
])->name('student.login.submit');


// Student Registration Page
Route::get('/register', function () {

    return view('register');

})->name('register');


// Student Registration
Route::post('/register', [
    StudentRegistrationController::class,
    'store'
])->name('student.register.submit');


// Student Dashboard
Route::get('/student/dashboard', function () {

    return view('student_dashboard');

})->name('student.dashboard');


// Student Dashboard with Student ID
Route::get('/student/dashboard/{id}', function ($id) {

    $student = \App\Models\StudentRegistration::findOrFail($id);

    return view('student_dashboard', compact('student'));

})->name('student.dashboard.with.id');


/*
|--------------------------------------------------------------------------
| COMPANY LOGIN
|--------------------------------------------------------------------------
*/

// Company Login Page
Route::get('/company/login', function () {

    return view('company_login');

})->name('company.login');


// Company Login
Route::post('/company/login', [
    CompanyController::class,
    'login'
])->name('company.login.submit');


/*
|--------------------------------------------------------------------------
| COMPANY REGISTRATION
|--------------------------------------------------------------------------
*/

// Company Registration Page
Route::get('/company-register', function () {

    return view('company_register');

})->name('company.register.page');


// Company Registration
Route::post('/company-register', function (Request $request) {

    /*
     * Temporary session-based company registration.
     *
     * This fixes the current POST /company-register error
     * and redirects the company to its dashboard.
     *
     * Later this should save the company into the database.
     */

    session([
        'company_logged_in' => true,
        'company_id' => $request->company_id,
        'company_name' => $request->company_name,
        'company_email' => $request->hr_email,
    ]);

    return redirect()
        ->route('company.dashboard')
        ->with('success', 'Company registered successfully!');

})->name('company.register.submit');


/*
|--------------------------------------------------------------------------
| COMPANY DASHBOARD
|--------------------------------------------------------------------------
*/

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

Route::get('/company/jobs', function () {

    return view('company_jobs');

})->name('company.jobs');


Route::get('/company/jobs/create', function () {

    return view('company_create_job');

})->name('company.jobs.create');


/*
|--------------------------------------------------------------------------
| COMPANY APPLICATIONS
|--------------------------------------------------------------------------
*/

Route::get('/company/applications', function () {

    return view('company_applications');

})->name('company.applications');


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

Route::get('/company/interviews', function () {

    return view('company_interviews');

})->name('company.interviews');


Route::get('/company/interviews/create', function () {

    return view('company_schedule_interview');

})->name('company.interviews.create');


/*
|--------------------------------------------------------------------------
| UPCOMING DRIVES
|--------------------------------------------------------------------------
*/

Route::get('/company/drives', function () {

    return view('company_drives');

})->name('company.drives');


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

    session()->forget([
        'company_logged_in',
        'company_id',
        'company_name',
        'company_email'
    ]);

    return redirect()
        ->route('company.login')
        ->with('success', 'You have been logged out successfully.');

})->name('company.logout');