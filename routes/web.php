<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\IntegrationController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

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

Route::get('/signup', [SignUpController::class, 'index'])->middleware('guest');
Route::post('/signup', [SignUpController::class, 'signup'])->middleware('guest');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/', [LandingpageController::class, 'index'])->middleware('auth');
Route::get('/postingan/detail', [LandingpageController::class, 'detail'])->middleware('auth');


Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'update'])->middleware('auth');

Route::get('/experience', [ExperienceController::class, 'index']);
Route::post('/jobs', [ExperienceController::class, 'addjobs']);
Route::post('/education', [ExperienceController::class, 'addeducation']);
Route::post('/certification', [ExperienceController::class, 'addcertification']);

Route::get('/portofolio',[PortofolioController::class, 'index']);
Route::post('/portofolio',[PortofolioController::class, 'portofolio']);

Route::get('/settings/integration', [IntegrationController::class, 'index'])->middleware('auth');
Route::post('/integration/dribbble', [IntegrationController::class, 'dribbble'])->middleware('auth');
Route::get('/integration/dribbble/uncheck', [IntegrationController::class, 'dribbbleuncheck'])->middleware('auth');
Route::post('/integration/behance', [IntegrationController::class, 'behance'])->middleware('auth');
Route::get('/integration/behance/uncheck', [IntegrationController::class, 'behanceuncheck'])->middleware('auth');
