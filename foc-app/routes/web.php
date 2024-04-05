<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CursoController;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/home', [CursoController::class, 'index']);
