<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Session;
use Redirect;



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
}
