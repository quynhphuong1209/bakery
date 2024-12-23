<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Slide;


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




