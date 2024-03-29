<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', function(){
    return redirect()->route('login');
});

Route::resource('products', ProductController::class)->middleware('auth');
Route::get('/products/pdf-create/{id}', [ProductController::class, 'generatePdf'])->middleware('auth');
