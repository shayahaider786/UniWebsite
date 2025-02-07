<?php

namespace App\Http\Controllers;
use App\Models\Administration;
use App\Models\Slider;
use App\Models\MatricStudent;
use App\Models\InterStudent;
use App\Models\Student;
use App\Models\Career;
use App\Models\Gallary;
use App\Models\Contact;
use Illuminate\Support\Facades\Storage; // Add this at the top of the controller

use Illuminate\Support\Facades\Response;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function dashboard()
    {
        $matricStudents = MatricStudent::count();
        $interStudents = InterStudent::count();
        $allContacts = Contact::count();
        $allgallaries = Gallary::count();
        return view('backend.index',compact('matricStudents', 'interStudents','allContacts','allgallaries'));
    }
    public function administration()
    {
        $administrations = Administration::all();
        return view('backend.administrations.index',compact('administrations'));
    }
    public function slider(){
        $sliders = Slider::paginate(10); // Adjust the number as needed
        return view('backend.sliders.index', compact('sliders'));

    }
    public function matricAdmision(){
        $matricDatas = MatricStudent::paginate(10); // Adjust the number as needed
        return view('backend.matricData', compact('matricDatas'));

    }
    public function matricDeleteAll()
    {
        MatricStudent::truncate(); // Deletes all records from the table
        return redirect()->route('matricAdmision')->with('success', 'All matric data deleted successfully.');
    }

    public function matricAdmisionExport(){
        $fileName = 'matric_admissions.csv';
        $matricDatas = MatricStudent::all();
        $headers = [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
        ];

        $columns = [
            'Name', 'Father Name', 'Mother Name', 'DOB', 'Address', 
            'Class', 'Gender', 'B-Form', 'Religion', 'Province', 
            'City', 'Contact', 'Guardian Contact'
        ];

        $callback = function () use ($matricDatas, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($matricDatas as $matricData) {
                fputcsv($file, [
                    $matricData->name,
                    $matricData->father_name,
                    $matricData->mother_name,
                    $matricData->dob,
                    $matricData->address,
                    $matricData->class,
                    $matricData->gender,
                    $matricData->bform,
                    $matricData->religion,
                    $matricData->province,
                    $matricData->city,
                    $matricData->contact,
                    $matricData->guardian_contact,
                ]);
            }

            fclose($file);
        };

        return Response::stream($callback, 200, $headers);

    }
    public function matricDataShow($id){
        $matricDatas = MatricStudent::findOrFail($id);
        return view('backend.matricDataShow', compact('matricDatas'));
    }
    public function interAdmision(){
        $interDatas = InterStudent::paginate(10); // Adjust the number as needed
        return view('backend.interData', compact('interDatas'));

    }
    public function interDeleteAll()
    {
        InterStudent::truncate(); // Deletes all records from the table
        return redirect()->route('interAdmision')->with('success', 'All intern data deleted successfully.');
    }
    public function interAdmisionExport(){
        $fileName = 'inter_admissions.csv';
        $interDatas = InterStudent::all();
        $headers = [
            "Content-Type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
        ];

        $columns = [
            'Name', 'Father Name', 'Mother Name', 'DOB', 'Address', 
            'Class', 'Gender', 'B-Form', 'Religion', 'Province', 'Matric Roll No','Matric Obtained Marks','Matric Total Marks',
            'City', 'Contact', 'Guardian Contact'
        ];

        $callback = function () use ($interDatas, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($interDatas as $interDatas) {
                fputcsv($file, [
                    $interDatas->name,
                    $interDatas->father_name,
                    $interDatas->mother_name,
                    $interDatas->dob,
                    $interDatas->address,
                    $interDatas->class,
                    $interDatas->gender,
                    $interDatas->bform,
                    $interDatas->religion,
                    $interDatas->province,
                    $interDatas->matricRollNo,
                    $interDatas->matricObtain,
                    $interDatas->matricTotal,
                    $interDatas->city,
                    $interDatas->contact,
                    $interDatas->guardian_contact,
                ]);
            }

            fclose($file);
        };

        return Response::stream($callback, 200, $headers);

    }
    public function interDataShow($id){
        $interDatas = InterStudent::findOrFail($id);
        return view('backend.interDataShow', compact('interDatas'));
    }

    public function students(){
        $students = Student::all();
        return view('backend.students.index',compact('students'));
    }
    public function careers(){
        $careers = Career::all();
        return view('backend.careers.index',compact('careers'));
    }
    public function gallaries()
    {
        $gallaries = Gallary::all();
        return view('backend.gallary', compact('gallaries'));
    }
    
    public function gallaryStore(Request $request)
    {
        $request->validate([
            'images.*' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        foreach ($request->file('images') as $image) {
            // Generate a unique name for the image
            $imageName = time() . rand(1, 1000) . '.' . $image->getClientOriginalExtension();
    
            // Define the destination path in the public folder
            $imagePath = public_path('uploads/portfolio');
            
            // Make sure the directory exists
            if (!file_exists($imagePath)) {
                mkdir($imagePath, 0755, true);
            }
    
            // Move the image to the public folder
            $image->move($imagePath, $imageName);
    
            // Save the relative path in the database
            Gallary::create([
                'image_path' => 'uploads/portfolio/' . $imageName,
            ]);
        }
    
        return redirect()->route('gallaries')->with('success', 'Gallery uploaded successfully.');
    }
    
    public function gallaryDestroy($id){
        $gallaries = Gallary::findOrFail($id);
    
        // Delete the associated image file from storage
        if (Storage::disk('public')->exists($gallaries->image_path)) {
            Storage::disk('public')->delete($gallaries->image_path);
        }
    
        // Delete the portfolio item from the database
        $gallaries->delete();
    
        return redirect()->route('gallaries')->with('success', 'Gallary item deleted successfully.');
    }

    public function allContactData(){
        $contacts = Contact::all();
        return view('backend.contact', compact('contacts'));
    }
    public function contactDestroy($id)
    {
        $contact = Contact::findOrFail($id); // Find the contact by ID or return a 404 error
        $contact->delete(); // Delete the contact

        return back()->with('success', 'Message deleted successfully!');
    }

    public function login(){
        return view('backend.login');
    }
}
