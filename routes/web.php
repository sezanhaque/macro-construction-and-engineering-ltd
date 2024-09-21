<?php

use App\Livewire\ContactForm;
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

//Route::view('/', 'welcome');
Route::view('/', 'home')->name('home');

Route::get('/contact-us', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact-us');
//Route::get('/contact-us', ContactForm::class)->name('contact-us');

Route::get('/services', fn() => view('service'))->name('services');

Route::get('/projects', fn() => view('projects'))->name('projects');

Route::get("/about-us", fn () => view('about-us'))->name('about-us');

Route::get("/our-process", fn () => view('our-process'))->name('our-process');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
