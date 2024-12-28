<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Slide;
use App\Http\Controllers\Admin\ProductController;


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

Route::middleware([
    'auth'
, 'admin'
])->group(function () {
    Route::get('admin/products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('admin/products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('admin/products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('admin/products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('admin/products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('admin/products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});



Route::get('index', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}', [
    'as' => 'loaisanpham',
    'uses' => 'PageController@getLoaiSanPham'
]);

Route::get('chi-tiet-san-pham/{id}', [
    'as' => 'chitietsanpham',
    'uses' => 'PageController@getChitiet'
]);


Route::get('lien-he', [
    'as' => 'lienhe',
    'uses' => 'PageController@getLienHe'
]);

Route::get('gioi-thieu', [
    'as' => 'gioithieu',
    'uses' => 'PageController@getGioithieu'
]);


Route::get('add-to-cart/{id}',[
    'as' => 'themgiohang',
    'uses' => 'PageController@getAddtoCart'
]);


Route::get('del-cart/{id}',[
    'as' => 'xoagiohang',
    'uses' => 'PageController@getDelItemCart'
]);

Route::get('dat-hang', [
    'as' => 'dathang',
    'uses' =>'PageController@getCheckout'
]);

Route::post('dat-hang',[
    'as' => 'dathang',
    'uses' => 'PageController@postCheckout'

]);

Route::get('dang-nhap',[
    'as' => 'login',
    'uses' => 'PageController@getLogin'
]);


Route::post('dang-nhap',[
    'as' => 'login',
    'uses' => 'PageController@postLogin'
]);


Route::get('dang-ky',[
    'as' => 'signup',
    'uses' => 'PageController@getSignup'
]);

Route::post('dang-ky',[
    'as' => 'signup',
    'uses' => 'PageController@postSignup'
]);


Route::get('dang-xuat',[
    'as' => 'logout',
    'uses' => 'PageController@getLogout'
]);


Route::get('search',[
    'as' => 'search',
    'uses' => 'PageController@getSearch'
]);




