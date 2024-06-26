<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutUsController;
use App\Http\Controllers\frontend\ContactUsController;
use App\Http\Controllers\frontend\RegisterController;
use App\Http\Controllers\frontend\BakeryController;
use App\Http\Controllers\frontend\DairyProductController;
use App\Http\Controllers\frontend\fruitsController;
use App\Http\Controllers\frontend\groceryController;
use App\Http\Controllers\frontend\meatController;
use App\Http\Controllers\frontend\vegetableController;
use App\Http\Controllers\CartController;

/*

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[ HomeController::class, 'index']);
Route::get('/aboutus',[ AboutUsController::class, 'index']);
Route::get('/contactus',[ ContactUsController::class, 'index']);
Route::get('/bakery',[ BakeryController::class, 'index']);
Route::get('/dairy',[ DairyproductController::class, 'index']);
Route::get('/grocery',[ groceryController::class, 'index']);
Route::get('/fruits',[ fruitsController::class, 'index']);
Route::get('/meat',[ meatController::class, 'index']);
Route::get('/vegetable',[ vegetableController::class, 'index']);
Route::get('/Register',[ RegisterController::class, 'index']);
Route::post('/addcart/{id}',[ HomeController::class, 'addcart']);



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showSignupForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);



Route::middleware(['auth'])->group(function () {
    Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
});



