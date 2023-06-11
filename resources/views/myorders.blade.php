<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   
   </head>
<body>

   {{View::make('header')}}
   



<h1 class="text-success text-center mt-3">My orders</h1>
<div class="container">
@foreach($orders as $item)
<div class="row searched-item cart-list-devider container mt-5">

  <div class="col-sm-3">
<a href="detail/{{$item->id}}">
<img class="trending-image" src="{{ asset('images/'.$item->image) }}">

</a>

</div>
<div class="col-sm-6 fw-bold">
      <h3 class="text-muted mt-1">{{$item->name}}</h3>
      Delivery address : <span class="text-muted">{{$item->address}}</span><br>
      Delivery status : <span class="text-muted">{{$item->status}}</span><br>


</div>
<hr class="mt-2">
</div>

@endforeach
</div>

<!--<a class="btn btn-success" href="ordernow">Order Now</a><br><br>-->




  
 </body>
 <style>
 
  .trending-image
  {
    height:150px;
    width:250px;
    object-fit:contain;
    position:relative;
    bottom:14px;
  
  }
 
  
  </style>
</html>
