<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SubCategoryController;
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

//Admin/login...
Route::get('/admin/login',[AdminController::class,'AdminLogin']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard',[DashboardController::class,'adminDashboard']);
Route::get('/admin/logout',[AdminController::class,'adminLogout']);

// Categories....

Route::get('/admin/category/list',[CategoryController::class,'categoryList']);
Route::get('/admin/category/create',[CategoryController::class,'categoryCreate']);
Route::post('/admin/category/store',[CategoryController::class,'categoryStore']);
Route::get('/admin/category/delete/{id}',[CategoryController::class,'categoryDelete']);
Route::get('/admin/category/edit/{id}',[CategoryController::class,'categoryEdit']);
Route::post('/admin/category/update/{id}',[CategoryController::class,'categoryUpdate']);

//Sub-Categories....

Route::get('/admin/sub-category/list',[SubCategoryController::class,'subCategoryList']);
Route::get('/admin/sub-category/create',[SubCategoryController::class,'subCategoryCreate']);
Route::post('/admin/sub-category/store',[SubCategoryController::class,'subCategoryStore']);
Route::get('/admin/sub-category/edit/{id}',[SubCategoryController::class,'subCategoryEdit']);
Route::get('/admin/sub-category/delete/{id}',[SubCategoryController::class,'subCategoryDelete']);
Route::post('/admin/sub-category/update/{id}',[SubCategoryController::class,'subCategoryUpdate']);

