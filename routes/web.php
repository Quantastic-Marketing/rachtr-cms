<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/update-slug',[BlogController::Class,'updatePublishedDates']);

Route::get('/product-page/{slug}', [PageController::class,'getProductPage']);
Route::get('/{slug?}', [PageController::class,'getPage'])->where('slug', '.*');


