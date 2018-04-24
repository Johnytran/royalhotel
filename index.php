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
        <div class="container-fluid content">
            <div class="row">
                <div class="col-md-2">
                    <image src="../images/logosm.png" alt="Royal Hotel"/>
                </div>
                <form method="post" action="Controllers/booking.php">
                    <button class="" type="submit">Book Now</button>
                </form>
            </div> 
                
        </div>
    </body>
</html>