
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <style>

  </style>
</head>
<body>
  {{View::make('header')}}

<section class="container mt-5 mb-5">
     <form action="{{ route('createslider') }}" class="form-groups" method="post"  style="margin-left:100px;" enctype="multipart/form-data">
      @csrf
        
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            <input type="file" name="image"  required class="form-control w-80" id="exampleInputPassword1">
          </div>
         
       
        <button type="submit" class="btn btn-primary">Add slider</button>
        <a href="readslider" class="btn btn-success">Visible slider</a>

    </form>
  </section>
  {{View::make('footer')}}

</body>
</html>