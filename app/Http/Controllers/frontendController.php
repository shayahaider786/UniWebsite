<?php

namespace App\Http\Controllers;
use App\Models\Administration;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function principalMessage()
    {
        return view('frontend.principalMessage');
    }
    public function missionVission()
    {
        return view('frontend.missionVission');
    }
    public function allAdministration()
    {
        $administrations = Administration::all();
        return view('frontend.administration',compact('administrations'));
    }
    public function administrationPerson($slug)
    {
        $administration = Administration::where('slug', $slug)->firstOrFail();
        return view('frontend.administrationPerson', compact('administration'));
    }
    public function facilities()
    {
        return view('frontend.facilities');
    }
    public function trustees()
    {
        return view('frontend.trustees');
    }
}
