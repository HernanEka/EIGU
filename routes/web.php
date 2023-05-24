<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\IntegrationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\KoneksiController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SettingsController;
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
Route::post('/posting', [PostinganController::class, 'posting'])->middleware('auth');
Route::get('/postingan/detail/{id}', [LandingpageController::class, 'detail'])->middleware('auth');


Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'update'])->middleware('auth');

Route::get('/experience', [ExperienceController::class, 'index'])->middleware('auth');
Route::post('/jobs', [ExperienceController::class, 'addjobs'])->middleware('auth');
Route::post('/education', [ExperienceController::class, 'addeducation'])->middleware('auth');
Route::post('/certification', [ExperienceController::class, 'addcertification'])->middleware('auth');

Route::get('/portofolio',[PortofolioController::class, 'index'])->middleware('auth');
Route::post('/portofolio',[PortofolioController::class, 'portofolio'])->middleware('auth');

Route::get('/pekerjaan',[PekerjaanController::class, 'index']);

Route::get('/network',[NetworkController::class, 'index']);
Route::get('/profile/{id}',[NetworkController::class, 'detail']);


Route::get('/messaging/admin',[PesanController::class, 'index'])->middleware('auth');
Route::get('/messaging/user/{id}',[PesanController::class, 'user'])->middleware('auth');
Route::post('/admin/send',[PesanController::class, 'toadmin'])->middleware('auth');
Route::post('/user/send/{id}',[PesanController::class, 'touser'])->middleware('auth');
Route::post('/messaging/start', [KoneksiController::class, 'buatkoneksi'])->middleware('auth');

Route::get('/settings/integration', [IntegrationController::class, 'index'])->middleware('auth');
Route::post('/integration/dribbble', [IntegrationController::class, 'dribbble'])->middleware('auth');
Route::get('/integration/dribbble/uncheck', [IntegrationController::class, 'dribbbleuncheck'])->middleware('auth');
Route::post('/integration/behance', [IntegrationController::class, 'behance'])->middleware('auth');
Route::get('/integration/behance/uncheck', [IntegrationController::class, 'behanceuncheck'])->middleware('auth');
Route::post('/integration/github', [IntegrationController::class, 'github'])->middleware('auth');
Route::get('/integration/github/uncheck', [IntegrationController::class, 'githubuncheck'])->middleware('auth');

Route::get('/settings/privacy',[SettingsController::class, 'privacy'])->middleware('auth');
Route::post('/settings/email',[SettingsController::class, 'email'])->middleware('auth');
Route::post('/settings/phone',[SettingsController::class, 'nohp'])->middleware('auth');
Route::post('/settings/password',[SettingsController::class, 'password'])->middleware('auth');
Route::get('/settings/security',[SettingsController::class, 'security'])->middleware('auth');
Route::post('/settings/privasi',[SettingsController::class, 'privasi'])->middleware('auth');
Route::post('/settings/publik',[SettingsController::class, 'publik'])->middleware('auth');
Route::post('/settings/2ndpassword',[SettingsController::class, 'password2nd    '])->middleware('auth');
Route::get('/settings/notification',[SettingsController::class, 'notification'])->middleware('auth');
Route::post('/settings/enable-notif',[SettingsController::class, 'enable_notif'])->middleware('auth');
Route::post('/settings/disable-notif',[SettingsController::class, 'disable_notif'])->middleware('auth');


Route::get('/dashboard/job',[AdminController::class, 'jobs'])->middleware('auth');
Route::get('/dashboard/user',[AdminController::class, 'user'])->middleware('auth');
Route::get('/dashboard/user/delete/{id}',[AdminController::class, 'delete_user'])->middleware('auth');
Route::post('/dashboard/job/add',[JobController::class, 'addjobs'])->middleware('auth');

Route::get('/search',[SearchController::class, 'index'])->middleware('auth');
Route::get('/filter',[SearchController::class, 'filter'])->middleware('auth');
