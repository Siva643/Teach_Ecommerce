@extends('master')
@section('content')
<!--<div class="container-fluid-lg">
  <div id="myCarousel" class="carousel slide carousel" data-bs-ride="carousel">
       Carousel indicators 
      <ol class="carousel-indicators">
          <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
          <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
          <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
      </ol>
      
       Wrapper for carousel items 
      <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/wearables/May-ART23/PC_Hero_3000x1200_Smartwatch_Unrec._CB591137804_.jpg" class="d-block w-100" alt="Slide 1">
          </div>
          <div class="carousel-item">
              <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Wireless/ssserene/MayART23/OnePlus/GW/Family/D79612035_IN_WLD_MayART23_OnePlus_Family_PC_Hero_3000x1200._CB591252547_.jpg" class="d-block w-100" alt="Slide 2">
          </div>
          <div class="carousel-item">
              <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/HPC/MayART/GW/KSD_Unrec_PC_hero_3000x1200._CB591145615_.jpg" class="d-block w-100" alt="Slide 3">
          </div>
      </div>

       Carousel controls 
      <a class="carousel-control-prev" href="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon fw-bold"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>-->
     <section id="navbar">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img22/wearables/May-ART23/PC_Hero_3000x1200_Smartwatch_Unrec._CB591137804_.jpg" class="d-block w-100" alt="Slide 1">
              </div>
              <div class="carousel-item">
                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/Wireless/ssserene/MayART23/OnePlus/GW/Family/D79612035_IN_WLD_MayART23_OnePlus_Family_PC_Hero_3000x1200._CB591252547_.jpg">
              </div>
              <div class="carousel-item">
                <img src="https://images-eu.ssl-images-amazon.com/images/G/31/img23/HPC/MayART/GW/KSD_Unrec_PC_hero_3000x1200._CB591145615_.jpg">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
     </section>
    
     <section id="product">
    <h1 class="text-center tex-muted h1 mt-3">Our Product</h1>
    <div class="container mt-4 p-3">
        <div class="row">
            <div class="col-6 col-md-3">
        <div class="card">
            <img class="" src="https://m.media-amazon.com/images/I/61VfL-aiToL._AC_UY218_.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Samsung Galaxy</h5>
            </div>
        </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="card">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/51BZ9TBEEHL._SX300_SY300_QL70_FMwebp_.jpg" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">Bedsheets</h5>
                </div>
            </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                      <h5 class="card-title">Grinder & Blender</h5>
                    </div>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                      <h5 class="card-title">Grinder & Blender</h5>
                    </div>
                </div>
              </div>
        </div>
        
        <div class="row">
       
        
            <div class="col-6 col-md-3">
        <div class="card">
            <img class="card-img-top" src="https://m.media-amazon.com/images/I/41nJB6T+aKL._AC_SR400,600_.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">bed</h5>
            </div>
        </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="card">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/61q-2yzbBtL._AC_CR0%2C0%2C0%2C0_SX480_SY360_.jpg" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">boAt Earbuds</h5>
                </div>
            </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://m.media-amazon.com/images/I/31febYa30qL._SX300_SY300_QL70_FMwebp_.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                      <h5 class="card-title">HP pen Drive</h5>
                    </div>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                      <h5 class="card-title">Grinder & Blender</h5>
                    </div>
                </div>
              </div>
        </div>


        <div class="row">
       
        
            <div class="col-6 col-md-3">
        <div class="card">
            <img class="card-img-top" src="https://m.media-amazon.com/images/I/41nJB6T+aKL._AC_SR400,600_.jpg" alt="Card image cap">
            <div class="card-body text-center">
              <h5 class="card-title">Card title</h5>
            </div>
        </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="card">
                <img class="card-img-top" src="https://m.media-amazon.com/images/I/61q-2yzbBtL._AC_CR0%2C0%2C0%2C0_SX480_SY360_.jpg" alt="Card image cap">
                <div class="card-body text-center">
                  <h5 class="card-title">boAt Earbuds</h5>
                </div>
            </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://m.media-amazon.com/images/I/31febYa30qL._SX300_SY300_QL70_FMwebp_.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                      <h5 class="card-title">HP pen Drive</h5>
                    </div>
                </div>
              </div>
              <div class="col-6 col-md-3">
                <div class="card">
                    <img class="card-img-top" src="https://m.media-amazon.com/images/I/51i84+E-LgL._AC_SR400,600_.jpg" alt="Card image cap">
                    <div class="card-body text-center">
                      <h5 class="card-title">Grinder & Blender</h5>
                    </div>
                </div>
              </div>
        </div>

   </div>

  
  </section
@endsection

