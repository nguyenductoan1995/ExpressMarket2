<?php

namespace App\Http\Controllers;

use App\User;
use App\SanPham;
use App\LoaiSanPham;
use App\Cart;
use App\DonHang;
use App\ChiTietDonHang;
use Session;
use Illuminate\Http\Request;

class DonHangController extends Controller
{
    public function getDanhSach()
    {
        $donhang = DonHang::all();
        $ctdh = ChiTietDonHang::all();
        
        return view ('admin.donhang.danhsach',['donhang' => $donhang,'ctdh' => $ctdh]);
    }

    



    
    public function getChiTietDH($id)
    {
        $ctdh = ChiTietDonHang:: join('sanpham','sanpham.id_sp','=','chitietdonhang.id_sp')->where('id_dh',$id)->get();
        //   $ct2 = table('ChiTietDonHang')->leftJoin('SanPham', 'chitietdonhang.id_sp', '=', 'sanpham.id_sp')->get();
         // $ct3 = SanPham::join('$ct3', 'sanpham.id_sp', '=', 'ct3.id_sp')->get();
       //   print_r($ct3);
           $search_type =LoaiSanPham::all();
           return view('admin.donhang.sua',compact('search_type','ct'));
    }

    public function getSuaDH($id)
    {
        $donhang = DonHang:: where('id_dh','=',$id) ->first();
        //dd($ctdh);
        return view ('admin.donhang.duyet',['donhang'=>$donhang]);
    }

    public function postSuaDH(Request $request, $id)
    {
        $donhang = DonHang:: where('id_dh','=',$id) ->first();
        $donhang -> status = $request -> status;
        $donhang ->save();
        return redirect('admin/donhang/duyet/'.$id) -> with('thongbao', 'Đã Duyệt Đơn Hàng Thành Công!');
    }

}