<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'marks' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            // Generate a unique name for the image
            $image = $request->file('image');
            $imageName = time() . rand(1, 1000) . '.' . $image->getClientOriginalExtension();

            // Define the destination path in the public folder
            $imagePath = public_path('uploads/students');
            
            // Make sure the directory exists
            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }

            // Move the image to the public folder
            $image->move($imagePath, $imageName);

            // Store the relative path to the image
            $validated['image'] = 'uploads/students/' . $imageName;
        }

        // Create the student record
        $student = Student::create($validated);

        return redirect()->route('students')
                         ->with('success', 'Student created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('backend.students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'marks' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($student->image && file_exists(public_path($student->image))) {
                unlink(public_path($student->image));
            }

            // Generate a unique name for the new image
            $image = $request->file('image');
            $imageName = time() . rand(1, 1000) . '.' . $image->getClientOriginalExtension();

            // Define the destination path in the public folder
            $imagePath = public_path('uploads/students');
            
            // Make sure the directory exists
            if (!File::exists($imagePath)) {
                File::makeDirectory($imagePath, 0755, true);
            }

            // Move the new image to the public folder
            $image->move($imagePath, $imageName);

            // Store the relative path to the new image
            $validated['image'] = 'uploads/students/' . $imageName;
        }

        // Update the student record
        $student->update($validated);

        return redirect()->route('students')
                         ->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        // Check if the student has an image and delete it
        if ($student->image && file_exists(public_path($student->image))) {
            unlink(public_path($student->image));
        }

        // Delete the student record
        $student->delete();

        return redirect()->route('students')
                         ->with('success', 'Student deleted successfully.');
    }
}
