<?php

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

Route::get('/', function () {
    return view('welcome');
});



Route::resource('data_hotel', App\Http\Controllers\DataHotelController::class)->middleware(['auth']);
Route::resource('locations', App\Http\Controllers\LocationController::class)->middleware(['auth']);
Route::resource('billing', App\Http\Controllers\BillingResolutionController::class)->middleware(['auth']);
Route::resource('bank_account', App\Http\Controllers\BankAccountController::class)->middleware(['auth']);


Route::get('ajax/request/cities', [App\Http\Controllers\LocationController::class, 'ajaxRequestCities'])->name('ajax.request.cities')->middleware(['auth']);
Route::get('ajax/request/billing', [App\Http\Controllers\BillingResolutionController::class, 'ajaxRequestBilling'])->name('ajax.request.billing')->middleware(['auth']);
Route::get('ajax/request/bank', [App\Http\Controllers\BankAccountController::class, 'ajaxRequestBank'])->name('ajax.request.bank_account')->middleware(['auth']);





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
