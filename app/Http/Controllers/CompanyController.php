<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class CompanyController extends Controller
{
    

    // Show all companies
    public function index()
    {
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }

    // Company Login
    public function login(Request $request)
    {
        $company = Company::where('email', $request->email)->first();

        if ($company && Hash::check($request->password, $company->password)) {

            // Store logged-in company information in session
            session([
                'company_id' => $company->id,
                'company_name' => $company->company_name,
            ]);

            return redirect()->route('company.dashboard');
        }

        return back()->with('error', 'Invalid Email or Password');
    }

    // Send Company Password Reset OTP
public function sendOtp(Request $request)
{
    $request->validate([
        'email' => 'required|email',
    ]);

    $company = Company::where('email', $request->email)->first();

    if (!$company) {
        return back()->with('error', 'Email is not registered.');
    }

    $otp = random_int(100000, 999999);

    session([
        'company_reset_email' => $request->email,
        'company_reset_otp' => $otp,
    ]);

    Mail::raw(
        "Your OTP for resetting your Training & Placement Portal company password is: $otp",
        function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('Company Password Reset OTP');
        }
    );

    return back()->with('otp_sent', true)
                 ->with('success', 'OTP has been sent to your email.');
}

// Verify Company OTP
public function verifyOtp(Request $request)
{
    $request->validate([
        'otp' => 'required|digits:6',
    ]);

    if (
        session('company_reset_otp') &&
        session('company_reset_otp') == $request->otp
    ) {
        session(['company_otp_verified' => true]);

        return back()->with('success', 'OTP verified successfully.');
    }

    return back()->with('error', 'Invalid OTP.');
}

// Reset Company Password..32
public function resetPassword(Request $request)
{
    if (!session('company_otp_verified')) {
        return back()->with('error', 'Please verify the OTP first.');
    }

    $request->validate([
        'password' => 'required|min:6|confirmed',
    ]);

    $company = Company::where(
        'email',
        session('company_reset_email')
    )->first();

    if (!$company) {
        return back()->with('error', 'Company not found.');
    }

    $company->password = Hash::make($request->password);
    $company->save();

    session()->forget([
        'company_reset_email',
        'company_reset_otp',
        'company_otp_verified',
    ]);

    return redirect()
        ->route('company.login')
        ->with('success', 'Password reset successfully. You can now login.');
}

    // Show company details
    public function show($id)
    {
        $company = Company::findOrFail($id);

        return view('companies.show', compact('company'));
    }

    // Show create company form
    public function create()
    {
        return view('companies.create');
    }

    // Store company
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Company::create($data);

        return redirect()->route('companies.index')
            ->with('success', 'Company added successfully!');
    }

    // Company Dashboard
    public function dashboard()
    {
        $company = null;

        if (session()->has('company_id')) {
            $company = Company::find(session('company_id'));
        }

        return view('company_dashboard', compact('company'));
    }
}