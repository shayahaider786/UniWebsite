<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\AdministrationController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/principal-message', [FrontendController::class, 'principalMessage'])->name('principalMessage');
Route::get('/mission-vission', [FrontendController::class, 'missionVission'])->name('missionVission');
Route::get('/administrations', [FrontendController::class, 'allAdministration'])->name('allAdministration');
Route::get('/administrations/{slug}', [FrontendController::class, 'administrationPerson'])->name('administrationPerson');
Route::get('/facilities', [FrontendController::class, 'facilities'])->name('facilities');
Route::get('/trustees', [FrontendController::class, 'trustees'])->name('trustees');
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
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    // Route::get('/admin/dashboard', [HomeController::class, 'dashboard'])->name('dashoard');
    Route::get('/admin/dashboard', [BackendController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/administration', [BackendController::class, 'administration'])->name('administration');
    Route::resource('administration', AdministrationController::class);
});
