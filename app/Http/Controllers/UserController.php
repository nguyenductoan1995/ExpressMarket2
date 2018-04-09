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
        $User = User:: where('id','=',$id) ;
        $User ->delete();
        return redirect('admin/user/danhsach') -> with('thongbao', 'Xoá Thành Công!');
    }

    public function getSuaUser($id)
    {
        
        $user = User:: where('id','=',$id) ->first();
        return view ('admin.user.sua',['user' => $user]);
    }

    public function postSuaUser(Request $request, $id)
    {
        $user = User:: where('id','=',$id) ->first();
        $user -> status = $request -> status;
        $user -> role = $request -> role;
        $user ->save();
        return redirect('admin/user/sua/'.$id) -> with('thongbao', 'Sửa Thành Công!');
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
    public function getSuattUser($id)
    {
        
        $user = User:: where('id','=',$id) ->first();
        return view ('admin.user.suatt',['user' => $user]);
    }

    public function postSuattUser(Request $request, $id)
    {
        $user = User:: where('id','=',$id) ->first();
        if($request->hasFile('urlanh'))
        {
            $file  = $request ->file('urlanh') ;
            $name = $file-> getClientOriginalName();
            $urlanh = str_random(3)."_".$name;
            $file ->move("source/img/users/", $urlanh);
            $user-> image = $urlanh;
        }
        else    
        $user -> image = $user -> image;
        $user -> full_name=$request -> ten;
        $user -> email = $request -> email;
        $user -> status = $request -> status;
        $user -> role = $request -> role;
        $user ->save();
        return redirect('admin/user/suatt/'.$id) -> with('thongbao', 'Sửa Thành Công!');
    }

}