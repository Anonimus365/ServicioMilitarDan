<?php

use App\Http\Controllers\CuerpoEjercitoController;
use Illuminate\Support\Facades\Route;

Route::get('cuerpoejercito', [CuerpoEjercitoController::class, 'cuerpoejercitoM'])->name('cuerpoejercito.cuerpoejercitoM');

Route::post('cuerpoejercito', [CuerpoEjercitoController::class, 'cuerpoejercitoM'])->name('cuerpoejercito.cuerpoejercitoM');