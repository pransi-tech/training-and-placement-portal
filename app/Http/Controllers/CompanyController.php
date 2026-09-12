<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    // Company Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        /*
         * Temporary session-based company login.
         * No database connection at this stage.
         */

        $companies = [
            [
                'company_id' => 'COMP001',
                'company_name' => 'TCS',
                'hr_name' => 'TCS HR',
                'hr_contact' => '9876543210',
                'hr_email' => 'tcs@example.com',
                'location' => 'Ahmedabad',
                'type' => 'IT',
                'area' => 'Ahmedabad',
                'password' => '123456',
            ],
            [
                'company_id' => 'COMP002',
                'company_name' => 'Infosys',
                'hr_name' => 'Infosys HR',
                'hr_contact' => '9876543211',
                'hr_email' => 'infosys@example.com',
                'location' => 'Gandhinagar',
                'type' => 'IT',
                'area' => 'Gandhinagar',
                'password' => '123456',
            ],
        ];

        $company = collect($companies)->first(function ($company) use ($request) {
            return strtolower($company['hr_email']) === strtolower($request->email)
                && $company['password'] === $request->password;
        });

        if (!$company) {
            return back()
                ->withInput($request->only('email'))
                ->with('error', 'Invalid email or password.');
        }

        session([
            'company_logged_in' => true,
            'company_id' => $company['company_id'],
            'company_name' => $company['company_name'],
            'company_email' => $company['hr_email'],
            'company_hr_name' => $company['hr_name'],
            'company_hr_contact' => $company['hr_contact'],
            'company_location' => $company['location'],
            'company_type' => $company['type'],
            'company_area' => $company['area'],
        ]);

        return redirect()->route('company.dashboard');
    }


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