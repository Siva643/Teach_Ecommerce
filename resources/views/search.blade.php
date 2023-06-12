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

  <section id="product">
    <h1 class="text-center tex-muted h1 mt-3">Our Product</h1>
    <div class="container mt-4">
        <h3 class="text-success">Results</h3>
     @foreach($products as $product)

       <div class="row">
        <div class="col-md-3">

            <a href="detail/{{$product['id']}}"><img class="card-img-top" style="width:200px;height:200px;object-fit:contain;" src="{{ asset('images/'.$product->image) }}" alt="Card image cap">
            </a>
        
         </div>
        <div class="col-md-6">
         
              <div class="card-body">
              <h5 class="card-title text-muted mt-5">{{$product['description']}}</h5>
              <h5 class="card-title mt-3 text-success">{{$product['price']}} INR</h5>
              </div>
        </div>
        </div>

        @endforeach
      


    

      </div>
      </section>

  {{View::make('footer')}}
</body>
</html>