<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AdmisionController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CareerController;


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
// Route::get('/', function () {
    //     return view('welcome');
    // });
    

    // Define only login, logout, and password reset routes
// Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/sec/auth', [BackendController::class, 'login'])->name('login'); 
Route::post('login/form', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/principal-message', [FrontendController::class, 'principalMessage'])->name('principalMessage');
Route::get('/mission-vission', [FrontendController::class, 'missionVission'])->name('missionVission');
Route::get('/administrations', [FrontendController::class, 'allAdministration'])->name('allAdministration');
Route::get('/administrations/{slug}', [FrontendController::class, 'administrationPerson'])->name('administrationPerson');
Route::get('/facilities', [FrontendController::class, 'facilities'])->name('facilities');
Route::get('/trustees', [FrontendController::class, 'trustees'])->name('trustees');
Route::get('/admision-policy', [FrontendController::class, 'admisionPolicy'])->name('admisionPolicy');
Route::get('/classes', [FrontendController::class, 'classes'])->name('classes');
Route::get('/how-to-apply', [FrontendController::class, 'howToApply'])->name('howToApply');
Route::get('/system-examintion', [FrontendController::class, 'systemExam'])->name('systemExam');
Route::get('/gallary', [FrontendController::class, 'allGallary'])->name('allGallary');
Route::get('/fee-structure', [FrontendController::class, 'feeStructure'])->name('feeStructure');
Route::get('/shining-star', [FrontendController::class, 'studentStar'])->name('studentStar');
Route::get('/student-timing', [FrontendController::class, 'studentTiming'])->name('studentTiming');
Route::get('/career', [FrontendController::class, 'allCareer'])->name('allCareer');
Route::get('/career/{id}', [FrontendController::class, 'careerDetail'])->name('careerDetail');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('/contact/store', [FrontendController::class, 'contactForm'])->name('contactForm');


Route::get('/montesari-to-matric-form', [AdmisionController::class, 'matriclationAdmision'])->name('matriclationAdmision');
Route::post('/matric-form', [AdmisionController::class, 'matricAdmisionStore'])->name('matricAdmisionStore');

Route::get('/intermediate-form', [AdmisionController::class, 'intermediateAdmision'])->name('intermediateAdmision');
Route::post('/inter-form', [AdmisionController::class, 'interAdmisionStore'])->name('interAdmisionStore');
/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
// Auth::routes();


Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    // Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    // Route::get('/admin/dashboard', [HomeController::class, 'dashboard'])->name('dashoard');
    Route::get('/admin/dashboard', [BackendController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/administration', [BackendController::class, 'administration'])->name('administration');
    Route::get('/admin/matric-data', [BackendController::class, 'matricAdmision'])->name('matricAdmision');
    Route::delete('/admin/matric-data/delete-all', [BackendController::class, 'matricDeleteAll'])->name('matricDeleteAll');
    Route::get('/admin/matric-data/export', [BackendController::class, 'matricAdmisionExport'])->name('matricAdmisionExport');
    Route::get('/admin/matric-data-show/{id}', [BackendController::class, 'matricDataShow'])->name('matricDataShow');
    
    Route::get('/admin/inter-data', [BackendController::class, 'interAdmision'])->name('interAdmision');
    Route::delete('/admin/inter-data/delete-all', [BackendController::class, 'interDeleteAll'])->name('interDeleteAll');
    Route::get('/admin/inter-data/export', [BackendController::class, 'interAdmisionExport'])->name('interAdmisionExport');
    Route::get('/admin/inter-data-show/{id}', [BackendController::class, 'interDataShow'])->name('interDataShow');
    Route::get('/admin/slider', [BackendController::class, 'slider'])->name('slider');
    Route::resource('administration', AdministrationController::class);
    Route::resource('sliders', SliderController::class);
    Route::get('/admin/student', [BackendController::class, 'students'])->name('students');
    Route::resource('students', StudentController::class);
    Route::get('/admin/career', [BackendController::class, 'careers'])->name('careers');
    Route::resource('careers', CareerController::class);
    Route::get('/admin/gallary', [BackendController::class, 'gallaries'])->name('gallaries');
    Route::post('/admin/gallery/post', [BackendController::class, 'gallaryStore'])->name('gallaryStore');
    Route::delete('/admin/gallery/delete/{id}', [BackendController::class, 'gallaryDestroy'])->name('gallaryDestroy');
    Route::get('/admin/contact-us', [BackendController::class, 'allContactData'])->name('allContactData');
    Route::delete('/admin/contact/{id}', [BackendController::class, 'contactDestroy'])->name('contactDestroy');

});
