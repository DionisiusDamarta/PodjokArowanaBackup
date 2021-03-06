<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\KasirController;
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
//     return view('welcome');
// });

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);
// Auth::routes();

Route::get('/contact', 'HomeController@contact');
Route::get('/category/{slug}', 'Admin\ProductController@showCategory');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/product/{slug}', 'Admin\ProductController@show');

Route::group(
    ['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::get('dashboard', 'DashboardController@index');
        Route::resource('categories', 'CategoryController');
        
        Route::get('transactions/input', 'TransactionController@input');
        Route::get('transactions/output', 'TransactionController@output');
        Route::get('transactions/penjualan', 'TransactionController@penjualan');
        Route::get('transactions/masuk/{product_id}', 'TransactionController@show'); 
        Route::resource('transactions', 'TransactionController');
      
        Route::get('inventories/stok', 'InventoryController@stok');
        Route::resource('inventories', 'InventoryController');
        
        Route::resource('products', 'ProductController');    
        Route::get('products/{productID}/images', 'ProductController@images');
        Route::get('products/{productID}/add-image', 'ProductController@add_image');
        Route::post('products/images/{productID}', 'ProductController@upload_image');
        Route::delete('products/images/{imageID}', 'ProductController@remove_image');
        
        Route::get('/kasir', [KasirController::class, 'index'])->name('kasir');
        Route::get('/invoice/{no_order}', [KasirController::class, 'invoice'])->name('invoice');
    }
);