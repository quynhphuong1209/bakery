<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Slide;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\Customer;
use App\Models\Bill;
use App\Models\BillDetail;
use App\Cart;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function getIndex(){
        $slide= Slide::all();
        // dd($slide);
        // print_r($slide);
        // exit;
        //return view('page.trangchu',['slide'=>$slide]);
        $new_product = Product::where('new', 1)->paginate(4,['*'],'new_page');
        //  dd($new_product);
        $sanpham_khuyenmai = Product::where('promotion_price','<>',0)->paginate(8,['*'],'khuyenmai_page');
        return view('page.trangchu', compact('slide','new_product','sanpham_khuyenmai'));
    }

    public function getLoaiSanPham($type){
        $sanpham_theoloai = Product::where('id_type',$type)->get();
        $sanpham_khac = Product::where('id_type','<>',$type)->paginate(3);
        $loai = ProductType::all();
        $loai_sanpham = ProductType::where('id',$type)->first();
        return view('page.loai_sanpham',compact('sanpham_theoloai','sanpham_khac','loai','loai_sanpham'));
    }

    public function getChitiet(Request $req){
        $sanpham = Product::where ('id',$req->id)->first();
        $sanpham_tuongtu = Product::where ('id_type',$sanpham->id_type)->paginate(6);
        return view('page.chitiet_sanpham',compact('sanpham','sanpham_tuongtu'));
    }

    public function getLienHe(){
        return view('page.lienhe');
    }

    public function getGioithieu(){
        return view('page.gioithieu');
    }

    public function getAddtoCart(Request $req,$id){
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }

    public function getDelItemCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
            Session::put('cart',$cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getCheckout() {
        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            //dd($cart);
            return view('page.dat_hang', [
                'product_cart' => $cart->items,
                'totalPrice' => $cart->totalPrice,
                'totalQty' => $cart->totalQty
            ]);
        } else {
            // Nếu giỏ hàng trống, truyền các giá trị mặc định vào view
            return view('page.dat_hang', [
                'product_cart' => [],
                'totalPrice' => 0,
                'totalQty' => 0
            ]);
        }
    }

    public function postCheckout(Request $req) {
        try {


            // Debug dữ liệu request từ form
            //    dd($req->all()); // Thêm dòng này để hiển thị toàn bộ dữ liệu gửi lên
            // Xác thực dữ liệu
            $validatedData = $req->validate([
                'name' => 'required|string|max:255',
                'gender' => 'required|string|max:10',
                'email' => 'required|email|max:255',
                'address' => 'required|string|max:255',
                'phone' => 'required|string|max:15',
                'payment' => 'required|string|max:50',
                'notes' => 'nullable|string|max:1000'
            ]);

            // Kiểm tra giỏ hàng
            $cart = Session::get('cart');
            if (!$cart) {
                return redirect()->back()->with('error', 'Giỏ hàng trống, không thể đặt hàng.');
            }

            // Lưu khách hàng
            $customer = new Customer;
            $customer->name = $req->name;
            $customer->gender = $req->gender;
            $customer->email = $req->email;
            $customer->address = $req->address;
            $customer->phone_number = $req->phone;
            $customer->note = $req->notes;
            // Debug để xem dữ liệu của model
            // dd($customer);
            $customer->save();



            $bill = new Bill;
            $bill->id_customer = $customer->id;
            $bill->date_order = date('Y-m-d');
            $bill->total = $cart->totalPrice;
            $bill->payment = $req->payment;
            $bill->note = $req->notes;

            $bill->save();


            // Lưu chi tiết hóa đơn
            foreach ($cart->items as $key => $value) {
                if (!isset($value['qty']) || !isset($value['price'])) {
                    continue; // Bỏ qua nếu thiếu dữ liệu
                }
                $bill_detail = new BillDetail;
                $bill_detail->id_bill = $bill->id;
                $bill_detail->id_product = $key;
                $bill_detail->quantity = $value['qty'];
                $bill_detail->unit_price = ($value['price'] / $value['qty']);
                // dd($bill_detail);
                $bill_detail->save();
            }

            // Xóa session giỏ hàng
            Session::forget('cart');
            return redirect()->back()->with('thongbao', 'Đặt hàng thành công');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Có lỗi xảy ra khi đặt hàng. Vui lòng thử lại!');

        }
    }


    public function getLogin(){
        return view('page.dangnhap');
    }

    public function getSignup(){
        return view('page.dangky');
    }

    public function postSignup(Request $req){
        $this->validate($req, [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:20',
            'fullname' => 'required',
            're_password' => 'required|same:password',
            'phone' => 'nullable|regex:/^[0-9]{10,11}$/', // Example: validate phone number format
        ], [
            'email.required' => 'Vui lòng nhập email',
            'email.email' => 'Không đúng định dạng email',
            'email.unique' => 'Email đã có người sử dụng',
            'password.required' => 'Vui lòng nhập mật khẩu',
            're_password.same' => 'Mật khẩu không giống nhau',
            'password.min' => 'Mật khẩu ít nhất 6 kí tự',
            'phone.regex' => 'Số điện thoại không hợp lệ' // Example validation message
        ]);


        $users = new User();
        $users->full_name = $req->fullname;
        $users->email = $req->email;
        $users->password = Hash::make($req->password);
        $users->phone = $req->phone;
        $users->address = $req->address;
        $users->save();
        return redirect()->back()->with('thanhcong','Tạo tài khoản thành công');
    }

    public function postLogin(Request $req){
        $this->validate($req,
        [
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'
        ],
        [
            'email.required'=>'Vui lòng nhập email',
            'email.email'=>'Email không đúng định dạng',
            'password.required'=>'Vui lòng nhập mật khẩu',
            'password.min'=>'Mật khẩu ít nhất 6 kí tự',
            'password.max'=>'Mật khẩu không quá 20 kí tự'
        ]
        );
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($credentials)){
            if(auth()->user()->is_admin){
                return to_route('admin.products.index');
            }
            return redirect()->back()->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
        }
        else{
            return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
        }
    }


    public function getLogout(){
        Auth::logout();
        return redirect()->route('trang-chu');
    }


    public function getSearch(Request $req){
        $product = Product::where('name','like', '%'.$req->key.'%')
                            ->orWhere('unit_price', $req->key)
                            ->get();
        return view('page.search',compact('product'));
    }

}



