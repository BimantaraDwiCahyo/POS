<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SalesController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('products')->group(function () {
    Route::get('/category/food-beverage', [ProductsController::class, 'foodBeverage'])->name('products.food_beverage');
    Route::get('/category/beauty-health', [ProductsController::class, 'beautyHealth'])->name('products.beauty_health');
    Route::get('/category/home-care', [ProductsController::class, 'homeCare'])->name('products.home_care');
    Route::get('/category/baby-kid', [ProductsController::class, 'babyKid'])->name('products.baby_kid');
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])->name('user.show');

Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
