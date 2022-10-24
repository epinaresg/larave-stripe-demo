<?php

use App\Http\Controllers\BuildSimpleChargePageGetController;
use App\Http\Controllers\ListPlansGetController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Stripe;

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
Route::get('/', ListPlansGetController::class);
Route::get('/simple-charge/checkout/{plan}', BuildSimpleChargePageGetController::class);

Route::stripeWebhooks('stripe/webhook');
