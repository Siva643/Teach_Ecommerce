@extends('master')
@section('content')
<div class="container">
    <h3 class="mt-5 productdetail fw-bold">Product detail</h3>
</div>
<div class="container">
    <div class="row m-5 p-5 bg-white">
       <div class="col-sm-6">
       <img class="detail-img" src="https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg">
       </div>
       <div class="col-sm-6 col-2">
          <a href="/">Go back</a>
          <h3 class="mt-5">Mobile<h2>
          <h3>Price : 300$/h2>
          <h4>Details :<h2>
          <h4>category<h2>
    <button class="btn btn-warning">Add to card</button>
          <button class="btn btn-success">Buy Now</button>
          
    </div>
    </div>
</div>


@endsection