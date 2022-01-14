<?php

use Illuminate\Support\Facades\Route;
 use App\Http\Controllers\PetController;
 use App\Http\Controllers\ProductController;


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

// Route::get('/', function () {
//     return view('pet-shop/index');
// });
Route::get('/', [ProductController::class, 'shopindex'])->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('food', [ProductController::class, 'shoplist']
)->name('food');

// Route::get('about', function () {
//     return view('pet-shop/about-us');
// })->name('about-us');
Route::get('about', [PetController::class, 'about'])->name('about');

Route::get('product-detail', [ProductController::class, 'productDetails'])->name('product-detail');

//  Route::get('product-detail/{product}', [ProductController::class, 'productDetails'])->where('product', '\d+')->name('product-detail');
Route::get('contact-us', [ProductController::class, 'contact'])->name('contact-us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('add-card',[ProductController::class, 'addCard'] )->name('add-card');
Route::get('profile',[ProductController::class, 'profile'] )->name('profile')->middleware('auth');
Route::get('checkout',[ProductController::class, 'checkout'] )->name('checkout')->middleware('auth');

Route::post('make-order',[ProductController::class, 'makeOrder'] )->name('make-order')->middleware('auth');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
