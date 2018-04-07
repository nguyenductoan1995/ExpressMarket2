<?php

namespace App\Http\Controllers;

use App\Slide;
use App\SanPham;
use App\LoaiSanPham;
use App\Cart;
use Session;
use Illuminate\Http\Request;

class LoaispController extends Controller
{
    public function getDanhSach()
    {
        $loaisp = LoaiSanPham::all();
        return view ('admin.loaisanpham.danhsach',['loaisanpham' => $loaisp]);
    }

    public function getThemLoai()
    {
        $loaisp = LoaiSanPham::all();
        return view ('admin.loaisanpham.them',['loaisanpham' => $loaisp]);
    }

    public function getXoaLoai($id)
    {
        $loaisp = LoaiSanPham:: where('id_loai','=',$id) ;
        $loaisp ->delete();
        return redirect('admin/loaisanpham/danhsach') -> with('thongbao', 'Xoá Thành Công!');
    }

    public function getSuaLoai($id)
    {
        
        $loaisp = LoaiSanPham:: where('id_loai','=',$id) ->first();
        return view ('admin.loaisanpham.sua',['loaisanpham' => $loaisp]);
    }

    public function postSuaLoai(Request $request, $id)
    {
        $loaisp = LoaiSanPham:: where('id_loai',$id) ->first();
        $loaisp->ten_loai = $request->tenloai;
        $loaisp->save();
        return redirect('admin/loaisanpham/sua/'.$id) -> with('thongbao', 'Sửa Thành Công!');
    }

    public function postThemLoai(Request $request)
    {
        $this -> validate($request,
        [
            'ten_loai' => 'required|min:3| max:100'
        ],
        [
            'ten_loai.required' => 'Bạn chưa nhập tên loại',
            'ten_loai.min' => 'Tên loại sản phẩm có độ dài từ 3 tới 100 ký tự!',
            'ten_loai.max' => 'Tên loại sản phẩm có độ dài từ 3 tới 100 ký tự!'
        ]);
        $loaisanpham = new LoaiSanPham;
        $loaisanpham-> ten_loai = $request -> ten_loai;
        $loaisanpham -> save();
        return redirect('admin/loaisanpham/them') -> with('thongbao', 'Thêm Thành Công!');


    }
}