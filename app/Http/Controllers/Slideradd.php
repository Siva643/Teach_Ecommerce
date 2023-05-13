<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class Slideradd extends Controller
{
    public function index()
    {
        return view('Slideradd.createslider');
    }
    public function create(Request $request)
    {
        $file=time() . '.' .request()->image->getClientOriginalExtension();
        request()->image->move(public_path('image'), $file);
        $product=new Slider;
      
        $product->image=$file;
        $product->save();
        return redirect('readslider');

    }
    public function read()
    {
        $reads=Slider::all();
        return view('Slideradd.readslider',compact('reads'));
    }
    public function edit(Request $request,$id)
    {
          $edits=Slider::find($id);
          return view('Slideradd.editslider',compact('edits'));
    }
    public function update(Request $request,$id)
    {
        $file=time() . '.' .request()->image->getClientOriginalExtension();
        request()->image->move(public_path('image'), $file);
        $product=Slider::find($id);
      
        $product->image=$file;
        $product->save();
        return redirect('readslider');
    }
    public function delete($id)
    {
        $delete=Slider::find($id);
        $delete->delete();
        return redirect('readslider');
    }
}
