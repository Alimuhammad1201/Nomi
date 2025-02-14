<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\DealsController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/admin/category/edit/{slug}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/admin/product/edit/{slug}', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/admin/deals/create', [dealsController::class, 'create'])->name('deals.create');
    Route::get('/admin/varation/create', [ProductController::class, 'CreateVaration'])->name('varartion.create');
    Route::get('/admin/varation/edit/{id}', [ProductController::class, 'EditVaration'])->name('varartion.edit');

});

require __DIR__.'/auth.php';
