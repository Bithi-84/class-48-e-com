<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// })


Route::get('/',[FrontendController::class,'index'])->name('base');
Route::get('/products-details/{slug}',[FrontendController::class,'productDetails'])->name('products.details');
Route::get('/shop',[FrontendController::class,'shop'])->name('shop');
Route::get('/return-process',[FrontendController::class,'returnProcess'])->name('return.process');
Route::get('/category-products/{id}',[FrontendController::class,'categoryProducts'])->name('category.products');
Route::get('/subcategory-products/{id}',[FrontendController::class,'subcategoryProducts']);
Route::get('/view-cart',[FrontendController::class,'viewCart']);
Route::get('/checkout',[FrontendController::class,'checkOut']);
Route::get('/type-products/{type}',[FrontendController::class,'typeProduct']);
Route::get('/search-products',[FrontendController::class,'searchProduct']);


// policy page....

Route::get('/privacy-policy',[FrontendController::class,'privacyPolicy']);
Route::get('/terms-conditions',[FrontendController::class,'termsCondition']);
Route::get('/refund-policy',[FrontendController::class,'refundPolicy']);
Route::get('/payment-policy',[FrontendController::class,'paymentPolicy']);
Route::get('/about-us',[FrontendController::class,'aboutUs']);
Route::get('/contact-us',[FrontendController::class,'contactUs']);


// cart Routs

Route::get('/add-to-cart/{id}',[FrontendController::class,'addToCart']);
Route::post('/add-to-cart-details/{id}',[FrontendController::class,'addToCartDetails']);
Route::get('/cart-delete/{id}',[FrontendController::class,'addToCartDelete']);

// order confirmation Routs

Route::post('/confirm-order',[FrontendController::class,'confirmOrder']);
Route::get('/order-confirmed/{invoiceId}',[FrontendController::class,'thankYou']);


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

//products.....

Route:: get ('/admin/product/list',[ProductController::class,'productList']);
Route::get ('/admin/product/create',[ProductController::class,'productCreate']);
Route::post ('/admin/product/store',[ProductController::class,'productStore']);
Route::get ('/admin/product/edit/{id}',[ProductController::class,'productEdit']);
Route::get ('/admin/product/delete/{id}',[ProductController::class,'productDelete']);
Route::post ('/admin/product/update/{id}',[ProductController::class,'productUpdate']);


//orders.....

Route:: get ('/admin/all-order/list',[OrderController::class,'allOrdertList']);
Route:: get ('/admin/edit-order/{id}',[OrderController::class,'editOrder']);
Route:: post ('/admin/update-order/{id}',[OrderController::class,'updateOrder']);
Route:: get ('/admin/update-order-status/{status}/{id}',[OrderController::class,'updateOrderStatus']);
Route:: get ('/admin/status-wise-order/{status}',[OrderController::class,'statusWiseOrder']);


// Settings

Route:: get ('/admin/general-setting',[SettingController::class,'showSettings']);
Route:: post ('/admin/general-setting/update',[SettingController::class,'updateSettings']);
Route:: get('/admin/top-banners',[SettingController::class,'showBanners']);
Route:: get ('/admin/top-banner-edit/{id}',[SettingController::class,'editBanner']);
Route:: post ('/admin/top-banners/update/{id}',[SettingController::class,'updateBanners']);
Route:: get ('/admin/policies-process',[SettingController::class,'showPolicyProcess']);
Route:: post ('/admin/policies-process/update',[SettingController::class,'showUpdatePolicy']);
