<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ProductController::class)->group(function(){
    Route::get('/add/product','addproduct')->name('add.product');
    Route::get('/all/product','allproduct')->name('all.product');
    Route::get('/edit/quantity/{id}','editquantity')->name('edit.quantity');
    Route::get('/edit/product/{id}','editproduct')->name('edit.product');
    Route::get('/delete/product/{id}','deleteproduct')->name('delete.product');
Route::post('/update/product/{id}','Updateproduct')->name('update.product');
    Route::post('/store/product','storeproduct')->name('store.product');
    Route::post('/update/quantity/{id}','Updatequantity')->name('update.quantity');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/add/customer','addcustomer')->name('add.customer');
    Route::get('/all/customer','allcustomer')->name('all.customer');
    Route::post('/store/customer','storecustomer')->name('store.customer');
});


Route::controller(InvoiceController::class)->group(function(){
    Route::get('/add/invoice','addinvoice')->name('add.invoice');
Route::post('/store/invoice','storeinvoice')->name('store.invoice');
});
