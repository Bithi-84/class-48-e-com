<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// })


Route::get('/',[FrontendController::class,'index'])->name('base');
Route::get('/products-details',[FrontendController::class,'productDetails'])->name('products.details');
Route::get('/shop',[FrontendController::class,'shop'])->name('shop');
Route::get('/return-process',[FrontendController::class,'returnProcess'])->name('return.process');
Route::get('/category-products',[FrontendController::class,'categoryProducts'])->name('category.products');
Route::get('/subcategory-products',[FrontendController::class,'subcategoryProducts']);
Route::get('/view-cart',[FrontendController::class,'viewCart']);
Route::get('/checkout',[FrontendController::class,'checkOut']);
Route::get('/type-products',[FrontendController::class,'typeProduct']);
// policy page....

Route::get('/privacy-policy',[FrontendController::class,'privacyPolicy']);
Route::get('/terms-conditions',[FrontendController::class,'termsCondition']);
Route::get('/refund-policy',[FrontendController::class,'refundPolicy']);
Route::get('/payment-policy',[FrontendController::class,'paymentPolicy']);
Route::get('/about-us',[FrontendController::class,'aboutUs']);
Route::get('/contact-us',[FrontendController::class,'contactUs']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
