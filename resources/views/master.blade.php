<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
   
  </head>
<body>

   {{View::make('header')}}
   
   @yield('content')
  


   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>   

 </body>
 <style>
  *{
    margin:0;
    padding:0;
    }

  body{
    background:#e5e5e5;
  }
 /* Navbar */

  .carousel{
    width:100%;
    height:40vh;
   }
  #navbar img{
     width:100%;
     height:40vh;
     background-size: cover;
   }
@media screen and (max-width:576px)
{
  .carousel{
    width:100%;
    height:30vh;
}
  #navbar img{
     width:100%;
     height:30vh;
}
}
  #product{
    background:#e5e5e5; 
  }
  #product h1{
    font-size:50px;
    letter-spacing:2px;
    font-weight:bold
  }
  #product img{
    width:150px;
    height:150px;
    object-fit:contain;
    margin:15px;
    
  }
  .card{
    width:250px;
    border:none;
    box-shadow: 15px 20px 20px rgb(150, 147, 147),
               inset 4px 4px 10px white;
    border-radius:10px;
    overflow:hidden;
    justify-content: center;
    align-items: center;
    margin:20px;
    padding:20px;
  }
  .card:hover{
    box-shadow: 15px 20px 20px gray,
               inset 1px 1px 5px gray;
    transition: 0.3s;
  }
  @media screen and (max-width:576px){
    .card{
    width:200px;
    height:200px;
    border:none;
    box-shadow: 15px 20px 20px rgb(150, 147, 147),
               inset 4px 4px 10px white;
    border-radius:10px;
    overflow:hidden;
    justify-content: center;
    align-items: center;
    margin:20px;
    padding:20px;
  }
 
  #product img{
    width:100px;
    height:100px;
    object-fit:contain;
    margin:15px;
    
  }
  #product h1{
    margin-top:20px;
    font-size:30px;
  }
  
  }

 
  
  </style>
</html>