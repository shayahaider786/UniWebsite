<?php

namespace App\Http\Controllers;
use App\Models\Administration;
use App\Models\Slider;
use App\Models\Gallary;
use App\Models\Student;
use App\Models\Career;
use App\Models\Contact;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $sliders = Slider::paginate(10); // Adjust the number as needed
        return view('frontend.index', compact('sliders'));
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
    public function admisionPolicy()
    {
        return view('frontend.admisionPolicy');
    }
    public function classes()
    {
        return view('frontend.classes');
    }
    public function howToApply()
    {
        return view('frontend.howToApply');
    }
    public function systemExam()
    {
        return view('frontend.systemExam');
    }
    public function allGallary()
    {
        $gallaries = Gallary::all();
        return view('frontend.gallary', compact('gallaries'));
    }

    public function feeStructure(){
        return view('frontend.feeStructure');
    }
    public function studentStar(){
        $students = Student::all();
        return view('frontend.studentStar',compact('students'));
    }
    public function studentTiming(){
        return view('frontend.studentTiming');
    }
    public function allCareer(){
        $careers = Career::all();
        return view('frontend.career',compact('careers'));
    }
    public function careerDetail($id)
    {
        // Fetch the career by its ID or fail gracefully if not found
        $career = Career::where('id', $id)->firstOrFail();
        
        // Pass the data to the view
        return view('frontend.careerDetail', compact('career'));
    }
    
    public function contact(){
        return view('frontend.contact');
    }
    public function contactForm(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Message sent successfully!');
    }
}
