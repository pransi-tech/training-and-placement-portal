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

// Send OTP
public function sendOtp(Request $request)
{
    $request->validate([
        'email' => 'required|email'
    ]);

    $student = StudentRegistration::where('email', $request->email)->first();

    if (!$student) {
        return back()->with('error', 'Email address not registered.');
    }

    $otp = random_int(100000, 999999);

    session([
        'reset_email' => $request->email,
        'reset_otp' => $otp
    ]);

    \Illuminate\Support\Facades\Mail::raw(
        "Your OTP for resetting your Training & Placement Portal password is: $otp",
        function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('Password Reset OTP');
        }
    );

    return back()->with('otp_sent', true)
            ->with('success', 'OTP sent successfully to your registered email.');
}

// Verify OTP
public function verifyOtp(Request $request)
{
    $request->validate([
        'otp' => 'required|digits:6'
    ]);

    if (
        session('reset_otp') &&
        $request->otp == session('reset_otp')
    ) {
        session(['otp_verified' => true]);

        return back()->with('otp_verified', true)
                    ->with('success', 'OTP verified successfully.');
    }

    return back()->with('error', 'Invalid OTP.');
}
// Reset Student Password
public function resetPassword(Request $request)
{
    if (!session('otp_verified')) {
        return back()->with('error', 'Please verify OTP first.');
    }

    $request->validate([
        'password' => 'required|min:6|confirmed',
    ]);

    $student = StudentRegistration::where(
        'email',
        session('reset_email')
    )->first();

    if (!$student) {
        return back()->with('error', 'No student found with this email.');
    }

    $student->password = Hash::make($request->password);
    $student->save();

    session()->forget([
        'reset_email',
        'reset_otp',
        'otp_verified'
    ]);

    return redirect()->route('student.login')
        ->with('success', 'Password changed successfully! You can now login.');
}
}
