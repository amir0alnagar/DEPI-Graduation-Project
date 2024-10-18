<?php

use App\Http\Controllers\Dashboard\{CategoryController,DashboardMainController , OrderController, ProductController ,SubCategoryController, UserController};
use App\Http\Controllers\website\{BlogController ,CartController ,MainController,ShopController};
use Illuminate\Support\Facades\Auth;
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
    Route::get('/welcome', [MainController::class, 'welcome'])->name('welcome');
Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/contact_us', [MainController::class, 'contact'])->name('contact_us');
Route::post('/contact', [MainController::class, 'store'])->middleware('auth')->name('contact.store');
Route::get('/services', [MainController::class, 'services'])->name('services');
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

                Route::resource('/subcategories', SubCategoryController::class);
                Route::get('/subcategory/delete' , [SubCategoryController::class , 'delete'])->name('subcategory.delete');
                Route::get('/subcategory/restore/{id}' ,[SubCategoryController::class , 'restore'])->name('subcategories.restore');
                Route::delete('/subcategory/forceDelete/{id}' , [SubCategoryController::class , 'forceDelete'])->name('subcategories.forceDelete');

                Route::resource('/products', ProductController::class);
                Route::get('/product/delete',[ProductController::class, 'delete'])->name('products.delete');
                Route::get('/product/restore/{id}', [ProductController::class, 'restore'])->name('products.restore');
                Route::delete('/product/forceDelete/{id}', [ProductController::class,'forceDelete'])->name('products.forceDelete');

                Route::get('/orders/index',[OrderController::class , 'index'] )->name('orders.index');

                Route::get('/admins/index', [UserController::class , 'admins'])->name('admins.index');
                Route::get('/moderators/index', [UserController::class , 'moderators'])->name('moderators.index');
                Route::get('/customer/index', [UserController::class , 'customers'])->name('customers.index');
                });
        });
});






