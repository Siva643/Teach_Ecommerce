<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
     <style>
          .cart-list-devider
          {
            border-bottom:1px solid gray;
            margin-bottom:20px;
          }
      </style>
</head>
<body>
  {{View::make('header')}}

<div class="container">
  <h4 class="mt-5">Result for Products</h4>
  
@foreach($products as $item)
<div class="row searched-item cart-list-devider">

<div class="col-sm-4 col-md-4">
<a href="detail/{{$item->id}}">
<img class="trending-image" style="width:250px;height:250px;object-fit;contain;" src="{{ asset('images/'.$item->image) }}">
</a>
</div>

<div class="col-sm-4 col-md-4 mt-5">
      <h4>{{$item->description}}</h4>
      <h5 class="mt-3">{{$item->name}}</h5>
      <h6 class="text-success">{{$item->price}} INR</h6>

</div>

<div class="col-sm-4 col-md-4 mt-5">
     <a href="removecart/{{$item->cart_id}}"  class="btn btn-warning">Remove to Cart</a>
</div>

</div>


@endforeach
<a class="btn btn-success mt-3 mb-5" href="ordernow">Order now</a>
</div>

        {{View::make('footer')}}
</body>
</html>