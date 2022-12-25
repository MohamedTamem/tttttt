<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "webw create something great!
|
*/

Route::get('/login', function () {
    return view('auth.login');
});

//product
Route::get('/add-product', function () {
    return view('Admin.add_product');
})->name('add.product');

Route::post('/insert-product',[ProductController::class,'store']);

Route::get('/all-product',[ProductController::class,'allProduct'])->name('all.product');

Route::get('/available-products',[ProductController::class,'availableProducts'])->name('available.products');

Route::get('/purchase-products/{id}', [ProductController::class,'purchaseData']);

Route::post('/insert-purchase-products',[ProductController::class,'storePurchase']);


//invoice
Route::get('/add-invoice/{id}', [InvoiceController::class,'formData']);

Route::get('/new-invoice', [InvoiceController::class,'newformData'])->name('new.invoice');

Route::post('/insert-invoice',[InvoiceController::class,'store']);

Route::get('/invoice-details', function () {
    return view('Admin.invoice_details');
})->name('invoice.details');

Route::get('/all-invoice', [InvoiceController::class,'allInvoices'])->name('all.invoices');

Route::get('/sold-products',[InvoiceController::class,'soldProducts'])->name('sold.products');
// Route::get('/delete', [InvoiceController::class,'delete']);


//order
Route::get('/add-order/{name}', [ProductController::class,'formData'])->name('add.order');

Route::post('/insert-order',[OrderController::class,'store']);

Route::get('/all-orders',[OrderController::class,'ordersData'])->name('all.orders');

Route::get('/pending-orders',[OrderController::class,'pendingOrders'])->name('pending.orders');

Route::get('/delivered-orders',[OrderController::class,'deliveredOrders'])->name('delivered.orders');

Route::get('/new-order', [OrderController::class,'newformData'])->name('new.order');

Route::post('/insert-new-order',[OrderController::class,'newStore']);


//customer
Route::get('/add-customer', function () {
    return view('Admin.add_customer');
})->name('add.customer');

Route::post('/insert-customer',[CustomerController::class,'store']);

Route::get('/all-customers',[CustomerController::class,'customersData'])->name('all.customers');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';