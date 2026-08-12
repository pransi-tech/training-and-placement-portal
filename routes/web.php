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

Route::get('/welcome', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| PLACEMENT OFFICER
|--------------------------------------------------------------------------
*/

Route::get('/placement-officer/login', function () {
    return view('placement_officer_login');
});

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


/*
|--------------------------------------------------------------------------
| STUDENT
|--------------------------------------------------------------------------
*/

Route::get('/student/login', function () {
    return view('student');
});

Route::post('/student/login', [
    StudentRegistrationController::class,
    'login'
]);

Route::get('/student', function () {
    return view('student');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [
    StudentRegistrationController::class,
    'store'
]);


/*
|--------------------------------------------------------------------------
| COMPANY LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/company/login', function () {
    return view('company_login');
})->name('company.login');

Route::post('/company/login', [
    CompanyController::class,
    'login'
])->name('company.login.submit');


/*
|--------------------------------------------------------------------------
| COMPANY REGISTRATION
|--------------------------------------------------------------------------
*/

Route::get('/company-register', function () {
    return view('company_register');
});


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

    session()->forget('company_name');

    return redirect()
        ->route('company.login')
        ->with('success', 'You have been logged out successfully.');

})->name('company.logout');