<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/product-lists', [ProductController::class, 'getSearchResultsDropdown'])->name('product-lists-api');
Route::get('/trending-products', [ProductController::class, 'getTrendingProducts']);
