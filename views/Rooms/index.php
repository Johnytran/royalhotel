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
      <li class="nav-item mr-5 active">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>Rooms"style="color:red;">ROOMS<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item mr-5">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>Reservations">RESERVATION</a>
      </li>
       <li class="nav-item mr-5">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>AboutUs">ABOUT US</a>
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
        <h3>Room list</h3>
        <h1><i class="fas fa-check"></i> Choose your room</h1>
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

<div class="container-fluid ">
    <section class="my-5">
<?php foreach($viewmodel as $item) : ?>
  <!-- Grid row -->
  <hr>
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" src="/images/<?php echo $item['room_images']; ?>" alt="Single Room">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8"><!-- information of room-->
      <div class="row" >
        <h2 class="font-weight-bold mb-3"><strong><?php echo $item['room_type']; ?></strong></h2>
      </div>
      <div class="row">
        <h4><i class="fas fa-bed"> Bed: <?php echo $item['bed']; ?></i></h4>
      </div>
            <br>
      <div class="row">
        <h4><i class="fas fa-window-maximize "> Size: <?php echo $item['size']; ?></i></h4>
      </div>
            <br>
      <div class="row">
        <h4><i class="fas fa-coffee">Breakfast: <?php echo $item['break_fast']; ?></i></h4>
      </div>
            <br>
       <div class="row">
        <h4><i class="fas fa-users">Max Occupancy: <?php echo $item['occupancy']; ?></i></h4>
      </div>
            <br>
      <div class="row ml-2px">
        <h4><i class="fas fa-dollar-sign">Price : <?php echo $item['price']; ?>/Night</i></h4>
      </div>
      <div class="container-fluid ">
        <div class="row justify-content-end">
            <a class="btn btn-primary " href="<?php echo ROOT_PATH; ?>Reservations">BOOK NOW</a>
        </div>
      </div>



    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->
  <?php endforeach; ?>

</div>