<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\DashboardMainController;
use App\Http\Controllers\website\AboutController;
use App\Http\Controllers\website\BlogController;
use App\Http\Controllers\website\CartController;
use App\Http\Controllers\website\ContactController;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\website\ServicesController;
use App\Http\Controllers\website\ShopController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){
    Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact_us', [ContactController::class, 'index'])->name('contact_us');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/app', [CartController::class, 'app'])->name('app');


        Route::group(
            [
                'middleware' => ['dashboard']
            ],
            function () {
                Route::prefix('dashboard')->group(function () {
                Route::get('/', [DashboardMainController::class, 'index'])->name('dashboard');
                Route::resource('/categories', CategoryController::class);
                Route::get('/category/delete' , [CategoryController::class , 'delete'])->name('categories.delete');
                Route::get('/category/restore/{id}' ,[CategoryController::class , 'restore'])->name('categories.restore');
                Route::delete('/category/forceDelete/{id}' , [CategoryController::class , 'forceDelete'])->name('categories.forceDelete');
                });
        });
});






