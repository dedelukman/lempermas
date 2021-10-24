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


Route::redirect('/', 'dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

Route::middleware(['auth'])->group(function () {
    Route::get('master/product', \App\Http\Livewire\ShowProduct::class)->name('master.product');
    Route::get('master/category', \App\Http\Livewire\ShowCategory::class)->name('master.category');
    Route::get('master/supplier', \App\Http\Livewire\ShowSupplier::class)->name('master.supplier');
    Route::get('master/customer', \App\Http\Livewire\ShowCustomer::class)->name('master.customer');
});

require __DIR__ . '/auth.php';
