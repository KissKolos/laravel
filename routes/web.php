<?php

use App\Http\Controllers\ControllerTag;
use App\Http\Controllers\AitoolsController;
use App\Http\Controllers\ControllerCategories;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("categories", ControllerCategories::class);
Route::resource('aitools', AitoolsController::class);
Route::resource("tags", ControllerTag::class);
