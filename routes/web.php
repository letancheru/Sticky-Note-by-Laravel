<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;

Route::get('/',[HomeController::class,'home']);
// Route::get('/index',[NoteController::class,'index'])->name('index');
Route::resource('/note',NoteController::class,);
