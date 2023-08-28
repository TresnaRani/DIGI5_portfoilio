<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JsController;
use App\Http\Controllers\CssController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\SocialMediaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', FrontendController::class)->name('home.page');



Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resources([
        'projects' => ProjectController::class,
        'educations' => EducationController::class,
        'experiences' => ExperienceController::class,
        'skills' => SkillController::class,
        'certificates' => CertificateController::class,
        'contacts' => ContactController::class,
        'appointments' => AppointmentController::class,
        'social-media' => SocialMediaController::class,
        'blogs' => BlogController::class,
        'css' => CssController::class,
        'js' => JsController::class,
    ]);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/profile/view', [ProfileController::class, 'view'])->name('profile.view');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
