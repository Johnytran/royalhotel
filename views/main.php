<html>
<head>
	<title>Royal Hotel</title>
	 <meta name="viewport" content="width=device-width,initial-scale=1.0">
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
  <link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/node_modules/jquery-ui-dist/jquery-ui.min.css">
  <link href="/css/styles.css" rel="stylesheet">
  <!--preload spinner image-->
  <link href="/images/graphics/spinner1.gif" rel="preload" as="image">
  <script src="/node_modules/jquery/dist/jquery.min.js"></script>
  <script src="/node_modules/jquery-ui-dist/jquery-ui.min.js"></script>
  <script src="/node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  
</head>
<body>
	 <!--Logo and member and book now on the top-->
  <header class="blog-header" style="background:#f49541;" >
        <div class="row flex-nowrap justify-content-between align-items-center" style="margin:0;">
          <div class="col-4 pt-1">
            <a class="text-muted" href="googlemap.com">113 Avenger Street, Sydney, NSW 2008</a>
          </div>
          <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="<?php echo ROOT_PATH; ?>Home"><img src="/images/logo2.png" style="height:80; width:130px;"></a> <!--logo-->
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
              <?php if(isset($_SESSION['is_logged_in'])) : ?>
              <a href="<?php echo ROOT_URL; ?>Users/myAccount">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
              <a class="btn btn-primary ml-2" href="<?php echo ROOT_URL; ?>users/logout"> Logout</a>
              <?php else : ?>
             <div class="dropdown" style="margin-right:15px;">
              <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Member
              </button>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?php echo ROOT_URL; ?>Users/login">Login</a>
                <a class="dropdown-item" href="<?php echo ROOT_URL; ?>Users/register">Register</a>
              </div>
            </div>
            <a class="btn btn-primary" href="<?php echo ROOT_PATH; ?>Reservations" style="margin-right:10px;">BOOK NOW</a>
            <?php endif; ?>
                            
            
          </div>
        </div>
      </header><!--end Logo and member and book now on the top-->
      
      

    <div class="container-fluid p-0">

     
      <?php Messages::display(); ?>
     	<?php require($view); ?>
     

    </div><!-- /.container -->
    
<!--Footer-->
<footer class="page-footer font-small bg-white pt-4 mt-4">

    <!--Footer Links-->
    <div class="container text-center text-md-left">
        <div class="row">

            <!--First column-->
            <div class="col-md-4">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold"><img src="/images/logo2.png" style="width:70%;"></img></h5>
                
            </div>
            <!--/.First column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Second column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">PRODUCT</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Tour</a>
                    </li>
                    <li>
                        <a href="#!">Features</a>
                    </li>
                    <li>
                        <a href="#!">Terms of service</a>
                    </li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Third column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">COMPANY</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Home</a>
                    </li>
                    <li>
                        <a href="#!">Events</a>
                    </li>
                    <li>
                        <a href="#!">Rooms</a>
                    </li>
                    <li>
                        <a href="#!">Reservation</a>
                    </li>
                    <li>
                        <a href="#!">About Us</a>
                    </li>
                    <li>
                        <a href="#!">Feedback</a>
                    </li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Fourth column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">ABOUT US</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Our Story</a>
                    </li>
                    <li>
                        <a href="#!">Offices</a>
                    </li>
                </ul>
            </div>
            <!--/.Fourth column-->
              <hr class="clearfix w-100 d-md-none">

            <!--Fifth column-->
            <div class="col-md-2 mx-auto">
                <h5 class="text-uppercase mb-4 mt-3 font-weight-bold">FOLLOW US</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Facebook</a>
                    </li>
                    <li>
                        <a href="#!">Twitter</a>
                    </li>
                    <li>
                        <a href="#!">Instagram</a>
                    </li>
                    <li>
                        <a href="#!">Google</a>
                    </li>
                    <li>
                        <a href="#!">linkedin</a>
                    </li>
                </ul>
            </div>
            <!--/.Fifth column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Call to action-->
    <div class="text-center py-3">
        <ul class="list-unstyled list-inline mb-0">
            <?php if(isset($_SESSION['is_logged_in'])) : ?>
            <li class="list-inline-item">
                <h5 class="mb-1">Welcome To Royal Hotel</h5>
            </li>
            <?php else: ?>
            <li class="list-inline-item">
                <h5 class="mb-1">Become Member Now</h5>
            </li>
            <li class="list-inline-item">
                <a href="<?php echo ROOT_URL; ?>Users/login" class="btn btn-danger btn-rounded">Member <i class="fas fa-arrow-right"></i></a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
    <!--/.Call to action-->

    <hr>

    <!--Social buttons-->
    <div class="text-center">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-fb mx-1">
                    <i class="fab fa-facebook"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-tw mx-1">
                    <i class="fab fa-twitter"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-gplus mx-1">
                    <i class="fab fa-google-plus"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-li mx-1">
                    <i class="fab fa-linkedin"> </i>
                </a>
            </li>
            <li class="list-inline-item">
                <a class="btn-floating btn-sm btn-dribbble mx-1">
                    <i class="fab fa-instagram"> </i>
                </a>
            </li>
        </ul>
    </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright text-center">
         <a href="#" class="mr-2 font-italic"> *Privacy </a>
         <a href="#" class="font-italic"> *Site Map </a>
       <i class="far fa-copyright"> 2018 Copyright:</i>
        <a href="#"> Royal Hotel </a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
                      
</body>
</html>