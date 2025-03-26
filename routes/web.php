<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/update-slug',[BlogController::Class,'updatePublishedDates']);

Route::get('/product-page/{slug}', [PageController::class,'getProductPage'])->name('product.page');
Route::get('/sitemap.xml', [PageController::class, 'getSiteMap']);
Route::post('/contact-submit', [FormController::class, 'addContactDetail'])->name('contact');
Route::post('/connect', [FormController::class, 'addConnectDetail'])->name('connect');
Route::post('/cvform', [FormController::class, 'addCvDetail'])->name('cvform');
Route::post('/submit-epoxy-form', [FormController::class, 'addEpoxyDetail'])->name('epoxyForm');
Route::get('/{slug?}', [PageController::class,'getPage'])->where('slug', '.*');
Route::fallback(function () {
    return response()->view('fallback', [], 404);
});


