<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\PostDec;
use App\Http\Controllers\testController;
use App\Http\Controllers\uploadController;

Route::post('/update/image/',[uploadController::class,
'uploadOnServer'])->name('upload.process');
Route::get('/update/{id}',[uploadController::class,'updateImage'])->name('image.update');
Route::get('/delete/{id}',[uploadController::class,'deleteImage'])->name('image.delete');
Route::get('/uploadImageForm',[uploadController::class,'form'])->name('image.choose');
Route::get('/displayImages',[uploadController::class,'display'])->name('image.display');

Route::post('/uploadImageForm',[uploadController::class,'upload'])->name('image.upload');


Route::get('/display',[testController::class,'display'])->name('data.display');
Route::get('/',[testController::class,'index'])->name('data.insert.form');
Route::get('/{id}/edit',[testController::class,'edit'])->name('data.edit.form');
Route::get('/{id}/delete',[testController::class,'delete'])->name('data.delete');
Route::post('/insert',[testController::class,'insert'])->name('data.insert');
Route::post('/update',[testController::class,'update'])->name('data.update');






