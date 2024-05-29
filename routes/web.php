<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fox', [APIController::class, 'showRandomFox']);