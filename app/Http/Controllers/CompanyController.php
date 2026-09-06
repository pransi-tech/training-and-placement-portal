<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;

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