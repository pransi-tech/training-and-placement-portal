<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlacementOfficer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class PlacementOfficerController extends Controller
{

    public function login(Request $request)
    {
       $officer = PlacementOfficer::where('email', $request->email)->first();

if ($officer && !Hash::check($request->password, $officer->password)) {
    $officer = null;
}


        if($officer)
        {
            return redirect('/placement-officer/dashboard');
        }


        return back()->with('error','Invalid Login Details');
    }

    // Send OTP
public function sendOtp(Request $request)
{
    $request->validate([
        'email' => 'required|email',
    ]);

    $officer = PlacementOfficer::where('email', $request->email)->first();

    if (!$officer) {
        return back()->withErrors(['email' => 'Email not registered']);
    }

    $otp = random_int(100000, 999999);

    session([
        'officer_reset_email' => $request->email,
        'officer_reset_otp_hash' => Hash::make((string) $otp),
        'officer_otp_sent' => true,
        'officer_otp_expires_at' => now()->addMinutes(10)->timestamp,
        'officer_otp_attempts' => 0,
    ]);

    Mail::raw("Your Placement Officer password reset OTP is: $otp", function ($message) use ($request) {
        $message->to($request->email)
                ->subject('Placement Officer Password Reset OTP');
    });

    return back()->with('success', 'OTP sent to your email');
}


// Verify OTP
public function verifyOtp(Request $request)
{
    $request->validate([
        'otp' => 'required|digits:6',
    ]);

    if (!session('officer_reset_otp_hash') ||
        now()->timestamp > session('officer_otp_expires_at', 0)) {
        return back()->withErrors(['otp' => 'OTP expired. Request a new OTP.']);
    }

    $attempts = session('officer_otp_attempts', 0);

    if ($attempts >= 5) {
        return back()->withErrors(['otp' => 'Too many attempts. Request a new OTP.']);
    }

    session(['officer_otp_attempts' => $attempts + 1]);

    if (!Hash::check($request->otp, session('officer_reset_otp_hash'))) {
        return back()->withErrors(['otp' => 'Invalid OTP']);
    }

    session([
        'officer_otp_verified' => true,
    ]);

    session()->forget(['officer_reset_otp_hash', 'officer_otp_attempts']);

    return back()->with('success', 'OTP verified successfully');
}


// Reset Password
public function resetPassword(Request $request)
{
    if (!session('officer_otp_verified') ||
        !session('officer_reset_email') ||
        now()->timestamp > session('officer_otp_expires_at', 0)) {
        return back()->withErrors(['password' => 'Please verify your OTP first']);
    }

    $request->validate([
        'password' => 'required|min:8|confirmed',
    ]);

    $officer = PlacementOfficer::where('email', session('officer_reset_email'))->firstOrFail();

    $officer->password = Hash::make($request->password);
    $officer->save();

    session()->forget([
        'officer_reset_email',
        'officer_reset_otp_hash',
        'officer_otp_sent',
        'officer_otp_verified',
        'officer_otp_expires_at',
        'officer_otp_attempts',
    ]);

    return redirect()->route('placement.officer.login')
        ->with('success', 'Password reset successfully');
}

}