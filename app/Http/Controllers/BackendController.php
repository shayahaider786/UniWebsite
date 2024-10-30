<?php

namespace App\Http\Controllers;
use App\Models\Administration;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function dashboard()
    {
        return view('backend.index');
    }
    public function administration()
    {
        $administrations = Administration::all();
        return view('backend.administrations.index',compact('administrations'));
    }
}
