<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <!-- bootstrap cdn link -->
   <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
   
   <!-- font-awesome cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
   <!-- owl carousel cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
   <!-- bootstrap icon cdn -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
  </head>
<body>

   {{View::make('header')}}
   
   @yield('content')
  
   {{View::make('footer')}}
   

   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>  
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"></script>   

  <!-- jquery cdn link -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <!--owl carousel script cdn link -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
 <style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
  *{
    margin:0;
    padding:0;
    }
  body{
    background:rgb(255, 255, 255);
    font-family: 'Poppins', sans-serif;
    }
  .firstsection{
    box-shadow: 10px 10px 10px gray !important;
    }
  .firstsection img{
      width:70px;
      height:70px;
      object-fit:contain;
      margin-left:50px;
    }
   
 
 /* Navbar */

  .car{
    width:100%;
    height:50vh;
   }
  #carousel img{
     width:100%;
     height:55vh;
     background-size: cover;
   }
@media screen and (max-width:576px)
        {
          .car{
            width:100%;
            height:30vh;
        }
          #carousel img{
            width:100%;
            height:30vh;
        }
}
  #product{
    background:#ffffff; 
  }
  #product h1{
    font-size:50px;
    letter-spacing:2px;
    font-weight:bold
  }
  #product img{
    width:130px;
    height:130px;
    object-fit:contain;
    margin:15px;
    
  }
  .card-first .img{
      width:110px;
      height:100px;
      display:flex;
      object-fit:contain;
   
  }
  .card-first{
    height:400px;
    overflow: hidden;
    border:none;
   }
   .card-first h3{
    letter-spacing: 1px;
   
   }

  .carddesign{
    width:220px;
    height:230px;
    border:none;
    box-shadow: 15px 20px 20px rgb(240, 238, 238),
               inset 4px 4px 10px rgb(239, 237, 237);
    border-radius:10px;
    overflow:hidden;
    justify-content: center;
    align-items: center;
    margin:20px;
    padding:20px;
  }
  .carddesign:hover{
    box-shadow: 15px 20px 20px white,
               inset 1px 1px 5px white;
    transition: 0.3s;
  }
  @media screen and (max-width:576px){
    .carddesign{
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
  
  .sectiontwo img{
    width:300px;
    height:200px;
    object-fit:contain;
  }
  .card-first{
    border:1px solid rgb(209, 205, 205);
  }
  @media screen and (max-width:576px){
     .card-first{
      width:100px;
      height:250px;
     
      border:none !important;
     
     }
  }
  
  .detail-img{

    height:60vh;
    display:flex;
    justify-content: center;
    align-items:center;
    }
  .col-2{
    border:1px solid white;
    padding:30px;

  }
  .productdetail{
       border-bottom:1px solid black;
  }

</style>
<script type="text/javascript">
    $('.owl-carousel').owlCarousel(
        {
            loop:true,
            margin:5,
            nav:false,
            autoplay:true,
            autoplayTimeout:2000,
            dots:false,
            //stagePadding:50,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
</script>
</html>