<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PlacementOfficer;

class PlacementOfficerController extends Controller
{

    public function login(Request $request)
    {
        $officer = PlacementOfficer::where('email', $request->email)
            ->where('password', $request->password)
            ->first();


        if($officer)
        {
            return redirect('/placement-officer/dashboard');
        }


        return back()->with('error','Invalid Login Details');
    }

}