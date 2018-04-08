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
        $sp =SanPham::all();
        $img = Anh:: where('id_hinh','=',$id) ->first();
        if($request->hasFile('image'))
        {
            $file  = $request ->file('image');
            $name = $file-> getClientOriginalName();
            $image = str_random(3)."_".$name;
            $file ->move("source/img/products/chitiet/", $image);
            //unlink("source/img/products/chitiet/".$img->url_hinh);
            $img->url_hinh= $image;
        };
        $img->id_sp = $request ->idsp;
        
        $img -> save();
        return redirect('admin/anh/sua/'.$id) -> with('thongbao', 'Sửa Thành Công!');
    }

    public function postThemAnh(Request $request)
    {
        $sld = new Anh;
        if($request->hasFile('image'))
        {
            $file  = $request ->file('image') ;
            $name = $file-> getClientOriginalName();
            $image = str_random(3)."_".$name;
            $file ->move("source/img/products/chitiet/", $image);
            $sld -> url_hinh = $image;
        }
        else    
        $sld -> url_hinh =" ";
        $sld-> id_sp = $request ->id_sp;
        $sld -> save();
        return redirect('admin/slide/them') -> with('thongbao', 'Thêm Thành Công!');
    }
    
}