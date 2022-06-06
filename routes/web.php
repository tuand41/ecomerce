<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\Shop\HomePageController;
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
Route::get('lang/{locale}', [LocalizationController::class,'translate'])->name('localization');

// Route::get('/', function () {
//     return view('shop.homePage');
// });

Auth::routes([
    'register' => false,
    'verify' => false,
]);

Route::group(['namespace' => 'Shop'], function () {
    Route::get('/', [HomePageController::class, 'index']);
});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
