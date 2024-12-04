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

        $imagePath = $request->file('image')->store('uploads/sliders', 'public');

        Slider::create([
            'title' => $request->title,
            'paragraph' => $request->paragraph,
            'image' => $imagePath,
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
            Storage::disk('public')->delete($slider->image);
            $imagePath = $request->file('image')->store('uploads/sliders', 'public');
            $slider->image = $imagePath;
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
        Storage::disk('public')->delete($slider->image);
        $slider->delete();
        return redirect()->route('slider')->with('success', 'Slider deleted successfully.');
    }
}
