<?php

use src\Http\Route;
use App\controllers\HomeController;

Route::get('/home', [HomeController::class, 'index']);