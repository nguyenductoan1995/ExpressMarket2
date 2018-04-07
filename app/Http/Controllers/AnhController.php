<?php

namespace App\Http\Controllers;

use App\anh;
use App\SanPham;
use App\Cart;
use Session;
use Illuminate\Http\Request;

class AnhController extends Controller
{
    public function getDanhSach()
    {
        $anh = Anh::all();
        return view ('admin.anh.danhsach',['img' => $anh]);
    }

    public function getThemAnh()
    {
        $sp = SanPham::all();
        return view ('admin.anh.them',['sanpham' => $sp]);
    }

    public function getXoaAnh($id)
    {
        $anh = Anh:: where('id_hinh','=',$id) ;
        $anh ->delete();
        return redirect('admin/anh/danhsach') -> with('thongbao', 'Xoá Thành Công!');
    }

    public function getSuaAnh($id)
    {
        $sp = SanPham::all();
        $anh = Anh:: where('id_hinh','=',$id) ->first();
        return view ('admin.anh.sua',['img' => $anh,'sanpham'=> $sp]);
    }

    public function postSuaAnh(Request $request, $id)
    {
        $sp = SanPham::all();
        $anh = Anh:: where('id_hinh','=',$id) ->first();
        $anh-> link = $request -> link;
        if($request->hasFile('image'))
        {
            $file  = $request ->file('image');
            $name = $file-> getClientOriginalName();
            $image = str_random(3)."_".$name;
            $file ->move("source/img/products/chitiet/", $image);
            unlink("source/img/products/chitiet/".$anh->$url_hinh);
            $anh -> url_hinh = $image;
        };
        $anh -> save();
        return redirect('admin/anh/sua'.$id) -> with('thongbao', 'Sửa Thành Công!');
    }

    public function postThemAnh(Request $request)
    {
        $this -> validate($request,
        [
            'ten_anh' => 'required|min:3| max:100'
        ],
        [
            'ten_anh.required' => 'Bạn chưa nhập tên loại',
            'ten_anh.min' => 'Tên loại sản phẩm có độ dài từ 3 tới 100 ký tự!',
            'ten_anh.max' => 'Tên loại sản phẩm có độ dài từ 3 tới 100 ký tự!'
        ]);
        $img = new Anh;
        $img-> id_sp = $request -> id_sp;
        if($request->hasFile('image'))
        {
            $file  = $request ->file('image') ;
            $name = $file-> getClientOriginalName();
            $image = str_random(3)."_".$name;
            $file ->move("source/img/products/chitiet/", $image);
            $img -> url_hinh = $link;
        }
        else    
        $img -> url_hinh =" ";
        $img -> save();
        return redirect('admin/anh/them') -> with('thongbao', 'Thêm Thành Công!');


    }
}