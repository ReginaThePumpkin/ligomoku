<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\HomeController; # don't forgot to add this

Route::get('/', function () {
    return view('welcome');
});

/*Auth::routes();

Route::get('/home', [HomeController::class, 'index']);*/