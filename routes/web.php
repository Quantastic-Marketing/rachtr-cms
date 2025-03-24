<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/update-slug',[BlogController::Class,'updatePublishedDates']);

Route::get('/product-page/{slug}', [PageController::class,'getProductPage'])->name('product.page');
Route::post('/get-products', [PageController::class, 'getProducts'])->name('get.products');
Route::get('/{slug?}', [PageController::class,'getPage'])->where('slug', '.*');
Route::fallback(function () {
    return response()->view('fallback', [], 404);
});


