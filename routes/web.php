<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestingCasesController;

Route::get('/',[TestingCasesController::class, 'index'])->name('testing_cases.testing_case.index');
