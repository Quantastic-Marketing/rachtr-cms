<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/product-page/{slug}', [PageController::class,'getProductPage']);
Route::get('/{slug?}', [PageController::class,'getPage'])->where('slug', '.*');


