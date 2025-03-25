<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Middleware\ChekRole;

Route::get('/', function () {
    return view('layouts.welcome');
})->middleware('middleRole');

Route::resource('notes', NoteController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return ":)";
});
