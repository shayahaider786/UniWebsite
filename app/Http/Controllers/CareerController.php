<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;

class CareerController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.careers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
           
        ]);


        $career = Career::create($validated);

        return redirect()->route('careers')
                         ->with('success', 'Career created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Career $career)
    {
        return view('backend.careers.edit', compact('career'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Career $career)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
           
        ]);

        $career->update($validated);

        return redirect()->route('careers')
        ->with('success', 'Careers Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Career $career)
    {
        $career->delete();
        return redirect()->route('careers')
        ->with('success', 'Careers Delete successfully.');
    }
}
