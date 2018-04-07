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
        return view ('admin.slide.sua',['sld' => $slide]);

        $slide = new slide;
        $slide-> link = $request -> link;
        if($request->hasFile('image'))
        {
            $file  = $request ->file('image');
            $name = $file-> getClientOriginalName();
            $imageh = str_random(3)."_".$name;
            $file ->move("source/img/products", $image);
            unlink("source/img/products/".$sanpham->$image);
            $slide -> image = $image;
        };
        $slide -> save();
        return redirect('admin/slide/sua'.$id) -> with('thongbao', 'Sửa Thành Công!');
    }

    public function postThemSlide(Request $request)
    {
        $this -> validate($request,
        [
            'ten_slide' => 'required|min:3| max:100'
        ],
        [
            'ten_slide.required' => 'Bạn chưa nhập tên loại',
            'ten_slide.min' => 'Tên loại sản phẩm có độ dài từ 3 tới 100 ký tự!',
            'ten_slide.max' => 'Tên loại sản phẩm có độ dài từ 3 tới 100 ký tự!'
        ]);
        $sld = new slide;
        $sld-> link = $request -> link;
        if($request->hasFile('link'))
        {
            $file  = $request ->file('link') ;
            $name = $file-> getClientOriginalName();
            $link = str_random(3)."_".$name;
            $file ->move("source/img/products", $link);
            $sld -> link = $link;
        }
        else    
        $sld -> link =" ";
        $sld -> save();
        return redirect('admin/slide/them') -> with('thongbao', 'Thêm Thành Công!');


    }
}