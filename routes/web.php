<?php

use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::get('/evoluciona', [LandingController::class, 'pillar'])->defaults('slug', 'evoluciona')->name('pillar.evoluciona');
Route::get('/conecta', [LandingController::class, 'pillar'])->defaults('slug', 'conecta')->name('pillar.conecta');
Route::get('/trasciende', [LandingController::class, 'pillar'])->defaults('slug', 'trasciende')->name('pillar.trasciende');

Route::get('/about', [LandingController::class, 'about'])->name('about');
Route::get('/contact', [LandingController::class, 'contact'])->name('contact');
Route::get('/contacto', [LandingController::class, 'contact'])->name('contacto');
Route::get('/gracias', [LandingController::class, 'gracias'])->name('gracias');

Route::post('/contact', [LandingController::class, 'storeLead'])->name('contact.store');
Route::post('/leads', [LandingController::class, 'storeLead'])->name('leads.store');
