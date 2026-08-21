<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentRegistration;
use Illuminate\Support\Facades\Hash;

class StudentRegistrationController extends Controller
{
    // Student Registration
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
        'password' => 'required|min:6',
    ]);

    $data['password'] = Hash::make($data['password']);

    $student = StudentRegistration::create($data);

    return redirect()->route('student.dashboard', ['id' => $student->id])
        ->with('success', 'Registration Successful!');
}

    // Student Login
    public function login(Request $request)
    {
        $student = StudentRegistration::where('email', $request->email)->first();

        if ($student && Hash::check($request->password, $student->password)) {
            return redirect()->route('student.dashboard', ['id' => $student->id])
                ->with('success', 'Login Successful!');
        }

        return back()->with('error', 'Invalid Email or Password');
    }
}