<?php

namespace App\Http\Controllers;

use App\User;
use App\SanPham;
use App\Cart;
use Session;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getDanhSach()
    {
        $User = User::all();
        return view ('admin.user.danhsach',['User' => $User]);
    }

    public function getThemUser()
    {
        $User = User::all();
        return view ('admin.user.them',['User' => $User]);
    }

    public function getXoaUser($id)
    {
        $User = User:: where('id_User','=',$id) ;
        $User ->delete();
        return redirect('admin/user/danhsach') -> with('thongbao', 'Xoá Thành Công!');
    }

    public function getSuaUser($id)
    {
        
        $User = User:: where('id_User','=',$id) ->first();
        return view ('admin.user.sua',['User' => $User]);
    }

    public function postSuaUser(Request $request, $id)
    {
        $User = User:: where('id_User','=',$id) ->first();
        return view ('admin.user.sua',['User' => $User]);

        $User = new User;
        $User-> ten_User = $request -> tenUser;
        $User -> save();
        return redirect('admin/user/sua'.$id) -> with('thongbao', 'Sửa Thành Công!');
    }

    public function postThemUser(Request $request)
    {
        $this -> validate($request,
        [
            'ten_User' => 'required|min:3| max:100'
        ],
        [
            'ten_User.required' => 'Bạn chưa nhập tên loại',
            'ten_User.min' => 'Tên loại sản phẩm có độ dài từ 3 tới 100 ký tự!',
            'ten_User.max' => 'Tên loại sản phẩm có độ dài từ 3 tới 100 ký tự!'
        ]);
        $User = new User;
        $User-> link = $request -> link;
        if($request->hasFile('image'))
        {
            $file  = $request ->file('image');
            $name = $file-> getClientOriginalName();
            $imageh = str_random(3)."_".$name;
            $file ->move("source/img/products", $image);
            $User -> image = $image;
        };
        $User -> save();
        return redirect('admin/user/them') -> with('thongbao', 'Thêm Thành Công!');


    }
}