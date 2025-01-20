<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function create()
    {
        return view('backend.sliders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'paragraph' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'link' => 'nullable|url',
            'button_name' => 'nullable|string|max:50',
        ]);
    
        // Get the image file
        $image = $request->file('image');
        
        // Generate a unique name for the image
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        
        // Define the destination path in the public folder
        $imagePath = public_path('uploads/sliders');
        
        // Move the image to the public folder
        $image->move($imagePath, $imageName);
        
        // Save the file path relative to the public folder
        $imageFullPath = 'uploads/sliders/' . $imageName;
    
        Slider::create([
            'title' => $request->title,
            'paragraph' => $request->paragraph,
            'image' => $imageFullPath,
            'link' => $request->link,
            'button_name' => $request->button_name,
        ]);
    
        return redirect()->route('slider')->with('success', 'Slider created successfully.');
    }
    
    public function edit(Slider $slider)
    {
        return view('backend.sliders.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'paragraph' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'link' => 'nullable|url',
            'button_name' => 'nullable|string|max:50',
        ]);
    
        if ($request->hasFile('image')) {
            // Delete the old image from the public folder
            $oldImagePath = public_path($slider->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }
    
            // Get the new image file
            $image = $request->file('image');
            
            // Generate a unique name for the image
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            
            // Define the destination path in the public folder
            $imagePath = public_path('uploads/sliders');
            
            // Move the new image to the public folder
            $image->move($imagePath, $imageName);
            
            // Update the file path
            $slider->image = 'uploads/sliders/' . $imageName;
        }
    
        $slider->update([
            'title' => $request->title,
            'paragraph' => $request->paragraph,
            'link' => $request->link,
            'button_name' => $request->button_name,
        ]);
    
        return redirect()->route('slider')->with('success', 'Slider updated successfully.');
    }
    

    public function destroy(Slider $slider)
{
    // Get the path to the image in the public folder
    $imagePath = public_path($slider->image);

    // Check if the image exists and then delete it
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    // Delete the slider record from the database
    $slider->delete();

    return redirect()->route('slider')->with('success', 'Slider deleted successfully.');
}

}
