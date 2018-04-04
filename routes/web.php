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
Use App\LoaiSanPham;
Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=> 'admin'], function(){
    Route::group(['prefix'=> 'loaisanpham'],function(){
        Route::get('danhsach','LoaispController@getDanhSach');
        Route::get('them','LoaispController@getThemLoai');
        Route::get('xoa','LoaispController@getXoaLoai');
        Route::get('sua','LoaispController@getSuaLoai');
        Route::post('them','LoaispController@postThemLoai');
    });
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
//Tìm kiếm sản phẩm
Route::get('tim-kiem-sp',[
    'as'=> 'searchProduct',
    'uses'=> 'PageController@getProduct'
]);
