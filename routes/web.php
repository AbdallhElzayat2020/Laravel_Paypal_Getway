<?php

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

    use App\Http\Controllers\Gatways\PaypalController;
    use Illuminate\Support\Facades\Route;

    Route::get('/' , function () {
        return view('welcome');
    });

    Route::post('paypal/payment' , [ PaypalController::class , 'payment' ])->name('paypal.payment');
    Route::get('paypal/success' , [ PaypalController::class , 'success' ])->name('paypal.success');
    Route::get('paypal/cancel' , [ PaypalController::class , 'cancel' ])->name('paypal.cancel');
