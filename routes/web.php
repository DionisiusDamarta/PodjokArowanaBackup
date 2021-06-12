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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(
    ['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::get('dashboard', 'DashboardController@index');
        Route::resource('categories', 'CategoryController');
        Route::resource('products', 'ProductController');
        Route::resource('transactions', 'TransactionController');
        Route::resource('inventories', 'InventoryController');
        // Route::get('/kasir', 'KasirController@index')->name('kasir');

        Route::get('/kasir', [KasirController::class, 'index'])->name('kasir');
        Route::get('/invoice/{no_order}', [KasirController::class, 'invoice'])->name('invoice');

        Route::get('transactions/masuk/{product_id}', 'TransactionController@masuk');
        Route::get('products/{productID}/images', 'ProductController@images');
        Route::get('products/{productID}/add-image', 'ProductController@add_image');
        Route::post('products/images/{productID}', 'ProductController@upload_image');
        Route::delete('products/images/{imageID}', 'ProductController@remove_image');
        
    }
);
