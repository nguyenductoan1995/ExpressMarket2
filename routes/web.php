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

    Route::group(['prefix'=> 'slide'],function(){
        Route::get('danhsach','SlideController@getDanhSach');
        Route::get('them','SlideController@getThemSlide');
        Route::get('xoa/{id}','SlideController@getXoaSlide');
        Route::get('sua/{id}','SlideController@getSuaSlide');
        Route::post('them','SlideController@postThemSlide');
        Route::post('sua/{id}','SlideController@postSuaSlide');
    });

    Route::group(['prefix'=> 'user'],function(){
        Route::get('danhsach','UserController@getDanhSach');
        Route::get('them','UserController@getThemUser');
        Route::get('xoa/{id}','UserController@getXoaUser');
        Route::get('sua/{id}','UserController@getSuaUser');
        Route::post('them','UserController@postThemUser');
        Route::post('sua/{id}','UserController@postSuaUser');
    });

    Route::group(['prefix'=> 'anh'],function(){
        Route::get('danhsach','AnhController@getDanhSach');
        Route::get('them','AnhController@getThemAnh');
        Route::get('xoa/{id}','AnhController@getXoaAnh');
        Route::get('sua/{id}','AnhController@getSuaAnh');
        Route::post('them','AnhController@postThemAnh');
        Route::post('sua/{id}','AnhController@postSuaAnh');
    });


    Route::group(['prefix'=> 'thongke'],function(){
        Route::get('danhmuc','ThongKeController@getDanhMuc');
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
