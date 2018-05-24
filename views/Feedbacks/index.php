<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:0;"><!--navbar for display menu-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link mr-5" href="<?php echo ROOT_PATH; ?>Home">HOME </a>
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
      <li class="nav-item mr-5 active">
        <a class="nav-link" href="#"  style="color:red;">FEEDBACK<span class="sr-only">(current)</span></a>
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
        <h1> Your value Review</h1>
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

<div class="container-fluid mt-5">
	<?php if(isset($_SESSION['is_logged_in'])) : ?>
	<a class="btn btn-success btn-share mb-5" href="<?php echo ROOT_PATH; ?>Feedbacks/add">Give Us Your Value Feedback</a>
	<?php else: ?>
	<a class="btn btn-warning btn-share mb-5" href="<?php echo ROOT_PATH; ?>Users/login">Please Log In To Give Us Your Feedback</a>
	<?php endif; ?>
	<?php foreach($viewmodel as $item) : ?>
		<div class="card border border-success  mt-3">
      <div class="card-block">
        <h2 class="card-title ml-2"><?php echo $item['title']; ?></h2>
        <hr class="border border-5">
        <h6 class="card-subtitle mb-2 text-muted  ml-2">By <?php echo $item['name']; ?></h6>
        <p class="card-text ml-2">"<?php echo $item['body']; ?>"</p>
        <a href="#" class="card-link ml-2"><?php echo $item['create_date']; ?></a>
      </div>
    </div>
	<?php endforeach; ?>
	
	<!--pagination-->
	<nav aria-label="...">
  <ul class="pagination justify-content-center mt-3">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active">
      <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>


