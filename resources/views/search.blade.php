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
    <div class="container mt-4 p-3">
        <h3>Results</h3>
       <div class="row">
     @foreach($products as $product)
        <div class="col-6 col-md-6">
        <div class="">
            <a href="detail/{{$product['id']}}"><img class="card-img-top" src="{{ asset('images/'.$product->image) }}" alt="Card image cap">
            </a>
        </div>
         </div>
        <div class="col-6 col-md-6 mt-5">
         <div>
              <div class="card-body text-center">
              <h5 class="card-title fw-bold mt-5">{{$product['description']}}</h5>
              <h5 class="card-title mt-3 text-success">{{$product['price']}}</h5>
        </div>
        </div>
        </div>
        </div>
          </div>
      @endforeach
      </div>
      </section>

  {{View::make('footer')}}
</body>
</html>