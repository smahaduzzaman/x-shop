<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PromotionalEmailController;
use App\Http\Controllers\UnsubscribeController;
use Illuminate\Support\Facades\Route;

// Customer Management Routes
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');

// Promotional Email Routes
Route::get('/promotional-email', [PromotionalEmailController::class, 'create'])->name('promotional-email.create');
Route::post('/promotional-email', [PromotionalEmailController::class, 'send'])->name('promotional-email.send');

// Unsubscribe Route
Route::get('/unsubscribe', [UnsubscribeController::class, 'index'])->name('unsubscribe');

// Contact Us Routes
Route::get('/contact-us', [ContactUsController::class, 'create'])->name('contact-us.create');
Route::post('/contact-us', [ContactUsController::class, 'send'])->name('contact-us.send');


/*
|--------------------------------------------------------------------------
| Web Route
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

        $customers = \App\Models\Customer::all();

        return view('customers.index', compact('customers'));
    });
