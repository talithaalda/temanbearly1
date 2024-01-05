<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardOrderController;
use App\Http\Controllers\DashboardProdukController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\produkController;
use App\Http\Controllers\RegisterController;
use App\Models\category;
use App\Models\checkout;
use App\Models\City;
use App\Models\produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
