<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    // Show all companies
    public function index()
    {
        $companies = Company::all();

        return view('companies.index', compact('companies'));
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
}