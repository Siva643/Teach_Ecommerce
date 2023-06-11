@extends('master')
@section('content')

<div class="container">
    <h3 class="mt-5 productdetail fw-bold">Product detail</h3>
</div>
<div class="container bg-white">
    <div class="row m-5 p-5">
       <div class="col-sm-6 col-md-6">
       <img class="detail-img" style="" src="{{ asset('images/'.$product->image) }}">
       </div>
       <div class="col-sm-6 col-md-6 col-2">
          <a href="/">Go back</a>
          <h4 class="mt-5 fw-bold">{{$product->name}}<h4>
          <h6 class="text-success fw-bold">Price: {{$product->price}} INR</h6>
         
          <h6>Description: {{$product->description}}<h6>
          <div class="mt-5">
           <form action="/add_to_cart" method="post">
            @csrf
            <input type="hidden" name="product_id" value={{$product->id}}>
            <button class="btn" style="background-color:blue;color:white">Add to card</button>
          <a href="ordernow" class="btn btn-success" style="color:white;">Buy Now</a>
           
        </form>

          </div>
    </div>
    </div>
</div>


@endsection