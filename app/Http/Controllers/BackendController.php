<?php

namespace App\Http\Controllers;
use App\Models\Administration;
use App\Models\Slider;
use App\Models\MatricStudent;
use App\Models\InterStudent;
use App\Models\Student;
use App\Models\Career;
use App\Models\Gallary;
use Illuminate\Support\Facades\Storage; // Add this at the top of the controller

use Illuminate\Support\Facades\Response;

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
    public function slider(){
        $sliders = Slider::paginate(10); // Adjust the number as needed
        return view('backend.sliders.index', compact('sliders'));

    }
    public function matricAdmision(){
        $matricDatas = MatricStudent::paginate(10); // Adjust the number as needed
        return view('backend.matricData', compact('matricDatas'));

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
            $path = $image->store('portfolio', 'public');
    
            Gallary::create([
                'image_path' => $path,
            ]);
        }
    
        return redirect()->route('gallaries')->with('success', 'Gallary uploaded successfully.');
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
}
