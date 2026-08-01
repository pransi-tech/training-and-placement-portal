<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentRegistration;

class StudentRegistrationController extends Controller
{
    public function store(Request $request)
{
    $data = $request->validate([
        'enrollment_no' => 'required|unique:student_registrations',
        'name' => 'required',
        'email' => 'required|email|unique:student_registrations',
        'mobile_no' => 'required',
        'address' => 'required',
        'city' => 'required',
        'dob' => 'required',
        'semester' => 'required',
        'branch' => 'required',
        'area_of_expertise' => 'required',
        'ssc_percentage' => 'required',
        'hsc_percentage' => 'nullable',
        'consent' => 'required',
        'diploma_cpi' => 'required',
        'backlog' => 'required',
        'linkedin_id' => 'nullable',
    ]);

    if ($request->hasFile('profile_pic')) {
        $data['profile_pic'] = $request->file('profile_pic')->store('profile_pics', 'public');
    }
    $data['password'] = bcrypt($request->password);
    StudentRegistration::create($data);

    return redirect('/register')->with('success', 'Registration Successful!');
}
}
