<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/product-page/{slug}', [PageController::class,'getProductPage']);
Route::prefix('post')->group(function () {
    Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');
});
Route::get('/{slug?}', [PageController::class,'getPage'])->where('slug', '.*');



