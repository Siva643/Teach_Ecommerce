<?php

namespace App\Http\Controllers;

use Session;
use Redirect;
use App\Models\User;
use App\Models\Slider;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
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
        ->join('products','cart.product_id','=','product.id')
        ->where('cart.user_id',$userId)
        ->select('products.*')
        ->get();
        return view('cartlist',['products'=>$products]);
    }

 
}
