<?php

use App\Http\Controllers\BuildCardsPageGetController;
use App\Http\Controllers\BuildSimplePaymentPageGetController;
use App\Http\Controllers\DeleteCardGetController;
use App\Http\Controllers\ListPlansGetController;
use App\Http\Controllers\LoginPostController;
use App\Http\Controllers\LogoutGetController;
use App\Http\Controllers\SaveCardPostController;
use App\Http\Controllers\SetDefaultCardGetController;
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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ListPlansGetController::class);
    Route::post('/login', LoginPostController::class);
    Route::get('/logout', LogoutGetController::class);

    Route::get('/cards', BuildCardsPageGetController::class);
    Route::post('/save-card', SaveCardPostController::class);

    Route::get('/cards/set-default/{paymentMethod}', SetDefaultCardGetController::class);
    Route::get('/cards/delete/{paymentMethod}', DeleteCardGetController::class);

    Route::get('/simple-payment/checkout/{plan}', BuildSimplePaymentPageGetController::class);

    Route::stripeWebhooks('stripe/webhook');
});
