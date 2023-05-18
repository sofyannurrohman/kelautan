<!DOCTYPE html>

<html>

<head>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>MyOcean</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<style>
  body {
    background-image: url('{{ asset('images/imgbg.svg') }}');
  };
</style>
<body class=" text-light"  >
<nav class="navbar navbar-expand-lg  navbar-light bg-primary" style="background-image: url('{{ asset('images/imgnv.svg') }}');">
      <a class="navbar-brand fw-bold text-light" href="#">MyOcean</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse  justify-content-end navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item  active">
            <a class="nav-link fw-bolder text-light" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder text-light" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder text-light" href="#">Galery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder text-light" href="#">Community</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bolder text-light" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner align-item-center" style="height: 650px;">
    <div class="carousel-item active">
      <img class="d-inline w-100" src="{{ asset('images/img3.jpg') }}" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-inline w-100" src="{{ asset('images/img2.jpg') }}" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/img1.jpg') }}" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container " style="margin-top: 30px;">
<div  class="d-flex justify-content-center border border-white ">
  <h1 class="">About MyOcean</h1>
</div>  
<h5 class="mt-3" style="text-align: center;">My ocean is an organization that focuses on preserving the sea and beaches.</h2>
</div>
<div class="container">

    @yield('content')

</div>
<div class="container  flex-column align-items-center " style="margin-top: 50px;">
<div class="d-flex justify-content-center  border border-white">
  <h2>Contact Us</h2>
</div>  
  <div class="d-flex justify-content-center " style="margin-top: 50px; margin-bottom: 50px;">
    <div class="mr-4 ml-4">
      <img src="{{asset('images/twitter.png')}}" alt="">
    </div>
    <div class="mr-4 ml-4">
      <img src="{{asset('images/facebook.png')}}" alt="">
    </div>
    <div class="mr-4 ml-4">
      <a href="">

        <img src="{{asset('images/whatsapp.png')}}" alt="">
      </a>
    </div>
  </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
<footer class="sticky-footer " style="height: 70px;background-image: url('{{ asset('images/imgft.svg') }}');">
  <div class="container my-auto">
    <div class="text-center">
      <h6>UTS Pemrograman Mobile Sofyan Nur Rohman</h4>
    </div>
  </div>
</footer>
</html>