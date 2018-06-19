<?php if($_SESSION['user_data']['is_staff']==1) : ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding:0;"><!--navbar for display menu-->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link mr-5" href="<?php echo ROOT_PATH; ?>RoomList"  >ROOM MANAGEMENT  </a>
      </li>
      <li class="nav-item mr-5 ">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>UserList" >USER MANAGEMENT</a>
      </li>
      <li class="nav-item mr-5 ">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>Feedbacks/feedBackList" style="color:red;" >FEEDBACK MANAGEMENT <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item mr-5 ">
        <a class="nav-link" href="<?php echo ROOT_PATH; ?>EventList" >EVENT MANAGEMENT</a>
      </li>
    </ul>
  </div>
</nav><!--end navbar for display menu-->


<div class="container">
	 <h2>Hello Admin</h2>
  <h3>This is the list of feedbacks of hotel</h3>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>User Name</th>
        <th>Title</th>
        <th>Body</th>
        <th>Create Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php foreach($viewmodel as $item) : ?> <!--list all the room-->
      <tr>
        <td><?php echo $item["name"]; ?></td>
        <td><?php echo $item["title"]; ?></td>
        <td><?php echo $item["body"]; ?></td>
        <td><?php echo $item["create_date"]; ?></td>
        <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
            <input type="hidden" name="delete_feedback_id" value="<?php echo $item['feedback_id']; ?>"/>
            <td><input type="submit" name="delete" value="DELETE" class="btn btn-primary btn-sm"/></td>
        </form>
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
