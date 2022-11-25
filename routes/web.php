<?php

use App\Http\Controllers\BuildSaveCardPageGetController;
use App\Http\Controllers\BuildSimplePaymentPageGetController;
use App\Http\Controllers\ListPlansGetController;
use App\Http\Controllers\SaveCardPostController;
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
Route::get('/', ListPlansGetController::class);

Route::get('/save-card', BuildSaveCardPageGetController::class);
Route::post('/save-card', SaveCardPostController::class);

Route::get('/simple-payment/checkout/{plan}', BuildSimplePaymentPageGetController::class);

Route::stripeWebhooks('stripe/webhook');
