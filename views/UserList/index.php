<?php if($_SESSION['user_data']['is_staff']==1) : ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:0;"><!--navbar for display menu-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link mr-5" href="<?php echo ROOT_PATH; ?>RoomList" >ROOM MANAGEMENT  </a>
      </li>
      <li class="nav-item mr-5 ">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>UserList"  style="color:red;" >USER MANAGEMENT <span class="sr-only">(current)</span></a>
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
  <h3>This is the list of members</h3>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>User_ID</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($viewmodel as $item) : ?> <!--list all the room-->
      <tr>
        <td><?php echo $item["user_id"]; ?></td>
        <td><?php echo $item["name"]; ?></td>
        <td><?php echo $item["phone"]; ?></td>
        <td><?php echo $item["email"]; ?></td>
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
