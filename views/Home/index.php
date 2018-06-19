 <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:0;"><!--navbar for display menu-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link mr-5" href="#" style="color:red;">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item mr-5">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>Events">EVENTS</a>
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
      <img class="d-block w-100" src="images/header1.jpg"style="height:600px;" alt="First slide">
      </div>
      <div class="carousel-caption " style="margin-bottom:70px;">
        <h1>Royal Hotel</h1>
        <a  class="btn btn-outline-warning mr-3 btn-lg" href="<?php echo ROOT_PATH; ?>Rooms">OUR ROOM</a>
        <a  class="btn btn-info btn-lg" href="<?php echo ROOT_PATH; ?>Reservations">BOOK NOW <i class="fas fa-arrow-circle-right"></i></a>
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

<div class="container-fluid mt-3 border border-dark "> <!--check availability form-->
                        <form class="row p-3  " method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                          <div class="col-sm border border-dark ml-2 ">
                            <h2>Check-in</h2>
                            <hr>
                            <input class="form-control" type="date" value="current" id="example-date-input" required>
                          </div>
                          <div class="col-sm border border-dark ml-2">
                            <h2>Check-out</h2>
                            <hr>
                            <input class="form-control" type="date" value="current" id="example-date-input" required>
                          </div>
                          <div class="col-sm ml-2">
                           <a type="submit" name="submit" class="btn btn-primary form-control" href="<?php echo ROOT_PATH; ?>Home/listAvailableRoom"><h1>Check <br>Availability</h1></a>
                         </div>
                         </form>
                </div><!--check availability form-->
                
                <div class="container-fluid" style="text-align:center;"> <!--Text intro-->
                      <h3>WELCOME TO</h3>
                      <h1>Royal Hotel</h1>
                      <hr>
                      <p style="font-size:18px;">The Royal Hotel portfolio comprises 15 hotels, resorts and serviced suites in gateway cities across Asia and Australia, including those under development. At Royal Hotel, you will encounter warm and friendly service delivered in a straightforward and approachable way. Our welcoming guestrooms as well as public areas are equipped with spacious areas for you to work in connected comfort, accentuated with modern decor and local touches.</p>
                      <strong>Jason Pack-Manager</strong>
                </div><!--Text intro-->
                <hr>
                
                
              <!-- Section: Blog v.2 -->
              <section class="text-center">
              
                <!-- Section heading -->
                <h4 class="h1-responsive  ">OUR ROOMS</h4>
                <!-- Section description -->
                <h1 class="dark-grey-text w-responsive mb-5">Luxurious & Comfortable</h1>
              
                <!-- Grid row -->
                <div class="row" style="margin :0;">
              
                  <!-- Grid column -->
                  <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
              
                    <!-- Featured image -->
                    <div class="view overlay rounded z-depth-2 mb-4">
                      <img class="img-fluid" src="/images/single_room.jpg" alt="Single Room">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
              
                    <!-- Category -->
                    <h6 class="font-weight-bold mb-3"><i class="fas fa-bed"></i></h6>
                    <!-- Post title -->
                    <h4 class="font-weight-bold mb-3"><strong>Single Room</strong></h4>
                    <!-- Post data -->
                    <!-- Excerpt -->
                    <hr>
                    <p class="font-weight-bold mb-3">Starting From: $200/Night</p>
                    <!-- Read more button -->
                    <a class="btn btn-info btn-rounded btn-md"  href="<?php echo ROOT_PATH; ?>Rooms">Read more</a>
              
                  </div>
                  <!-- Grid column -->
              
                  <!-- Grid column -->
                  <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
              
                    <!-- Featured image -->
                    <div class="view overlay rounded z-depth-2 mb-4">
                      <img class="img-fluid" src="/images/double_room.jpg" alt="Double Room">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
              
                    <!-- Category -->
                    <h6 class="font-weight-bold mb-3"><i class="fas fa-bed"></i> <i class="fas fa-bed"></i></h6>
                    <!-- Post title -->
                    <h4 class="font-weight-bold mb-3"><strong>Double Rooms</strong></h4>
                    <!-- Post data -->
                    <!-- Excerpt -->
                     <hr>
                    <p class="font-weight-bold mb-3">Starting From: $300/Night</p>
                    <!-- Read more button -->
                    <a class="btn btn-info btn-rounded btn-md"  href="<?php echo ROOT_PATH; ?>Rooms">Read more</a>
              
                  </div>
                  <!-- Grid column -->
              
                  <!-- Grid column -->
                  <div class="col-lg-4 col-md-6 mb-0">
              
                    <!-- Featured image -->
                    <div class="view overlay rounded z-depth-2 mb-4">
                      <img class="img-fluid" src="/images/luxurious_room.jpg" alt="Luxurious Room">
                      <a>
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>
              
                    <!-- Category -->
                    <h6 class="font-weight-bold mb-3"><i class="fas fa-bed"></i> <i class="fas fa-bed"></i> <i class="fas fa-bed"></i></h6>
                    <!-- Post title -->
                    <h4 class="font-weight-bold mb-3"><strong>Luxirious Rooms</strong></h4>
                    <!-- Post data -->
                    <hr>
                    <p class="font-weight-bold mb-3">Starting From: $500/Night</p>
                    <!-- Read more button -->
                    <a class="btn btn-info btn-rounded btn-md" href="<?php echo ROOT_PATH; ?>Rooms">Read more</a>
              
                  </div>
                  <!-- Grid column -->
              
                </div>
                <!-- Grid row -->
              
              </section>
              <!-- Section: Blog v.2 -->