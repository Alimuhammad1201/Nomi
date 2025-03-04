<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\MediaController;
use App\Http\Controllers\admin\DealsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\NewsletterController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/privacy-policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/delivery-policy', [HomeController::class, 'delivery'])->name('delivery');
Route::get('/terms-conditionas', [HomeController::class, 'conditionas'])->name('conditionas');
Route::get('/category/{slug}/', [HomeController::class, 'category_detail'])->name('category_detail');
Route::get('product/{slug}/', [HomeController::class, 'product_detail'])->name('detail');

// Review Route
Route::Post('/submit/review/', [ReviewController::class, 'add_review'])->name('add.review');

// Add To Cart Route
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add.to.cart');
Route::get('/my-cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('/apply-coupon', [CartController::class, 'applyCoupon'])->name('coupon.apply');
Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
Route::POST('/checkout', [CartController::class, 'order_submit'])->name('place.order');
Route::get('/get-cities', [CartController::class, 'getCities'])->name('get.cities');
Route::get('/admin/product/check/{id}', [CartController::class, 'check'])->name('product.check');
Route::get('/get-delivery-charge', [CartController::class, 'getDeliveryCharge'])->name('get.delivery.charge');
// Route::get('/getExchangeRate/{from}/{to}', [CurrencyController::class, 'convertCurrency']);
Route::get('/track-order', [CartController::class, 'showTrackOrderForm'])->name('track.order.form');
Route::post('/track-order', [CartController::class, 'trackOrder'])->name('track.order');
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');




// Dashboard Route - Requires Authentication and Email Verification
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

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

    // Review Routes - Admin Panel Routes for Review Management
    Route::get('/admin/product/review', [ReviewController::class, 'view_review'])->name('view.review');
    Route::Put('/product/review/update/{id}/', [ReviewController::class, 'review_update'])->name('update.review');


    // Review Routes - Admin Panel Routes for Review Management
    Route::get('/admin/view/order', [CartController::class, 'view_order'])->name('view.order');
    Route::get('/admin/order/detail/{id}', [CartController::class, 'viewOrderDetail'])->name('view.detail');
    Route::Put('/admin/view/order/{id}/', [CartController::class, 'order_status_update'])->name('order.status_update');
    Route::post('/update-order-status', [CartController::class, 'updateStatus'])->name('update.order.status');


    // Deals Routes - Admin Panel Routes for Deals Management
    Route::get('/admin/deals/create', [DealsController::class, 'create'])->name('deals.create');
    Route::get('/admin/deals/', [DealsController::class, 'index'])->name('deals');
});

require __DIR__.'/auth.php';
