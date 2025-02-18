<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\MediaController;
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

// Home Route
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Route - Requires Authentication and Email Verification
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes - These routes are protected with auth middleware
Route::middleware('auth')->group(function () {
    // Profile Edit, Update, and Delete Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Category Routes - Admin Panel Routes for Category Management
    Route::get('/admin/category/', [CategoryController::class, 'index'])->name('category');
    Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/create', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/admin/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::post('/admin/category/update-status/{id}', [CategoryController::class, 'updateStatus']); // Status update Route for category
    Route::delete('/admin/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy'); // Delete category route

    // Product Routes - Admin Panel Routes for Product Management
    Route::get('/admin/product/', [ProductController::class, 'index'])->name('product');
    Route::get('/admin/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/create', [ProductController::class, 'store'])->name('product.store');
    Route::get('/admin/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::post('/admin/product/update-status/{id}', [ProductController::class, 'updateStatus']); // Status update route for product
    Route::delete('/admin/product/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy'); // Delete product 
    Route::get('/admin/product/check/{id}', [ProductController::class, 'check'])->name('product.check');


    // Variation Routes - Admin Panel Routes for Product Variation Management
    Route::get('/admin/varation/create', [ProductController::class, 'CreateVaration'])->name('varartion.create'); // Create variation
    Route::get('/admin/varation/edit/{id}', [ProductController::class, 'EditVaration'])->name('varartion.edit'); // Edit variation

    // Media Routes - Admin Panel Routes for Media Management
    Route::get('/admin/media/', [MediaController::class, 'index'])->name('media');
    Route::get('/admin/media/create', [MediaController::class, 'create'])->name('media.create');
    Route::post('/media/create', [MediaController::class, 'store'])->name('media.store');
    Route::get('/admin/media/edit/{id}', [MediaController::class, 'edit'])->name('media.edit');
    Route::put('/media/update/{id}', [MediaController::class, 'update'])->name('media.update');
    Route::post('/admin/media/update-status/{id}', [MediaController::class, 'updateStatus']); // Status update route for media
    Route::delete('/admin/media/destroy/{id}', [MediaController::class, 'destroy'])->name('media.destroy'); // Delete media route


    // Deals Routes - Admin Panel Routes for Deals Management
    Route::get('/admin/deals/create', [DealsController::class, 'create'])->name('deals.create');
    Route::get('/admin/deals/', [DealsController::class, 'index'])->name('deals');
});

require __DIR__.'/auth.php';
