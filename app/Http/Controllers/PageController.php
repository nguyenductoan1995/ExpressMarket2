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
        //Lấy loại sản phẩm 
        $search_type =LoaiSanPham::all();
        // end show new product
        return view('page.trangchu',compact('slide','new_product_computer','search_type'));
    }
    // loai san pham
    public function getCategory($type) {
        // sản phẩm theo loại
        $sp_theoloai = SanPham::where('id_loai',$type) -> paginate(9);
        // tên sản phẩm theo loại
        $ten_theoloai = LoaiSanPham::where('id_loai',$type) -> get(['ten_loai']);
       // print_r($ten_theoloai);
       // $sp_count = SanPham::where('id_loai',$type) -> get();
        // loại sản phẩm 
        $search_type =LoaiSanPham::all();

        return view('page.loai_sanpham',compact('sp_theoloai','ten_theoloai','search_type'));
    }
    // chi tiet san pham
    public function getProductDetail($type) {
        // lấy loại sản phẩm cho thanh search
        $search_type = LoaiSanPham::all();
        // lấy sản phẩm có id dc click
        $SanPham = SanPham:: where('id_sp',$type) ->get();
        // lấy thông tin loại sản phẩm dc click
        $typeProduct = LoaiSanPham::where('id_loai',$SanPham[0]->id_loai)->get();
        // lấy các sản phẩm cùng loại
        $SanPhamCL = SanPham::where('id_loai',$SanPham[0]->id_loai)->where('id_sp','!=',$type)->get();
        // các sản phẩm hot
        $SanPhamHot = SanPham::where('sp_hot',1)->where('sp_moi',1)->get();
        return view('page.chitiet_sanpham',compact('SanPham','SanPhamCL','SanPhamHot','search_type','typeProduct'));
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
    //tim kiem
    public function getProduct(Request $req) {
        // sản phẩm theo loại
        $sp_theoloai = LoaiSanPham::where('id_loai',$req->chosetype) -> get();
        // Sản phẩm cùng loại và trùng tên 
        $SanPhamTim = SanPham::where('id_loai',$sp_theoloai[0]->id_loai)->where('ten_sp', 'LIKE', '%'.$req->key.'%')->orderby('ten_sp')->paginate(10);
        // sản phẩm khác loại cùng tên
        $SanPhamTim2 = SanPham::where('id_loai','!=',$SanPhamTim[0]->id_loai)->where('ten_sp', 'LIKE', '%'.$req->key.'%')->orderby('ten_sp')->get();
        // các loại sản phẩm cho thanh search
        $search_type =LoaiSanPham::all();
        return view('page.search_product',compact('sp_theoloai','SanPhamTim','SanPhamTim2','search_type'));
    }
}
