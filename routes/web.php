<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;

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
Route::get('/category/{slug}',[ProductController::class,'getAllProducts'])->name('all-products');
Route::get('/product-lists', [ProductController::class, 'index'])->name ('product-lists');
Route::get('/search/products', [ProductController::class, 'loadMoreProducts'])->name ('search-product');
Route::get('/publish-blogs',[PageController::class, 'publishPendingPosts'] );
Route::redirect('/post', '/blogs', 301);
Route::get('/post/{slug}', function ($slug) {
    return redirect("/blogs/{$slug}", 301);
});
Route::redirect('/support-center/architect-center', '/architect-center', 301);
Route::redirect('/support-center/contractor-center', '/contractor-center', 301);
Route::redirect('/epoxy-flooring', '/industrial-flooring-solutions/epoxy-flooring-services', 301);
Route::redirect('/epoxy-flooring-cost-price', '/industrial-flooring-solutions/epoxy-flooring-cost-price', 301);
Route::get('/{slug?}', [PageController::class,'getPage'])->where('slug', '.*');
Route::fallback(function () {
    return response()->view('fallback', [], 404);
});


