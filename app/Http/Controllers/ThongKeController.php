<?php

namespace App\Http\Controllers;

use App\Slide;
use App\SanPham;
use App\LoaiSanPham;
use App\Cart;
use App\DonHang;
use Session;
use Illuminate\Http\Request;

class ThongKeController extends Controller
{
    public function getSanPham()
    {
        $sp = SanPham:: where('id_loai','=','1')->count();
        $sp2 = SanPham:: where('id_loai','=','2')->count();
        $sp3 = SanPham:: where('id_loai','=','3')->count();
        $ten = LoaiSanPham:: where('id_loai','=','1')->first();
        $ten2 = LoaiSanPham:: where('id_loai','=','2')->first();
        $ten3 = LoaiSanPham:: where('id_loai','=','3')->first();
        
        return view ('admin.thongke.danhmuc',['sanpham' => $sp,'sanpham2' => $sp2,'sanpham3' => $sp3,'ten'=>$ten,'ten2'=>$ten2,'ten3'=>$ten3]);
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