<?php

use App\Routes\Route;
use App\Controllers\CategoryController;

Route::get('/',[CategoryController::class,'index']);
Route::get('/test',[CategoryController::class,'test']);
Route::get('/show',[CategoryController::class,'test']);

?>