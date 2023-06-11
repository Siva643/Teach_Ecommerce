<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use App\Models\Cart;
use App\Models\User;
use App\Models\Order;
use App\Models\Slider;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;



class ProductController extends Controller
{
    public function index()
    {
        $data=Product::all();
        return view('product',['products'=>$data]);
       
    }
    public function product()
    {
        return view('detail');
    }
   
    public function register()
    {
        return view('register');
    }
    public function login()
    {
        return view('login');
    }
    public function registerpost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            //'name' => 'required',
            //'email' => 'required|email|unique:users',
            //'password' => 'required|min:8|confirmed',
            'name'=>'required|regex:/^[A-Z]+$/i',
            'email'=>'required|regex:/^.+@.+$/i|email|unique:users,email',
            'password'=>['required','string',
            Password::min(8)->letters()->numbers()->mixedCase()->symbols()->uncompromised(3)
        ],
      ]);
        
        if ($validator->fails()) {
            return view('register')->with('errors', $validator->errors());
           
        }
        $user= new User;
        $user->name=$request->name;
        $user->email=$request->email;
        //$user->password=Hash::make($request->password);
        $user->password=Hash::make($request->password);
        $user->save();
        return redirect('/login');
    
    }
    public function addToCart(Request $request)
    {
       // return "hello";
       if($request->session()->has('user'))
       {
          //return "Hello";
          $cart= new Cart;
          $cart->user_id=$request->session()->get('user')['id'];
          $cart->product_id=$request->product_id;
          $cart->save();
          return redirect('/');
       }
       else{
           return redirect('login');
       }
    }
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    public function search(Request $request)
    {
       //return $request->input();
      //return  $data=Product::where('name','like', '%'.$request->input('query').'%')->get(  ); 
      $data=Product::where('name','like', '%'.$request->input('query').'%')->get();
      return view('search',['products'=>$data]); 
    }
    public function cartList()
    {
       $userId=Session::get('user')['id'];
       
        $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return view('cartlist',['products'=>$products]);
    
     
       

    }
    public function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    public function orderNow()
    {
        $userId=Session::get('user')['id'];
        $total=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->sum('products.price');

        return view('ordernow',compact('total'));
    }
    public function orderPlace(Request $request)
    { 
        $userId=Session::get('user')['id'];
        // return $allCart=Cart::where('user_id',$userId)->get();
        $allCart=Cart::where('user_id',$userId)->get();
        //return $request->input();
        foreach($allCart as $cart)
        {
            $order=new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$request->payment;
            $order->payment_status="pending";
            $order->address=$request->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
            return redirect('/');
        } 
        
    }
    public function myOrders()
    {
        $userId=Session::get('user')['id'];
   
        $orders=DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('myorders',['orders'=>$orders]);
    }
}
