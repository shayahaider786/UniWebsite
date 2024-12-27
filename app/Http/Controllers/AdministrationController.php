<?php

namespace App\Http\Controllers;

use App\Models\Administration;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.administrations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
      
        Administration::create($input);
       
        return redirect()->route('administration')
                         ->with('success', 'Administration created successfully.');
    }

    // Show the form for editing the specified resource
    public function edit(Administration $administration)
    {
        return view('backend.administrations.edit', compact('administration'));
    }
 
    // Update the specified resource in storage
    public function update(Request $request, Administration $administration)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            // Delete the old image if it exists
            if (!empty($administration->image) && file_exists(public_path('images/' . $administration->image))) {
                unlink(public_path('images/' . $administration->image));
            }
    
            // Upload the new image
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        } else {
            unset($input['image']);
        }
    
        $administration->update($input);
    
        return redirect()->route('administration')
                         ->with('success', 'Administration updated successfully.');
    }
    
 
    // Remove the specified resource from storage
    public function destroy(Administration $administration)
    {
        // Delete the associated image if it exists
        if (!empty($administration->image) && file_exists(public_path('images/' . $administration->image))) {
            unlink(public_path('images/' . $administration->image));
        }
    
        // Delete the record
        $administration->delete();
    
        return redirect()->route('administration')
                         ->with('success', 'Administration deleted successfully.');
    }
    
 
}
