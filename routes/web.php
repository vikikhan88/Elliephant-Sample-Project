<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', function () {
    return view('auth/login');
});

/*
|=================
| BACKEND ROUTES
|=================
*/
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth']
], function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::group([
        'prefix' => 'products',
    ], function () {
        Route::get('/', 'ProductsController@index');
        Route::get('/edit/{sku}', 'ProductsController@index');
    });

    Route::get('/users', 'AdminUsersController@index');
});

/*
|=================
| FRONTEND ROUTES
|=================
*/
Route::group([
    'prefix' => 'products',
], function () {
    Route::get('/', function () {
        return view('pages/products/productsList');
    });
    Route::get('/details/{sku}', function () {
        return view('pages/products/productDetails');
    });
});
