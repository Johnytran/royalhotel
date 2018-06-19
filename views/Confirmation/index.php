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
      <li class="nav-item mr-5 ">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>Rooms">ROOMS</a>
      </li>
      <li class="nav-item mr-5 active">
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
            <div class="row m-0 justify-content-center mt-5">
                <?php 
                session_start();
                $room_id = 1;
                $prepareData = new stdClass();
                $prepareData->firstName = $_SESSION['customer_data']["firstName"];
                $prepareData->lastName = $_SESSION['customer_data']["lastName"];
                $prepareData->phone = $_SESSION['customer_data']["phoneNumber"];
                $prepareData->email = $_SESSION['customer_data']["email"];
                $prepareData->startDate = $_SESSION['customer_data']["departureDate"];
                $prepareData->endDate = $_SESSION['customer_data']["arrivalDate"];
                $prepareData->adults = $_SESSION['customer_data']["numOfAdult"];
                $prepareData->children = $_SESSION['customer_data']["numOfChildren"];
                $prepareData->comment = $_SESSION['customer_data']["comment"];
                //if(!isset($_SESSION['track_active']))
                $_SESSION['track_active'] = 3;
                include('includes/tracking.php'); ?>
            </div>    
            <div class="row m-0 justify-content-center mt-5 contain-loading">
                <img src="images/graphics/spinner1.gif" class="loading"/>
            	<form method="post" action="<?php echo ROOT_PATH; ?>Complete" autocomplete="off">
                    <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="firstName">First Name</label>
                                <input type="text"  value="<?php echo $prepareData->firstName;?>" class="form-control" required id="firstName" name="firstName" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label for="firstName">Last Name</label>
                                <input type="text"  value="<?php echo $prepareData->lastName;?>" class="form-control" required id="lastName" name="lastName" placeholder="Last Name">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text"  value="<?php echo $prepareData->phone;?>" class="form-control" id="phonenumber" required id="phone" name="phoneNumber" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email"  value="<?php echo $prepareData->email;?>" class="form-control" required id="email" aria-describedby="email" name="email" placeholder="Enter email">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="departureDate">Start Date</label>
                                <input type="text"  value="<?php echo $prepareData->startDate;?>" class="form-control datepicker" required id="departureDate" name="departureDate" placeholder="dd/mm/yy">
                            </div>
                            <div class="form-group">
                                <label for="arrivalDate">End Date</label>
                                <input type="text"  value="<?php echo $prepareData->endDate;?>" class="form-control datepicker" required id="arrivalDate"  name="arrivalDate" placeholder="dd/mm/yy">
                            </div>
                            
                            <div class="form-group">
                                <label for="numOfAdults">Num of Adults</label>
                                
                                <select class="custom-select" id="numOfAdult" required name="numOfAdult">
                                    <option selected>Choose...</option>
                                    <option value="1" <?php echo $prepareData->adults==1?"selected":""?>>1</option>
                                    <option value="2" <?php echo $prepareData->adults==2?"selected":""?>>2</option>
                                    <option value="3" <?php echo $prepareData->adults==3?"selected":""?>>3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="numOfChildren">Num of Children</label>
                                    <select class="custom-select" required id="numOfChildren" name="numOfChildren">
                                    <option selected>Choose...</option>
                                    <option value="1" <?php echo $prepareData->children==1?"selected":""?>>1</option>
                                    <option value="2" <?php echo $prepareData->children==2?"selected":""?>>2</option>
                                    <option value="3" <?php echo $prepareData->children==3?"selected":""?>>3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="questionComments">Question / Comments</label>
                        <textarea class="form-control" id="comment" name="comment" rows="8" placeholder=""><?php echo $prepareData->comment;?></textarea>
                    </div>
                    <input type="hidden" name="room_id" value="<?php echo $room_id;?>"/>
                    <button type="button" id="editForm" class="btn btn-primary">Edit</button>
                    <button type="submit" class="btn btn-primary">Done</button>
                </div>
                
                <script>
                    var $j = jQuery.noConflict();
                    $j(document).ready(function(){
                        var validDate = false;
                        var isEdited = false;
                        $j("#departureDate").datepicker({
                            numberOfMonths: 2,
                            minDate: 0,
                            dateFormat: "dd/mm/yy",
                                onSelect: function (date) {
                                    var dt2 = $j('#arrivalDate');
                                    var startDate = $j(this).datepicker('getDate');
                                    var minDate = $j(this).datepicker('getDate');
                                    var d = new Date(minDate);
                                    $j('.loading').css("display","block");
                                    $j.post("<?php echo ROOT_PATH; ?>Reservations/checkStartDate",{ room_id:'<?php echo $room_id;?>',startDate: encodeURI(d.getFullYear()+'/'+(d.getMonth()+1)+'/'+d.getDate())}, function(data, status){
                                        //console.log(data+"ssss");
                                        var dataDecode = JSON.parse(data);
                                        
                                        if(!dataDecode.result){
                                            $j('.loading').css("display","none");
                                            alert("The from date is not valid with the current room from "+ dataDecode.validDate+ " and to "+ dataDecode.endDate+ ". Please book other date!");
                                        }else{
                                            $j('.loading').css("display","none");
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
                                    
                                    $j.post("<?php echo ROOT_PATH; ?>Reservations/checkEndDate",{ endDate: encodeURI(d.getFullYear()+'/'+(d.getMonth()+1)+'/'+d.getDate())}, function(data, status){
                                        
                                        var dataDecode = JSON.parse(data);
                                        if(!dataDecode.result){
                                            alert("The to date is not valid with the current room is: "+ dataDecode.validDate+ ". Please book other date!");
                                        }else{
                                            validDate = true;
                                        }
                                        
                                    });
                                    
                                }
                            
                        });
                       
                        $j("#editForm").click(function(){
                            isEdited == true;
                            $j("#firstName").removeAttr("disabled");
                            $j("#lastName").removeAttr("disabled");
                            $j("#phonenumber").removeAttr("disabled");
                            $j("#email").removeAttr("disabled");
                            $j("#departureDate").removeAttr("disabled");
                            $j("#arrivalDate").removeAttr("disabled");
                            $j("#numOfAdult").removeAttr("disabled");
                            $j("#numOfChildren").removeAttr("disabled");
                            $j("#comment").removeAttr("disabled");
                        });
                        
                        $j("#reservedForm").submit(function(){
                            if(isEdited==true){
                                var phone = $j('#phonenumber').val(),
                                    intRegex = /[0-9 -()+]+$/;
                                if((phone.length < 6) || (!intRegex.test(phone)))
                                {
                                    $j('#phonenumber').focus();
                                    alert('Please enter a valid phone number.');
                                    return false;
                                }
                                if(!validDate){
                                    alert("the selected dates are not valid with the current room from <?php echo $dateFormat->startDate;?> to <?php echo $dateFormat->endDate;?> ");
                                    return false;
                                }
                            }else{
                                return true;
                            }
                                
                        });
                        
                        
                    });
                    
                </script>
                
            </form>                
            </div>
               