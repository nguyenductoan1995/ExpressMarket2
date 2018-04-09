<?php

namespace App\Http\Controllers;
use App\Slide;
use App\SanPham;
use App\LoaiSanPham;
use App\Cart;
use App\DonHang;
use App\ChiTietDonHang;
use Session;
//use App\KhachHang;
use Illuminate\Http\Request;
use App\User;
use Hash ;
use Auth;
use Carbon;
use Datetime;
class PageController extends Controller
{
    public function getIndex() {
        // slide nam trong index
        $slide = Slide::all();
        // print_r($slide);
        // exit;

        // show new product computer
        $case1 = SanPham::where('sp_moi',1)-> where('id_loai',1) -> get();
        // Tiêu đề ngoài trang chủ + chỉnh lai query phù hợp 
        $case2 = SanPham::where('sp_moi',1)-> where('id_loai',2) -> get();
        // Tiêu đề ngoài trang chủ + chỉnh lai query phù hợp 
        $case3 = SanPham::where('sp_moi',1)-> where('id_loai',3) -> get();
        
        //print_r($new_product_computer);
        //Lấy loại sản phẩm 
        $search_type =LoaiSanPham::all();
        // end show new product
        return view('page.trangchu',compact('slide','case1','case2','case3','search_type'));
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
        $search_type =LoaiSanPham::all();
        return view('page.lienhe',compact('search_type'));
    }
    // cart 
    public function getAddToCart(Request $req, $id) {
        $product = SanPham::where("id_sp",$id)->first();
       // print_r($product);
        // get Session
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);
        $req->session()->put('cart',$cart);
       // return redirect()->back();
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
    //Blog
    public function Blog(){
        $search_type =LoaiSanPham::all();
        return view('page.blog',compact('search_type'));
    }
    //SignUp
    public function createAccount(){                
        $search_type =LoaiSanPham::all();

        return view('page.create_an_account',compact('search_type'));
    }
    //signUp save
    public function saveAccount(Request $req)
    {
        $this ->validate($req,
            [
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|max:20',
                'fullname' => 'required',
                're_password' => 'required|same:password',
                'phone'=>'required',
                // 'address'=>'required',
                // 'city'=>'required',
                // 'country'=>'required'
            ]
            ,[
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Nhập sai định dạng email',
                'email.unique'=>'email đã được đăng kí',
                'password.required'=>'vui lòng nhập mật khẩu',
                'password.min'=>'password phải có ít nhất 6 kí tự',
                'password.max'=>'password có nhiều nhất 20 kí tự ',
                'fullmame.required'=>'vui lòng nhập tên người dùng',
                're_password.required'=>'vui lòng nhập lại mật khẩu',
                're_password.same'=>'xác nhận lại mật khẩu không chính xác',
                'phone.required'=>'vui lòng nhập số điện thoại',
                // 'address'=>'vui lòng nhập địa chỉ',
                // 'city'=>'vui lòng nhập thành phố',
                // 'address'=>'vui lòng nhập quốc gia'
            ]);

            $user = new User();
            $user -> full_name = $req -> fullname;
            $user -> image ="";
            $user -> password = Hash::make($req -> password);
            $user -> email = $req -> email;
            $user -> status = 0;
            $user -> role = 0;
            $user -> address = $req -> address.','.$req -> city.','.$req->country ;
            $user -> phone = $req -> phone; 
            $user ->save();
            return redirect()->back()->with('thanhcong','Đã Tạo Tài Khoản Thành Công'); 
    }
    // Login
     public function postLogin(Request $req)
    { 
        $this->validate($req,
        [
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'
        ],
        [
            'email.required'=>'vui lòng nhập email',
            'email.email'=>"sai định dạng email",
            'password.required'=>"vui lòng nhập mật khẩu"
        ]);
        $credentials =array("email"=>$req->email,"password"=>$req->password);
        // $user = new \App\KhachHang;
        if(Auth::attempt($credentials)){
          //  return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
            return redirect()->route('trang-chu');
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bại']);
        } 
    }
    public function getLogin()
    {
        $search_type =LoaiSanPham::all();
        return view('page.login',compact('search_type'));
    }
    //logout
    public function postLogout()
    {
        Auth::logout();
        return redirect()->route('trang-chu');
    }
    //cart
    public function cart()
    {
        $search_type =LoaiSanPham::all();
        if(Session('cart')){
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
          //  $view->with(['cart'=> Session::get('cart'), 'product_cart' => $cart -> items, 'totalPrice'=> $cart->totalPrice, 'totalQty' => $cart->totalQty]);
            //$cart = Session::get('cart');
            $product_cart = $cart -> items;
            $totalPrice = $cart->totalPrice;
            $totalQty = $cart->totalQty;
          return view('page.cart',compact('search_type','product_cart','totalPrice','totalQty'));
        }
        return view('page.cart',compact('search_type'));
    }
    // Đặt hàng
    public function postCheckout(Request $req) {
        // region get cart
        $cart = Session::get('cart');
       // dd($cart);
        $product_cart = $cart -> items;
        $totalPrice = $cart->totalPrice;
        $totalQty = $cart->totalQty;
        // end region get cart
        $donhang = new DonHang;
        // get id customer :  $donhang->id
        $donhang->id = 1;
        $donhang->ngay_dat = Carbon\Carbon::now();
      //  $donhang->ngay_dat = new Datetime();
        $donhang->tong_tien =  $totalPrice;
        $donhang->status = 1;
        $donhang->sdt = '0962525359';
        $donhang->address = "457A";
        $donhang->save();

        // detail order
        foreach ($cart->items as $key => $value) {
            $cidh = new ChiTietDonHang;
            $cidh->id_dh = $donhang->id;
            $cidh->id_sp = $key;
            $cidh->so_luong = $value['qty'];
            $cidh->thanh_tien = $value['price'];
            $cidh->save();
        }
        Session::forget('cart');
        return redirect()->back();
       
    }
}
