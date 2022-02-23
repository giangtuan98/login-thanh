<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

$controller = new Controller();


Route::get('test-shop', [ShopController::class, 'test'])->name('shop.test')->middleware('auth:shop');
Route::get('shop/logout', [ShopController::class, 'logout'])->middleware('auth:shop');

Route::get('admin/login', [UserController::class, 'login']);
Route::get('admin', [UserController::class, 'admin'])->middleware('auth:web');
Route::get('admin/login-shop/{shop}', [UserController::class, 'loginShop'])->middleware('auth:web');
