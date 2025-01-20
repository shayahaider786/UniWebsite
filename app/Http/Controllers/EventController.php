<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('backend.events.index', compact('events'));   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'event_date' => 'required|date',
            'event_time' => 'required',
            'images.*' => 'nullable|image|max:2048', // Validate each image
        ]);

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Generate a unique name for each image
                $imageName = time() . rand(1, 1000) . '.' . $image->getClientOriginalExtension();
                
                // Define the destination path in the public folder
                $imagePath = public_path('uploads/events');
                
                // Make sure the directory exists
                if (!File::exists($imagePath)) {
                    File::makeDirectory($imagePath, 0755, true);
                }

                // Move the image to the public folder
                $image->move($imagePath, $imageName);

                // Store the relative path in the database
                $imagePaths[] = 'uploads/events/' . $imageName;
            }
        }

        // Store the URLs in the `image_urls` attribute
        $imageUrls = array_map(function ($imagePath) {
            return url($imagePath); // Get the full URL to the image
        }, $imagePaths);

        // Create the event with the image URLs
        Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'event_date' => $request->event_date,
            'event_time' => $request->event_time,
            'images' => $imagePaths, // Store relative image paths
            'image_urls' => $imageUrls, // Store full URLs
        ]);

        return redirect()->route('events.index')->with('success', 'Event created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return view('backend.events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'event_date' => 'required|date',
            'event_time' => 'required',
            'images.*' => 'nullable|image|max:2048', // Validate each image
        ]);

        // Store the current image paths
        $imagePaths = $event->images ?? [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Generate a unique name for each image
                $imageName = time() . rand(1, 1000) . '.' . $image->getClientOriginalExtension();
                
                // Define the destination path in the public folder
                $imagePath = public_path('uploads/events');
                
                // Make sure the directory exists
                if (!File::exists($imagePath)) {
                    File::makeDirectory($imagePath, 0755, true);
                }

                // Move the image to the public folder
                $image->move($imagePath, $imageName);

                // Store the relative path in the database
                $imagePaths[] = 'uploads/events/' . $imageName;
            }
        }

        // Update the event with the new images
        $event->update([
            'name' => $request->name,
            'description' => $request->description,
            'event_date' => $request->event_date,
            'event_time' => $request->event_time,
            'images' => $imagePaths, // Store relative image paths
        ]);

        return redirect()->route('events.index')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        // Check if there are any images and delete them
        if ($event->images) {
            foreach ($event->images as $imagePath) {
                $imageFullPath = public_path($imagePath);
                if (file_exists($imageFullPath)) {
                    unlink($imageFullPath); // Delete image from public folder
                }
            }
        }

        // Delete the event record
        $event->delete();

        return redirect()->route('events.index')->with('success', 'Event deleted successfully.');
    }
}
