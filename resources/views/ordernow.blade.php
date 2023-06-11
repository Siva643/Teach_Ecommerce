<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>
    .border{
     border:1px solid gray;
     padding:60px;
   }
  
   </style>
</head>
<body>
  {{View::make('header')}}
<div class="container m-5 border">
   <table class="table">
      <tr>
        <td class="fw-bold">Amount</td>
        <td>$ {{$total}}</td>
      </tr>
      <tr>
        <td class="fw-bold">Tax</td>
        <td>$ 0</td>
      </tr>
      <tr>
        <td class="fw-bold">Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td class="fw-bold">Total Amount</td>
        <td>$ {{$total+10}}</td>
      </tr>
      </table>
    <form action="/orderplace" method="post">
        @csrf
      
      <div class="form-group">
        <input style="height:65px;" name="address" type="text" placeholder="enter your address" class="form-control">
      </div>
   
      <div class="form-group">
          <label for="" class="mt-4 fw-bold">Payment Method</label><br><hr>
          <!--<input class="mt-4" value ="cash" type="radio" name="payment"><span class="fw-bold"> Online payment</span><br>
          <input class="mt-4" value ="cash" type="radio" name="payment"><span class="fw-bold"> EMI</span><br>-->
          <input class="mt-4" value ="cash" type="radio" name="payment"><span class="fw-bold"> cash on delivery</span><br>
      </div>

      <button type="submit" class="btn btn-success mt-5">Confirm Order</button>

    </form>

</div>
  {{View::make('footer')}}
</body>
</html>