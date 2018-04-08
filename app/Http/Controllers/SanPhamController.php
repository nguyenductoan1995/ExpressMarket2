<?php

namespace App\Http\Controllers;

use App\Slide;
use App\SanPham;
use App\LoaiSanPham;
use App\Cart;
use Session;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function getDanhSach()
    {
        $sp = SanPham::all();
        return view ('admin.sanpham.danhsach',['sanpham' => $sp]);
    }

    public function getThemSp()
    {
        $loaisp = LoaiSanPham::all();
        return view ('admin.sanpham.them',['loaisanpham' => $loaisp]);
    }

    public function postThemSp(Request $request)
    {
        $this -> validate($request,
        [
            'ten_sp' => 'required|min:3| max:100'
        ],
        [
            'ten_sp.required' => 'Bạn chưa nhập tên loại',
            'ten_sp.min' => 'Tên loại sản phẩm có độ dài từ 3 tới 100 ký tự!',
            'ten_sp.max' => 'Tên loại sản phẩm có độ dài từ 3 tới 100 ký tự!'
        ]);
        $sanpham = new SanPham;
        $sanpham-> ten_sp = $request -> ten_sp;
        $sanpham-> gia  = $request ->gia ;
        if($request->hasFile('urlanh'))
        {
            $file  = $request ->file('urlanh') ;
            $name = $file-> getClientOriginalName();
            $urlanh = str_random(3)."_".$name;
            $file ->move("source/img/products", $urlanh);
            $sanpham -> url_hinh = $urlanh;
        }
        else    
        $sanpham -> url_hinh =" ";
        $sanpham-> mo_ta  = $request -> mota;
        $sanpham-> so_luong_ton = $request ->soluong ;
        $sanpham-> sp_moi = $request -> new;
        $sanpham-> sp_hot = $request ->hot ;
        $sanpham-> sp_sale = $request ->sale ;
        $sanpham-> id_loai = $request -> idloai; 
        $sanpham -> save();
        return redirect('admin/sanpham/them') -> with('thongbao', 'Thêm Thành Công!');


    }

    public function getSuaSp($id)
    {
        $loaisp = LoaiSanPham::all();
        $sp = SanPham:: where('id_sp','=',$id) ->first() ;
        return view ('admin.sanpham.sua',['sanpham' => $sp, 'loaisanpham' => $loaisp]);
    }

    public function postSuaSp(Request $request, $id)
    {
        $sp = SanPham:: where('id_sp','=',$id)->first() ;
        return view ('admin.sanpham.sua',['sanpham' => $sp]);

        $sanpham = new SanPham;
        $sanpham-> ten_sp = $request -> ten_sp;
        $sanpham-> gia  = $request ->gia ;
        if($request->hasFile('urlanh'))
        {
            $file  = $request ->file('urlanh') ;
            $name = $file-> getClientOriginalName();
            $urlanh = str_random(3)."_".$name;
            $file ->move("source/img/products", $urlanh);
            unlink("source/img/products/".$sanpham->$url_hinh);
            $sanpham -> url_hinh = $urlanh;
        }
        
        $sanpham-> mo_ta  = $request -> mota;
        $sanpham-> so_luong_ton = $request ->soluong ;
        $sanpham-> sp_moi = $request -> new;
        $sanpham-> sp_hot = $request ->hot ;
        $sanpham-> sp_sale = $request ->sale ;
        $sanpham-> id_loai = $request -> idloai; 
        $sanpham -> save();
        return redirect('admin/sanpham/sua'.$id) -> with('thongbao', 'Sửa Thành Công!');
    }

    public function getXoaSp($id)
    {
        $sp = SanPham:: where('id_sp','=',$id) ;
        $sp ->delete();
        return redirect('admin/sanpham/danhsach') -> with('thongbao', 'Xoá Thành Công!');
    }


}