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

Route::get('/admin/trangchu', function () {
    return view('admin.index');
});

Route::group(['prefix'=> 'admin'], function(){
    Route::group(['prefix'=> 'loaisanpham'],function(){
        Route::get('danhsach','LoaispController@getDanhSach');
        Route::get('them','LoaispController@getThemLoai');
        Route::get('xoa/{id}','LoaispController@getXoaLoai');
        Route::get('sua/{id}','LoaispController@getSuaLoai');
        Route::post('them','LoaispController@postThemLoai');
        Route::post('sua/{id}','LoaispController@postSuaLoai');
    });
    Route::group(['prefix'=> 'sanpham'],function(){
        Route::get('danhsach','SanPhamController@getDanhSach');
        Route::get('them','SanPhamController@getThemSp');
        Route::get('xoa/{id}','SanPhamController@getXoaSp');
        Route::get('sua/{id}','SanPhamController@getSuaSp');
        Route::post('them','SanPhamController@postThemSp');
        Route::post('sua/{id}','SanPhamController@postSuaSp');
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
// Blog 
Route::get('blog',[
    'as'=>'blog',
    'uses' =>'PageController@Blog'
]);
// Create account
Route::get('create-account',[
    'as'=> 'createaccount',
    'uses'=>'PageController@createAccount'
]);
Route::post('create-account',[
    'as'=> 'createaccount',
    'uses'=>'PageController@saveAccount'
]);
//Login
Route::get('login',[
    'as'=> 'login',
    'uses'=>'PageController@getLogin'
]);
Route::post('login',[
    'as'=> 'login',
    'uses'=>'PageController@postLogin'
]);
// logout
Route::get('logout',[
    'as'=> 'logout',
    'uses'=>'PageController@postLogout'
]);
// Giỏ Hàng
Route::get('cart',[
    'as'=> 'cart',
    'uses'=>'PageController@cart'
]);


