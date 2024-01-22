<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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


Route::get('/', [AuthController::class, 'index']);
Route::post('/', [AuthController::class, 'login']);

Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth']
], function () {

    Route::get('/dashboard', 'DashboardController@index');

    Route::get('/users', 'AdminUsersController@index');

    Route::group([
        'prefix' => 'products',
    ], function () {
        Route::get('/', 'ProductsController@index');
        Route::post('/add', 'ProductsController@index');
        Route::put('/update/{sku}', 'ProductsController@index');
        Route::delete('/remove/{sku}', 'ProductsController@index');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
