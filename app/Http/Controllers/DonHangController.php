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

    



    
    public function getSuaDH($id)
    {
        
        $donhang = DonHang:: where('id','=',$id) ->first();
        return view ('admin.donhang.sua',['donhang' => $donhang]);
    }

    public function postSuaDH(Request $request, $id)
    {
        $donhang = DonHang:: where('id_dh','=',$id) ->first();
       
        $donhang -> full_name=$request -> ten;
        $donhang -> email = $request -> email;
        $donhang -> status = $request -> status;
        $donhang -> role = $request -> role;
        $donhang ->save();
        return redirect('admin/user/suatt/'.$id) -> with('thongbao', 'Sửa Thành Công!');
    }

}