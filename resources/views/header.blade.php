<?php
  
  use App\Http\Controllers\ProductController;
  $total=0;
  if(Session::has('user'))
  {
  $total=ProductController::cartItem();
  }
?>

<div class="superNav border-bottom py-2" style="background-color: yellow">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
          <select  class="me-3 border-0" style="background-color: yellow">
            <option value="en-us">EN-US</option>
          </select>
          <span class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><strong>jmsiva123@gmail.com</strong></span>
          <span class="me-3"><i class="fa-solid fa-phone me-1 text-warning"></i> <strong>1-600-123-1256</strong></span>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
          <span class="me-3"><i class="fa-solid fa-truck text-muted me-1"></i><a class="text-muted" href="#">Shipping</a></span>
          <span class="me-3"><i class="fa-solid fa-file  text-muted me-2"></i><a class="text-muted" href="#">Policy</a></span>
        </div>
      </div>
    </div>
  </div>
  <nav style="background-color:rgb(137, 255, 255)" class="navbar navbar-expand-lg sticky-top navbar-light p-3 shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-shop me-2"></i> <strong>SHOP</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="mx-auto my-3 d-lg-none d-sm-block d-xs-block">
        <div class="input-group">
         <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
          <input type="text" class="form-control border-warning" style="color:#7a7a7a;">
          <button class="btn btn-warning text-white">Search</button>
        </div>
      </div>
      
      <form action="/search" method="get">
      @csrf
      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <div class="ms-auto d-none d-lg-block">
          <div class="input-group">
            <span class="border-warning input-group-text bg-warning text-white"><i class="fa-solid fa-magnifying-glass"></i></span>
            <input type="text" name="query" class="form-control border-warning" style="color:#7a7a7a">
            <button class="btn btn-warning text-white" type="submit">Search</button>
          </div>
        </div>
      </form>

        <ul class="navbar-nav ms-auto ">
         
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="/myorders">Orders</a>
          </li>
         
          
        </ul>
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="/cartlist"></i>Cart({{$total}})</a>
          </li>
          @if(Session::has('user'))
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Session::get('user')['name']}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/logout">logout</a></li>
         
            </ul>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="login">Signin</a>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link mx-2 text-uppercase" href="register"></i>Register</a>
          </li>
       
        </ul>
      </div>
    </div>
  </nav>