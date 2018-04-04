<?php

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

Route::get('/admin/loaisanpham', function () {
    return view('admin.loaisanpham.index');
});

Route::get('/admin/themloaisanpham', function () {
    return view('admin.loaisanpham.them');
});

Route::get('/admin/sualoaisanpham', function () {
    return view('admin.loaisanpham.sua');
});

Route::get('/admin/sanpham', function () {
    return view('admin.sanpham.index');
});

Route::get('/admin/themsanpham', function () {
    return view('admin.sanpham.them');
});

Route::get('/admin/loaisanpham', function () {
    return view('admin.sanpham.sua');
});


Route::get('index', [
    'as' => 'trang-chu',
    'uses' => 'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}', [
    'as' => 'loaisanpham',
    'uses' => 'PageController@getCategory'
]);

Route::get('chi-tiet-san-pham/{type}', [
    'as' => 'chitietsanpham',
    'uses' => 'PageController@getProductDetail'
]);

Route::get('lien-he', [
    'as' => 'lienhe',
    'uses' => 'PageController@getContact'
]);
// Thêm 1 sp trong giỏ hàng
Route::get('them-gio-hang/{id}',[
    'as' => 'themgiohang',
    'uses' => 'PageController@getAddToCart'
]);
// Xóa 1 sp trong giỏ hàng
Route::get('xoa-gio-hang/{id}',[
    'as' => 'xoagiohang',
    'uses' => 'PageController@getDeleteItemCart'
]);
