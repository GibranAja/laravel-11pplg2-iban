<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home']);
Route::get('/about', [AboutController::class, 'about']);
Route::get('/skill', [SkillController::class, 'skill']);
Route::get('/project', [ProjectController::class, 'project']);
Route::get('/certificate', [CertificateController::class, 'certificate']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/admin/dashboard', [AdminController::class, 'admin'])->middleware('auth', 'admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
