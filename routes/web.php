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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', App\Livewire\Welcome\Index::class)->name('welcome.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('dashboard', App\Livewire\Dashboard\Index::class)->name('dashboard.index');

Route::get('order', App\Livewire\Order\Index::class)->name('order.index');
Route::get('order-detail', App\Livewire\Order\Detail::class)->name('order.detail');

Route::get('product', App\Livewire\Product\Index::class)->name('product.index');
Route::get('product-detail', App\Livewire\Product\Detail::class)->name('product.detail');
Route::get('product-grid', App\Livewire\Product\Grid::class)->name('product.grid');
Route::get('product-shoppingcart', App\Livewire\Product\Shoppingcart::class)->name('product.shoppingcart');
Route::get('product-checkout', App\Livewire\Product\Checkout::class)->name('product.checkout');



Route::get('buyer-dashboard', App\Livewire\Buyer\Dashboard::class)->name('buyer.dashboard');
Route::get('buyer-order', App\Livewire\Buyer\Order::class)->name('buyer.order');
Route::get('buyer-address', App\Livewire\Buyer\Address::class)->name('buyer.address');
Route::get('buyer-wishlist', App\Livewire\Buyer\Wishlist::class)->name('buyer.wishlist');



Route::get('customer', App\Livewire\Customer\Index::class)->name('customer.index');


Route::get('invoice', App\Livewire\Invoice\Index::class)->name('invoice.index');
Route::get('invoice-detail', App\Livewire\Invoice\Detail::class)->name('invoice.detail');


Route::get('profile', App\Livewire\Profile\Index::class)->name('profile.index');


Route::get('user', App\Livewire\User\Index::class)->name('user.index');
Route::get('user-grid', App\Livewire\User\Grid::class)->name('user.grid');


Route::get('auth-login', App\Livewire\Authentication\Login::class)->name('authentication.login');
Route::get('auth-register', App\Livewire\Authentication\Register::class)->name('authentication.register');
Route::get('auth-resetpassword', App\Livewire\Authentication\Resetpassword::class)->name('authentication.resetpassword');
Route::get('auth-lockscreen', App\Livewire\Authentication\Lockscreen::class)->name('authentication.lockscreen');
Route::get('auth-accountverified', App\Livewire\Authentication\Accountverified::class)->name('authentication.accountverified');


Route::get('error-access-denied', App\Livewire\ErrorPages\AccessDenied::class)->name('errorpage.accessdenied');
Route::get('error-404', App\Livewire\ErrorPages\Error404::class)->name('errorpage.error404');
Route::get('error-under-construction', App\Livewire\ErrorPages\UnderConstruction::class)->name('errorpage.underconstruction');




