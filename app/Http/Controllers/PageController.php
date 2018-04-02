<?php

namespace App\Http\Controllers;
use App\Slide;
use App\SanPham;
use App\LoaiSanPham;
use App\Cart;
use Session;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        // slide nam trong index
        $slide = Slide::all();
        // print_r($slide);
        // exit;

        // show new product computer
        $new_product_computer = SanPham::where('sp_moi',1)-> where('id_loai',1) -> get();
        //print_r($new_product_computer);

        // end show new product
        return view('page.trangchu',compact('slide','new_product_computer'));
    }
    // loai san pham
    public function getCategory($type) {
        // sản phẩm theo loại
        $sp_theoloai = SanPham::where('id_loai',$type) -> paginate(9);
        // tên sản phẩm theo loại
        $ten_theoloai = LoaiSanPham::where('id_loai',$type) -> get(['ten_loai']);
       // print_r($ten_theoloai);
       // $sp_count = SanPham::where('id_loai',$type) -> get();
        return view('page.loai_sanpham',compact('sp_theoloai','ten_theoloai'));
    }
    // chi tiet san pham
    public function getProductDetail($type) {
        $SanPham = SanPham:: where('id_sp',$type) ->get();
        $SanPhamCL = SanPham::where('id_loai',$SanPham[0]->id_loai)->where('id_sp','!=',$type)->get();
        $SanPhamHot = SanPham::where('sp_hot',1)->where('sp_moi',1)->get();
        return view('page.chitiet_sanpham',compact('SanPham','SanPhamCL','SanPhamHot'));
    }
    // lien he
    public function getContact() {
        return view('page.lienhe');
    }
    // cart 
    public function getAddToCart(Request $req, $id) {
        $product = SanPham::where("id_sp",$id)->first();
        print_r($product);
        // get Session
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }
    // delete
    public function getDeleteItemCart($id) {
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart -> removeItem($id);
        Session::put('cart',$cart);
        return redirect()->back();
    }
}
