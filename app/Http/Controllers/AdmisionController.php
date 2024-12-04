<?php

namespace App\Http\Controllers;
use App\Models\MatricStudent;
use App\Models\InterStudent;
use Illuminate\Http\Request;

class AdmisionController extends Controller
{
    public function matriclationAdmision(){
        return view('frontend.matricAdmisionForm');
    }

    public function matricAdmisionStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'address' => 'required|string',
            'class' => 'required|string|max:50',
            'bform' => 'nullable|string|max:50',
            'gender' => 'required|string|max:10',
            'religion' => 'required|string|max:50',
            'city' => 'required|string|max:100',
            'province' => 'required|string|max:100',
            'contact' => 'required|string|max:15',
            'guardian_contact' => 'required|string|max:15',
        ]);

        MatricStudent::create($request->all());

        return redirect()->back()->with('success', 'Admission form submitted successfully.');
    }
    public function intermediateAdmision(){
        return view('frontend.interAdmisionForm');
    }

    public function interAdmisionStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'address' => 'required|string',
            'class' => 'required|string|max:50',
            'bform' => 'nullable|string|max:50',
            'gender' => 'required|string|max:10',
            'religion' => 'required|string|max:50',
            'city' => 'required|string|max:100',
            'matricRollNo' => 'required|string|max:100',
            'matricTotal' => 'required|string|max:100',
            'matricObtain' => 'required|string|max:100',
            'province' => 'required|string|max:100',
            'contact' => 'required|string|max:15',
            'guardian_contact' => 'required|string|max:15',
        ]);

        InterStudent::create($request->all());

        return redirect()->back()->with('success', 'Admission form submitted successfully.');
    }
}
