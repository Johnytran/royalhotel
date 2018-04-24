<?php
include('autoloader.php');
$page_title = "Sign up";
?>
<!DOCTYPE html>
<html>
    <?php 
    include ('includes/head.php');
    ?>
    <body>
        <div class="container-fluid content">
            <div class="row text-center">
                <div class="col-sm-8">
                    <image src="../images/logosm.png" alt="Royal Hotel"/>
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