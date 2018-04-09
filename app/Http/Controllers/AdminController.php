<?php

namespace App\Http\Controllers;

use App\Slide;
use App\SanPham;
use App\LoaiSanPham;
use App\User;
use App\DonHang;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getAdmin()
    {
        $dh = DonHang:: all()->count();
        $nd = User::all()->count();
        $tn  = DonHang::all()->sum('tong_tien');
        return view ('admin.index',['dh' =>$dh,'nd'=>$nd,'tn'=>$tn]);
    }
    public function getDoanhThu()
    {
        $dh1 = DonHang:: where('ngay_dat','like','%-01-%')->sum('tong_tien');
        $dh2 = DonHang:: where('ngay_dat','like','%-02-%')->sum('tong_tien');
        $dh3 = DonHang:: where('ngay_dat','like','%-03-%')->sum('tong_tien');
        $dh4 = DonHang:: where('ngay_dat','like','%-04-%')->sum('tong_tien');
        return view ('admin.thongke.doanhthu',['dh1' => $dh1,'dh2' => $dh2,'dh3' => $dh3,'dh4' => $dh4]);
    }
}