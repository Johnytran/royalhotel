<?php if($_SESSION['user_data']['is_staff']==1) : ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:0;"><!--navbar for display menu-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link mr-5" href="<?php echo ROOT_PATH; ?>RoomList" style="color:red;" >ROOM MANAGEMENT <span class="sr-only">(current)</span> </a>
      </li>
      <li class="nav-item mr-5 ">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>UserList" >USER MANAGEMENT</a>
      </li>
       <li class="nav-item mr-5 ">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>Feedbacks/feedBackList" >FEEDBACK MANAGEMENT </a>
      </li>
      <li class="nav-item mr-5 ">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>EventList" >EVENT MANAGEMENT</a>
      </li>
    </ul>
  </div>
</nav><!--end navbar for display menu-->


<div class="container">
	 <h2>Hello Admin</h2>
  <h3>This is the list of room of hotel</h3>   
  	<a class="btn btn-success btn-share mb-5" href="<?php echo ROOT_PATH; ?>RoomList/updateRoom">Update Room</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Room_ID</th>
        <th>Room_Number</th>
        <th>Type</th>
        <th>Status</th>
        <th>CheckIn Date</th>
        <th>CheckOut Date</th>
        <th>User ID</th>
        <th>Payment</th>
        
      </tr>
    </thead>
    <tbody>
        <?php foreach($viewmodel as $item) : ?> <!--list all the room-->
      <tr>
        <td><?php echo $item["room_id"]; ?></td>
        <td><?php echo $item["room_number"]; ?></td>
        <td><?php echo $item["room_type"]; ?></td>
        <td><?php echo $item["is_book"]; ?></td>
        <td><?php echo $item["check_in_date"]; ?></td>
        <td><?php echo $item["check_out_date"]; ?></td>
        <td><?php echo $item["user_id"]; ?></td>
        <td><?php echo $item["payment"]; ?></td>
      </tr>
      <?php endforeach ?>
      </tbody>
  </table>
  </div>
  
<?php else: 
	 echo("<script> 
    $(\"#userError\").show();
    $(\"#userError\").text(\"Sorry, you are not admin or not login yet  \");
  
  </script>")
?>

<?php endif; ?>
