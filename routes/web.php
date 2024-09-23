<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\DashboardController as adminDashboardController;
use App\Http\Controllers\admin\LoginController as adminLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MasterSettingController;
use App\Http\Controllers\SocialMediaController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\RazorpayPaymentController;

Route::prefix('admin')->group(function () {
});
Route::get('razorpay-payment', [RazorpayPaymentController::class, 'index']);
Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');

Route::group(['prefix' => 'account'], function () {

    Route::group(['middleware' => 'guest'], function () {


        Route::get('login', [LoginController::class, 'index'])->name('account.login');
        Route::get('register', [LoginController::class, 'register'])->name('account.register');
        Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
        Route::post('processRegister', [LoginController::class, 'processRegister'])->name('account.processRegister');


    });

    Route::group(['middleware' => 'auth'], function () {

        Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');
        Route::get('home', [HomeController::class, 'index'])->name('account.home');
        Route::get('contacts', [HomeController::class, 'contacts'])->name('account.contacts');
        Route::get('about', [HomeController::class, 'about'])->name('account.about');
        Route::get('view-all', [HomeController::class, 'view_all'])->name('account.view-all');
        Route::get('complet-view-all', [HomeController::class, 'view'])->name('account.complet-view-all');
    });

});



Route::group(['prefix' => 'admin'], function () {


    // guast middleware for admin
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');

    });



    // authenticate middleware for admin
    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('logout', [adminLoginController::class, 'logout'])->name('admin.logout');
        Route::get('dashboard', [adminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('create', [AdminController::class, ('create')])->name('admin/create');
        Route::get('manage-info', [AdminController::class, ('manage_info')])->name('admin/manage-info');
        Route::post('social-media-links', [SocialMediaController::class, 'create'])->name('admin/social-media-links');
        Route::get('social-media-links', [AdminController::class, ('social_links')])->name('admin/social-media-links');
        Route::get('terms-condition', [AdminController::class, ('terms_condition')])->name('admin/terms-condition');
        Route::get('category-list', [CategoryController::class, ('list')])->name('admin.category-list');
        Route::get('category', [CategoryController::class, ('index')])->name('admin.category');
        Route::post('category/list', [CategoryController::class, ('create')])->name('category/list');
        Route::delete('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
        Route::get('category_edit/{id}', [CategoryController::class, ('edit')])->name('admin.category_edit');
        Route::put('category/update/{id}', [CategoryController::class, 'update'])->name('admin.update');
        Route::get('comp_event_list', [CategoryController::class, ('comp_vent')])->name('admin.comp_event_list');
        Route::get('banner', [BannerController::class, ('index')])->name('admin/banner');
        Route::post('banner', [BannerController::class, 'create'])->name('admin/banner');
        Route::get('banner-list', [BannerController::class, 'list'])->name('admin.banner-list');
        Route::get('banner-edit/{id}', [BannerController::class, 'edit'])->name('admin.banner-edit');
        Route::get('status_active_deactive/', [BannerController::class, 'status_active_deactive'])->name('admin.status_active_deactive');
        Route::put('update/{id}', [BannerController::class, 'update'])->name('admin.banner.update');
        Route::delete('delete/{id}', [BannerController::class, 'delete'])->name('admin.delete');
        Route::get('master-satting', [MasterSettingController::class, 'index'])->name('admin/master-setting');
        Route::post('master-satting', [MasterSettingController::class, 'create'])->name('admin.master-setting');

    });

});
