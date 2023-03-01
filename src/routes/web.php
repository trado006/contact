<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Trado006\Contact\Http\Controllers\ContactController;

Route::group(['namespace'=>'Trado006\Contact\Http\Controllers'], function () {
    Route::get('contact', [ContactController::class, "index"]);

    Route::post('contact', [ContactController::class, "send"])->name("contact");
});

