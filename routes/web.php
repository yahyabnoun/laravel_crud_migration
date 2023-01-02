<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stagiaireController;

// |--------------------------------------------------------------------------

Route::get('/',function(){ return view('ajouter');});


// index
Route::get('/afficher',[stagiaireController::class,'index'])->name('afficher');

// ajouter
Route::post('/ajouter',[stagiaireController::class,'ajouter'])->name('ajouter');

// edit
Route::get('/edit/{id}',[stagiaireController::class,'edit'])->name('edit');

// update
Route::put('/update/{id}',[stagiaireController::class,'update'])->name('update');

// destroy
Route::get('/delete/{id}',[stagiaireController::class,'destroy'])->name('destroy');












