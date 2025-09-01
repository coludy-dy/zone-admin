<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::prefix('contact')->name('contact.')->group(function(){
    Route::get('/',[ContactController::class,'index'])->name('index');
    // Route::get('create',[BrandController::class,'create'])->name('create');
    // Route::post('store',[BrandController::class,'store'])->name('store');
    // Route::get('edit/{brand}', [BrandController::class, 'edit'])->name('edit');
    // Route::post('update/{brand}',[BrandController::class,'update'])->name('update');
    Route::delete('destroy/{contact}', [ContactController::class, 'destroy'])->name('destroy');

});