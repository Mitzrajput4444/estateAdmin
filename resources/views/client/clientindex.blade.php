@extends('client.main')
@section('content')

<div id="slider" class="sl-slider-wrapper">

<div class="sl-slider">

  <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
    <div class="sl-slide-inner">
      <div class="bg-img bg-img-1"></div>
      <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
      <blockquote>              
      <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
      <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
      <cite>$ 20,000,000</cite>
      </blockquote>
    </div>
  </div>
  
  <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
    <div class="sl-slide-inner">
      <div class="bg-img bg-img-2"></div>
      <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
      <blockquote>              
      <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
      <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
      <cite>$ 20,000,000</cite>
      </blockquote>
    </div>
  </div>
  
  <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
    <div class="sl-slide-inner">
      <div class="bg-img bg-img-3"></div>
      <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
      <blockquote>              
      <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
      <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
      <cite>$ 20,000,000</cite>
      </blockquote>
    </div>
  </div>
  
  <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
    <div class="sl-slide-inner">
      <div class="bg-img bg-img-4"></div>
      <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
      <blockquote>              
      <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
      <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
      <cite>$ 20,000,000</cite>
      </blockquote>
    </div>
  </div>
  
  <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
    <div class="sl-slide-inner">
      <div class="bg-img bg-img-5"></div>
      <h2><a href="#">2 Bed Rooms and 1 Dinning Room Aparment on Sale</a></h2>
      <blockquote>              
      <p class="location"><span class="glyphicon glyphicon-map-marker"></span> 1890 Syndey, Australia</p>
      <p>Until he extends the circle of his compassion to all living things, man will not himself find peace.</p>
      <cite>$ 20,000,000</cite>
      </blockquote>
    </div>
  </div>
</div><!-- /sl-slider -->



<nav id="nav-dots" class="nav-dots">
  <span class="nav-dot-current"></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</nav>

</div><!-- /slider-wrapper -->
<div class="banner-search">
  <div class="container"> 
    <!-- banner -->
    <h3>Buy, Sale & Rent</h3>
    <div class="searchbar">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <input type="text" class="form-control" placeholder="Search of Properties">
          <div class="row">
            <div class="col-lg-3 col-sm-3 ">
              <select class="form-control">
                <option>Buy</option>
                <option>Rent</option>
                <option>Sale</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
              <select class="form-control">
                <option>Price</option>
                <option>$150,000 - $200,000</option>
                <option>$200,000 - $250,000</option>
                <option>$250,000 - $300,000</option>
                <option>$300,000 - above</option>
              </select>
            </div>
            <div class="col-lg-3 col-sm-4">
            <select class="form-control">
                <option>Property</option>
                <option>Apartment</option>
                <option>Building</option>
                <option>Office Space</option>
              </select>
              </div>
              <div class="col-lg-3 col-sm-4">
              <button class="btn btn-success"  onclick="window.location.href='buysalerent.php'">Find Now</button>
              </div>
          </div>
          
          
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
          <p>Join now and get updated with all the properties deals.</p>
          <button class="btn btn-info"   data-toggle="modal" data-target="#loginpop">Login</button>        </div>
      </div>
    </div>
  </div>
</div>
@stop