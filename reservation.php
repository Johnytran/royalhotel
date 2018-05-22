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
                    <form method="post" action="Controllers/booking.php" >
                        
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
                
                <script>
                    $j(document).ready(function(){
                        var validDate = false;
                        $j("#departureDate").datepicker({
                            numberOfMonths: 2,
                            minDate: 0,
                            dateFormat: "dd/mm/yy",
                                onSelect: function (date) {
                                    var dt2 = $j('#arrivalDate');
                                    var startDate = $j(this).datepicker('getDate');
                                    var minDate = $j(this).datepicker('getDate');
                                    var d = new Date(minDate);
                                    
                                    $j.get("Controllers/roomdate.php?startDate="+encodeURI(d.getFullYear()+'/'+(d.getMonth()+1)+'/'+d.getDate()), function(data, status){
                                        var dataDecode = JSON.parse(data);
                                        if(!dataDecode.result){
                                            alert("The from date is not valid with the current room from "+ dataDecode.validDate+ " and to 01/08/2018. Please book other date!");
                                        }else{
                                            validDate = true;
                                        }
                                        
                                    });
                                    
                                    $j(this).datepicker('option', 'minDate', minDate);
                                    
                                    dt2.datepicker('setDate', minDate);
                                    dt2.datepicker('option', 'minDate', minDate);
                                }
                            });
                        
                       $j('#arrivalDate').datepicker({
                           numberOfMonths: 2,
                            dateFormat: "dd/mm/yy",
                            onSelect: function (date) {
                                    
                                    
                                    var minDate = $j(this).datepicker('getDate');
                                    var d = new Date(minDate);
                                    
                                    $j.get("Controllers/roomdateend.php?endDate="+encodeURI(d.getFullYear()+'/'+(d.getMonth()+1)+'/'+d.getDate()), function(data, status){
                                        var dataDecode = JSON.parse(data);
                                        if(!dataDecode.result){
                                            alert("The to date is not valid with the current room is: "+ dataDecode.validDate+ ". Please book other date!");
                                        }else{
                                            validDate = true;
                                        }
                                        
                                    });
                                    
                                }
                            
                        });
                       
                        
                        
                        $j("#reservedForm").submit(function(){
                            var phone = $j('#phonenumber').val(),
                                intRegex = /[0-9 -()+]+$/;
                            if((phone.length < 6) || (!intRegex.test(phone)))
                            {
                                $j('#phonenumber').focus();
                                alert('Please enter a valid phone number.');
                                return false;
                            }
                            if(!validDate){
                                alert("the selected dates are not valid with the current room from 2018/06/30 to 2018/08/01");
                                return false;
                            }
                                
                        });
                        
                        
                    });
                    
                </script>
                
            </form>                
            </div>
        </div>
        
        
        
        
        
    </body>
</html>

