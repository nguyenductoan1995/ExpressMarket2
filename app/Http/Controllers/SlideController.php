<?php

namespace App\Http\Controllers;

use App\slide;
use App\SanPham;
use App\Cart;
use Session;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function getDanhSach()
    {
        $slide = Slide::all();
        return view ('admin.slide.danhsach',['sld' => $slide]);
    }

    public function getThemSlide()
    {
        $slide = Slide::all();
        return view ('admin.slide.them',['sld' => $slide]);
    }

    public function getXoaSlide($id)
    {
        $slide = Slide:: where('id_slide','=',$id) ;
        $slide ->delete();
        return redirect('admin/slide/danhsach') -> with('thongbao', 'Xoá Thành Công!');
    }

    public function getSuaSlide($id)
    {
        
        $slide = Slide:: where('id_slide','=',$id) ->first();
        return view ('admin.slide.sua',['sld' => $slide]);
    }

    public function postSuaSlide(Request $request, $id)
    {
        $slide = Slide:: where('id_slide','=',$id) ->first();

        $slide-> link = $request -> link;
        if($request->hasFile('image'))
        {
            $file  = $request ->file('image');
            $name = $file-> getClientOriginalName();
            $image = str_random(3)."_".$name;
            $file ->move("source/img/products", $image);
            unlink("source/img/products/".$slide->image);
            $slide -> image = $image;
            dd($slide -> image);
            exit();
        };
        $slide -> save();
        return redirect('admin/slide/sua/'.$id) -> with('thongbao', 'Sửa Thành Công!');
    }

    public function postThemSlide(Request $request)
    {
        
        $sld = new Slide;
        $sld-> link = $request ->link;
        if($request->hasFile('image'))
        {
            $file  = $request ->file('image') ;
            $name = $file-> getClientOriginalName();
            $image = str_random(3)."_".$name;
            $file ->move("source/img/products", $image);
            $sld -> image = $image;
        }
        else    
        $sld -> image =" ";
        $sld -> save();
        return redirect('admin/slide/them') -> with('thongbao', 'Thêm Thành Công!');
    }
}