<?php if($_SESSION['user_data']['is_staff']==1) : ?>
<div class="row m-0 justify-content-center mt-5">
            	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="Room">Room</label>
                                
                                <select class="custom-select" required name="room_id">
                                    <option selected>Choose...</option>
                                    <option disabled > Single room</option>
                                      <option value="1" >102</option>
                                      <option value="2" >103</option>
                                      <option value="3" >104</option>
                                    <option disabled>Double room</option>
                                      <option value="4" >202</option>
                                      <option value="5" >203</option>
                                      <option value="6" >204</option>
                                    <option disabled>Luxury room</option>
                                      <option value="7" >302</option>
                                      <option value="8" >303</option>
                                      <option value="9" >304</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Payment method</label>
                                    <select class="custom-select"  name="payment">
                                    <option value="" selected>Choose...</option>
                                    <option value="MASTER_CARD">MASTER_CARD</option>
                                    <option value="CREDIT_CARD">CREDIT_CARD</option>
                                    <option value="PAYPAL">PAYPAL</option>
                                </select>
                            </div>
                            
                            
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label for="departureDate">Checkin Date</label>
                                <input type="date" class="form-control datepicker"  id="departureDate" name="check_in_date" placeholder="dd/mm/yy" value="<?php echo $_SESSION['rooms_data']['check_in_date']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="arrivalDate">Checkout Date</label>
                                <input type="date" class="form-control datepicker"  id="arrivalDate"  name="check_out_date" placeholder="dd/mm/yy"  value="<?php echo $_SESSION['rooms_data']['check_out_date']; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="numOfAdults">Num of Adults</label>
                                
                                <select class="custom-select" required name="number_of_adult"  value="<?php echo $_SESSION['rooms_data']['number_of_adult']; ?>">
                                    <option value="0" selected>Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="numOfChildren">Num of Child</label>
                                    <select class="custom-select" required name="number_of_child"  value="<?php echo $_SESSION['rooms_data']['number_of_child']; ?>">
                                    <option value="0" selected>Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label>Status of room</label>
                                    <select class="custom-select" required name="is_book"  value="<?php echo $_SESSION['rooms_data']['is_book']; ?>">
                                    <option value="0">Available</option>
                                    <option value="1">Reserved</option>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label for="questionComments">Question / Comments</label>
                        <textarea class="form-control" id="comment" name="comment" placeholder="Please put your comment here"  value="<?php echo $_SESSION['rooms_data']['comment']; ?>">
                            
                        </textarea>
                    </div>
                   <input type="submit" class="btn btn-primary" name="update"> 
                   <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>RoomList">Cancel</a>
                </div>
                
            </form>                
            </div>
<?php else: 
	 echo("<script> 
    $(\"#userError\").show();
    $(\"#userError\").text(\"Sorry, you are not admin or not login yet  \");
  
  </script>")
?>

<?php endif; ?>