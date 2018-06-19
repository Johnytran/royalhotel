 <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:0;"><!--navbar for display menu-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link mr-5" href="<?php echo ROOT_PATH; ?>Home" >HOME </a>
      </li>
      <li class="nav-item mr-5 active">
        <a class="nav-link" href="#" style="color:red;">EVENTS<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item mr-5">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>Rooms">ROOMS</a>
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
<?php 
date_default_timezone_set('Australia/Sydney'); 

?>
 <!--Carousel slide-->
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner"  style="height:600px;" >
    <div class="carousel-item active">
      <img class="d-block w-100" src="../images/header1.jpg"style="height:600px;" alt="First slide">
      </div>
      <div class="carousel-caption " style="margin-bottom:70px;">
        <h1>EVENTS</h1>
        <a  class="btn btn-outline-warning mr-3 btn-lg" href="<?php echo ROOT_PATH; ?>Rooms">OUR ROOM</a>
        <a  class="btn btn-info btn-lg" href="<?php echo ROOT_PATH; ?>Reservations">BOOK NOW <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    
    <div class="carousel-item">
      <img class="d-block w-100" src="../images/header2.jpg" style="height:600px; blur:30%;" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../images/header3.jpg" style="height:600px; blur:30%;" alt="Third slide">
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
    <nav class="nav"> <!--display time event-->
      <a class="nav-link active" href="<?php echo ROOT_PATH; ?>Events">Upcoming</a>
      <a class="nav-link" href="<?php echo ROOT_PATH; ?>Events/happeningEvent" >Happening</a>
      <a class="nav-link" href="<?php echo ROOT_PATH; ?>Events/expiredEvent" style="color:red">Expired</a>
    </nav><!--display time event-->
    
<!-- Section: Blog v.3 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Recent posts</h2>
  <!-- Section description -->
  <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

<?php foreach($viewmodel as $item) : ?>
<?php if($item['event_start_date'] < date('Y-m-d H:i:s')) : ?>

    <hr>
  <!-- Grid row -->
  <div class="row m-0 block" style="word-wrap:break-word; word-break:break-all;">
    
    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" style="width:100%;" src="/images/<?php echo $item['event_image']; ?>" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">

      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong><?php echo $item['event_title']; ?></strong></h3>
      <!-- Excerpt -->
      <p class="dark-grey-text"><?php echo $item['event_content']; ?></p>
      <!-- Post data -->
      <p>by <a class="font-weight-bold">Admin</a></p>
      <h5>Start on <?php echo $item['event_start_date']; ?></h5>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

    
    
<?php endif; ?>
<?php endforeach; ?>
</div>
    

  
            
