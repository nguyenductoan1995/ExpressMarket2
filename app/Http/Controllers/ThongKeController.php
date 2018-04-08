<?php

namespace App\Http\Controllers;

use App\Slide;
use App\SanPham;
use App\LoaiSanPham;
use App\Cart;
use Session;
use Illuminate\Http\Request;

class ThongKeController extends Controller
{
    public function getSanPham()
    {
        $sp = SanPham::all();
        return view ('admin.thongke.danhmuc',['sanpham' => $sp]);
    }
}