<?php
include('autoloader.php');
$page_title = "Reservation";
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
            <div class="row">
                <?php //include('includes/slide.php'); ?>
                slide
            </div>
            <div class="row">
                <?php include('includes/tracking.php'); ?>
            </div>    
            <div class="row">
            <form class="row">
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Phone</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="email" aria-describedby="email" name="email" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="arrivalDate">Arrival Date</label>
                                <input type="text" class="form-control datepicker" id="arrivalDate"  name="arrivalDate" placeholder="dd/mm/yy">
                            </div>
                            <div class="form-group">
                                <label for="departureDate">Departure Date</label>
                                <input type="text" class="form-control datepicker" id="arridepartureDatevalDate" name="departureDate" placeholder="dd/mm/yy">
                            </div>
                            <div class="form-group">
                                <label for="numOfAdults">Num of Adults</label>
                                <input type="text" class="form-control" id="adult" name="adult" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="numOfChildren">Num of Children</label>
                                <input type="text" class="form-control" id="adult" name="children" placeholder="">
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
                
                <script>
                    $j(document).ready(function(){
                        $j(".datepicker").datepicker({ dateFormat: 'dd/mm/yy' });
                    });
                    
                </script>
                
            </form>                
            </div>
        </div>
    </body>
</html>
