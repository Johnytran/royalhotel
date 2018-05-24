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
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>Rooms">ROOMS</a>
      </li>
      <li class="nav-item mr-5">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>Reservations"style="color:red;">RESERVATION<span class="sr-only">(current)</span></a>
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
        <h1> Reservations</h1>
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

            <!--Reservations Form-->
            <div class="row m-0 justify-content-center mt-5" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Customer</a></li>
                <li class="breadcrumb-item">Payment</li>
                <li class="breadcrumb-item">Confirmation</li>
                <li class="breadcrumb-item active" aria-current="page">Complete</li>
              </ol>
            </div>
            <div class="row m-0 justify-content-center mt-5">
            <form class="row" id="reservedForm">
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" required id="firstName" name="firstName" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Last Name</label>
                                <input type="text" class="form-control" required id="lastName" name="lastName" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Phone</label>
                                <input type="text" class="form-control" id="phonenumber" required id="phone" name="phoneNumber" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" required id="email" aria-describedby="email" name="email" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="departureDate">Departure Date</label>
                                <input type="text" class="form-control datepicker" required id="departureDate" name="departureDate" placeholder="dd/mm/yy">
                            </div>
                            <div class="form-group">
                                <label for="arrivalDate">Arrival Date</label>
                                <input type="text" class="form-control datepicker" required id="arrivalDate"  name="arrivalDate" placeholder="dd/mm/yy">
                            </div>
                            
                            <div class="form-group">
                                <label for="numOfAdults">Num of Adults</label>
                                
                                <select class="custom-select" required name="numOfAdult">
                                    <option selected>Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="numOfChildren">Num of Children</label>
                                    <select class="custom-select" required name="numOfChildren">
                                    <option selected>Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="questionComments">Question / Comments</label>
                        <textarea class="form-control" id="comment" name="comment" placeholder="">
                            
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Book</button>
                </div>
            </form>                
            </div>