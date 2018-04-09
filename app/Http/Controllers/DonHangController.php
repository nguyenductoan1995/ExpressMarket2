<?php

namespace App\Http\Controllers;

use App\User;
use App\SanPham;
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
        $ctdh = ChiTietDonHang::where('id_dh','=',$id)->get();
        //dd($ctdh);
        return view ('admin.donhang.sua',['ctdh'=>$ctdh]);
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