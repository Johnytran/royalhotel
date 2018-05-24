<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:0;"><!--navbar for display menu-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link mr-5" href="<?php echo ROOT_PATH; ?>Home" >HOME </a>
      </li>
      <li class="nav-item mr-5 ">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>Events" >EVENTS</a>
      </li>
      <li class="nav-item mr-5">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>Rooms">ROOMS</a>
      </li>
      <li class="nav-item mr-5">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>Reservations">RESERVATION</a>
      </li>
       <li class="nav-item mr-5 active">
        <a class="nav-link" style="color:red;" href="<?php echo ROOT_PATH; ?>AboutUs">ABOUT US<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item mr-5">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>Feedbacks">FEEDBACK</a>
      </li>
    </ul>
  </div>
</nav><!--end navbar for display menu-->

<!--Carousel slide-->
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner"  style="height:600px;" >
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/header1.jpg"style="height:600px;" alt="First slide">
      </div>
      <div class="carousel-caption " style="margin-bottom:70px;">
        <h1> About Us</h1>
      </div>
    
    <div class="carousel-item">
      <img class="d-block w-100" src="images/header2.jpg" style="height:600px; blur:30%;" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/header3.jpg" style="height:600px; blur:30%;" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" >
    <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!--Carousel slide-->

<section class="container-fluid mt-3 " style="width:80%;">

  <!-- Grid row -->
  <div class="row justify-content-middle ">
    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" src="/images/header1.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">

      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>Welcome To Royal Hotel</strong></h3>
      <hr>
      <!-- Excerpt -->
      <p class="dark-grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.</p>
      <!-- Post data -->
      <hr>
      <p>by <a class="font-weight-bold">Jason Pack-Manager</a>, 19/04/2018</p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->
  </section>
  
  <!--Social buttons-->
    <div class="text-center mt-5">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-fab mx-1">
                    <i class="fab fa-facebook fa-2x"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-tw mx-1">
                    <i class="fab fa-twitter fa-2x"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-gplus mx-1">
                    <i class="fab fa-google-plus fa-2x"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-li mx-1">
                    <i class="fab fa-linkedin fa-2x"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-dribbble mx-1">
                    <i class="fab fa-instagram fa-2x"> </i>
                </a>
            </li>
        </ul>
    </div>
    <!--/.Social buttons-->
    
    
<!-- Section: Features  -->
<section class="text-center my-5 border border-dark">

  <!-- Grid row -->
  <div class="row m-1 border border-info">

    <!-- Grid column -->
    <div class="col">

      <i class="fas fa-bed fa-3x red-text"></i>
      <h5 class="font-weight-bold my-4">Bed</h5>
      <p class="grey-text mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col">

      <i class="fas fa-utensils fa-3x cyan-text"></i>
      <h5 class="font-weight-bold my-4">Restaurant</h5>
      <p class="grey-text mb-md-0 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.
      </p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col">

      <i class="material-icons fa-3x">&#xeb48;</i>
      <h5 class="font-weight-bold my-4">Swimming Pool</h5>
      <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.
      </p>

    </div>
    
    <div class="col">

      <i class="fa fa-3x">&#xf0c0;</i>
      <h5 class="font-weight-bold my-4">Support</h5>
      <p class="grey-text mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores aperiam minima assumenda deleniti hic.
      </p>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features v.1 -->


<!-- Section: Features v.2 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Why Choose Us For Your Holiday?</h2>
  <!-- Section description -->
  <p class="lead grey-text text-center w-responsive mx-auto mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

  <!-- Grid row -->
  <div class="row m-1">

    <!-- Grid column -->
    <div class="col-md-4 mb-md-0 mb-5">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-2 col-md-3 col-2">
          <i class="fa fa-bullhorn blue-text fa-2x"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-10 col-md-9 col-10">
          <h4 class="font-weight-bold">Marketing</h4>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4 mb-md-0 mb-5">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-2 col-md-3 col-2">
          <i class="fa fa-cogs pink-text fa-2x"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-10 col-md-9 col-10">
          <h4 class="font-weight-bold">Customization</h4>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-4">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-2 col-md-3 col-2">
          <i class="fa fa-cogs pink-text fa-2x"></i>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-10 col-md-9 col-10">
          <h4 class="font-weight-bold">Support</h4>
          <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Features v.2 -->

<!--Gallery-->
<hr>
<h1 class="text-center">Gallery</h1>

<!--Carousel Wrapper-->
<div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/images/gallery1.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/gallery2.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/gallery3.png" alt="Third slide">
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100" src="/images/gallery1.png" class="img-fluid"></li>
        <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="/images/gallery2.png" class="img-fluid"></li>
        <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="/images/gallery3.png" class="img-fluid"></li>
    </ol>
</div>
<!--/.Carousel Wrapper-->
                        
            
            