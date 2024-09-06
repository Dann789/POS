<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'viewHome']);

Route::prefix('/products')->group (function () {
    Route::get('/', [ProductsController::class, 'viewProducts']);
    Route::get('/category/food-beverage', [ProductsController::class, 'viewFoodBeverage'])->name('products.category.food-beverage');
    Route::get('/category/beauty-health', [ProductsController::class, 'viewBeautyHealth'])->name('products.category.beauty-health');
    Route::get('/category/home-care', [ProductsController::class, 'viewHomeCare'])->name('products.category.home-care');
    Route::get('/category/baby-kid', [ProductsController::class, 'viewBabyKid'])->name('products.category.baby-kid');
});

Route::get('/profile/{nama}/{id}', [UserController::class, 'viewUser']);

Route::get('/transaction', [TransactionController::class, 'viewTransaction']);