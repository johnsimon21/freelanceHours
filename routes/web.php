<?php

use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', welcomeController::class);

