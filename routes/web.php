<?php

use App\Http\Controllers\BarrackController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CuerpoEjercitoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () 
{return view('home'); }
)->name('home');

Route::get('/cuerpoejercito', [CuerpoEjercitoController::class, 'create'])->name('corp.create');
Route::post('/cuerpoejercito', [CuerpoEjercitoController::class, 'cuerpoejercitoM'])->name('corp.saved');

Route::get('/barracks', [BarrackController::class, 'create'])->name('barrack.create');
Route::post('/barracks', [BarrackController::class, 'barrackMP'])->name('barrack.saved');

Route::get('/companies', [CompanyController::class, 'create'])->name('company.create');
Route::post('/companies', [CompanyController::class, 'companyMP'])->name('company.saved');