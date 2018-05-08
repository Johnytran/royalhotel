<?php
include('autoloader.php');
$page_title = "Home";
?>
<!DOCTYPE html>
<html>
    <?php 
    include ('includes/head.php');
    ?>
    <body>
        <div class="container-fluid content container">
            <div class="row text-center">
                <div class="col-sm-8">
                    <a href="index.php">
                        <image src="../images/logosm.png" alt="Royal Hotel"/>
                    </a>
                </div>
                <div class="col-sm-4 set-height">
                    <form method="post" action="Controllers/booking.php">
                        <button class="btn btn-secondary" type="submit">Book Now</button>
                    </form>
                    
                </div>
            </div> 
            
            <div class="row">
                <?php include('includes/navbar.php'); ?>
            </div>
                
        </div>
    </body>
</html>
