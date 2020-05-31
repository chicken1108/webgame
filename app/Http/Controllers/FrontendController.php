<?php 
namespace App\Http\Controllers;
use View;
use Auth;
use Mail;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSold;
use App\Models\Banner;
use App\Models\Order;
use App\Models\Code;
use App\Models\OrderDetail;
use App\Models\Transaction;
use App\Helper\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
/**
 * summary
 */

class FrontendController extends Controller
{
    /**
     * summary
     */
    public function __construct(){
        $cats = Category::where('status',1)->get();
        $banner = Banner::where('status',1)->orderBy('id','DESC')->get();
        $cart = new Cart;
        
        
        View::share([
            'cats' => $cats,
            'banners' => $banner,
            'cart'=>$cart,
        ]);
    }
    public function index()
    {
        $code = Code::all();
        $products = Product::where('status',1)->orderBy('id','ASC')->paginate(12);
        return view('frontend.index',[
            'products'=>$products,
            'code'=>$code
        ]);
    }
    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
    public function gamebanquyen()
    {
        return view('frontend.gamebanquyen');
    }
    public function dieukhoandichvu()
    {
        return view('frontend.dieukhoandichvu');
    }

    public function transactionHistory()
    {
        $data['transactions'] = Transaction::where('user', Auth::user()->id)->get();
        $data['product_bought'] = ProductSold::where('user_id', Auth::user()->id)->get();
        return view('frontend.transaction_history', $data);
    }
    public function category($cat_id)
    {
        $products = Product::where(['status'=>1,'cat_id'=>$cat_id])->orderBy('id','DESC')->paginate(6);
        $category = Category::find($cat_id);
        $code = Code::all();
        return view('frontend.category',[
            'products'=> $products,
            'category'=> $category,
            'code'=>$code,
        ]);
    } 
    /* Chi tiet san pham*/

    public function product($slug)
    {

        $product = Product::where('slug',$slug)->first();
        $otherProduct = Product::where('cat_id',$product->cat_id)->where('id','<>',$product->id)->limit(3)->orderBy('cat_id','DESC')->get();
        $category = Category::find($product->cat_id);
        $code = Code::all();
        return view('frontend.product',[
            'product'=>$product,
            'otherProduct'=> $otherProduct,
            'category'=> $category,
            'code'=>$code,
        ]);
    } 
   
    public function add_cart($id, Cart $cart)
    {

        $product = Product::find($id)->toArray();
        /*Luu thong tin san pham vao session*/
        $cart->add($product);
        return redirect()->route('view-cart')->with('success','Them vao gio hang thanh cong');
    }

    public function ajax_add_cart($id, Cart $cart)
    {
        $product = Product::find($id)->toArray();
        /*Luu thong tin san pham vao session*/
        $cart->add($product);
    }
    public function view_cart(Cart $cart )
    {
        return view('frontend.view-cart',[
            'cart' => $cart
        ]);
    }

    public function remove_item($id, Cart $cart){
        $cart->remove_item($id);

        return redirect()->route('view-cart')->with('success','Xoa san pham khoi gio hang thanh cong');
    }
    //Xoa toan bo gio hang
    public function clear_cart(Cart $cart){
        $cart->clear_cart();

        return redirect()->route('view-cart')->with('success','Xoa san pham khoi gio hang thanh cong');
    }
    public function update_cart(Cart $cart, Request $request)
    {
     /* echo $_GET['id'];*/
     /*echo $request->quantity;*/

     if ($request->id && $request->quantity) {
            //Cap nhat so luong san pham
         $cart->update_item($request->id,$request->quantity);
         return redirect()->route('view-cart')->with('success','Cập nhật thành công');
     }
 }

 public function checkout(Cart $cart){
    return view('frontend.checkout',['cart'=>$cart]);
}

public function post_checkout(Cart $cart,Request $request){
    // create new order
    $productsold =  new ProductSold;
    $productsold->user_id = Auth::user()->id;
    foreach ($cart->items as $item) {
       $name[] = $item['name'];
       $quantity[] = $item['quantity'];
       $price[] = $item['price_sale'] ? $item['price']:0;
       $code[] = Code::where('product_id', $item['id'])->select('code')->get()->take($item['quantity'])->toArray();
    }
    $productsold->product = json_encode($name);
    $productsold->quantity = json_encode($quantity);
    $productsold->total = $cart->tongtien();
    $productsold->code = json_encode($code);
    $productsold->save();

    // minus money
    $money = User::where('id', Auth::user()->id)->get();
    $moneys = $money[0]['money'] - $cart->tongtien();
    User::where('id', Auth::user()->id)
          ->update(['money' => $moneys]);

    //send mail
    $email = auth()->user()->email;
    $data['content'] = $cart->items;
    $data['total'] = $cart->tongtien();
    $data['code'] = $code;
    Mail::send('frontend.sendmail',$data, function($message) use ($email){
        $message->from('VZshop@gmail.com','VZshop');
        $message->to($email, $email);
        $message->cc('VZshop@gmail.com','VZshop');
        $message->subject('Mua hành thành công!');
    });

    // delete code in Table codes
    foreach ($code as $value) {
        Code::where('code',$value[0]['code'])->delete();
    }

    $cart->clear_cart();

    return redirect()->route('success');

}

public function success()
{
    return view('frontend.success');
}

public function getPay($orderId){

        $data['order'] = Order::find($orderId);
        $data['order_detail'] = OrderDetail::where('order_id', $orderId)->get();
        return view('pay.index', $data);
    }

public function randomStr($n) { 
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $randomString = ''; 

        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 

        return $randomString; 
    } 

public function createPayment(Request $request){
        require_once("./public/vnpay_php/config.php");

        $vnp_TxnRef = strtoupper($this->randomStr(10)); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = 'Nạp tiền';
        $vnp_OrderType = 'Nạp tiền vào tài khoản BKAPSHOP';
        $vnp_Amount = $_POST['amount'] * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
           // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', $vnp_HashSecret . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
            , 'message' => 'success'
            , 'data' => $vnp_Url);
        return redirect($vnp_Url);
    }

    public function getComplete()
    {
        return view('pages.complete');
    }
   
    public function getResultPay()
    {
        require_once("./public/vnpay_php/config.php");
        $inputData = array();
        $returnData = array();
        $data = $_REQUEST;
        foreach ($data as $key => $value) {
            if (substr($key, 0, 4) == "vnp_") {
                $inputData[$key] = $value;
            }
        }
        if($inputData['vnp_ResponseCode']==00){
            $userid = Auth::user()->id;
            $user = User::find($userid);
            $money = doubleval($user->money + $_GET['vnp_Amount']/100);
            User::where('id', $userid)
          ->update(['money' => $money]);

            $transaction = new Transaction;
            $transaction->transaction_code = $_GET['vnp_TxnRef'];
            $transaction->amount = $_GET['vnp_Amount']/100;
            $transaction->user = $userid;
            $transaction->condition = 'Thanh toán qua vnpay';
            $transaction->desc = 'Nạp tiền vào tài khoản BKAPSHOP';
            $transaction->save();
            return view('pay.vnpay_return');
        }
    }

public function login()
{
   return view('frontend.login');   
}


public function post_login(Request $request){
 $this->validate($request,[
    'email' =>'required|email',
    'password' =>'required',
]);

 if (Auth::attempt($request->only('email','password'),$request->has('remember'))) {
    return redirect()->route('home')->with('success','Đăng nhập thành công');
}else{
    return redirect()->back()->with('error','Tài khoản hoạc mat khau không dung');
}
}

public function logout()
{
    Auth::logout();
    return redirect()->route('home');
}

public function cus_order()
{
   return view('frontend.cus_order',[
                'od' => Order::orderBy('id','DESC')->paginate(15)
            ]);
}
public function order_detail($id)
{
     $od = Order::find($id);
         return view('frontend.order_detail',['od'=>$od]);
}


public function registration()
{
    return view('frontend.registration');  
}

public function payment()
{
    return view('frontend.payment');
}

public function userInfo()
{
    return view('frontend.user_info');
}

 public function changePassword(Request $request)
    {
        $request->validate(
            [
                'oldpassword'=>'required|min:6|max:22',
                'newpassword'=>'required|min:6|max:22',
                're-newpassword'=>'same:newpassword|required'
            ],

            [
                'oldpassword.required'=>'Bạn chưa nhập mật khẩu cũ',
                'newpassword.required'=>'Bạn chưa nhập mật khẩu mới',
                're-newpassword.required'=>'Bạn chưa nhập lại mật khẩu cũ',
                'oldpassword.min'=>'Mật khẩu phải có tối thiếu 6 ký tự',
                'oldpassword.max'=>'Mật khẩu không vượt qua 22 ký tự',
                'newpassword.min'=>'Mật khẩu phải có tối thiếu 6 ký tự',
                'newpassword.max'=>'Mật khẩu không vượt qua 22 ký tự',
                're-newpassword.same'=>'Mật khẩu nhập lại không khớp',
            ]);

        $hashedPassword = User::find(auth()->user()->id)->password;
        if(Hash::check($request->oldpassword, $hashedPassword)) {
            $password = bcrypt($request->newpassword);
              User::where('id', Auth::user()->id)
          ->update(['password' => $password]);
            return back()->with('success','Thay đổi mật khẩu thành công!');
        }else {
            return back()->with('error','Mật khẩu không đúng!');
        }
    }

    public function updateInfo(Request $request)
    {
        $request->validate(
            [
                'address'=>'required',
                'name'=>'required',
            ],
            [
                'address.required'=>'Bạn chưa nhập địa chỉ',
                'name.required'=>'Bạn chưa nhập tên',
            ]);
        User::where('id', Auth::user()->id)
          ->update(['address' => $request->address, 'phone'=>$request->phone, 'full_name'=>$request->name]);
        return back();
    }



public function save(Request $request)
{
    $this->validate(
        $request,
        [
            'username' => 'required|min:3|max:20|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ],
        [
            'username.required' => 'Tên tài khoản không được để rông',
            'confirm_password.same' => 'Nhập lại mật khẩu không đúng',
            'username.unique' => 'Tên tài khoản <b>'.$request->username.'</b> đã tồn tại trong data',
        ]
    );
    User::create([
        'username' => $request->username,
        'email' => $request->email,
        'password' => bcrypt($request->password)
    ]);
        // SESSION['success'] = 'Tạo mói tài khoản thành công';
    return redirect()->route('home')->with('success','Tạo mói tài khoản thành công');
}
public function search(Request $request)
{
    $key = $request->key;
    $product = Product::where('name','like','%'.$key.'%')->paginate(9);
    return view('frontend.search',['product'=>$product]);

}

public function autocompleteSearch(Request $request)    
{
    if($request['query']){
        $query = $request['query'];
        $result = Product::where('name', 'LIKE', '%'.$query.'%')->get();

        $output = '<ul class="dropdown-menu" style="display:block; possition:relative;">';
        foreach($result as $row){
            $output .= '<li id="product_name"><a href="#"> '.$row->name.'</a></li>';
        }
        $output .= '</ul>';

        echo $output;
    }
}


}




?>