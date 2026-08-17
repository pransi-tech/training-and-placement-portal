<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    public function login(Request $request)
    {
        $company = Company::where('email', $request->email)->first();

        if ($company && Hash::check($request->password, $company->password)) {
            return redirect('/company/dashboard');
        }

        return back()->with('error', 'Invalid Email or Password');
    }
}