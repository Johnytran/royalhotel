<?php 
date_default_timezone_set('Australia/Sydney'); 

?>
<?php if($_SESSION['user_data']['is_staff']==1) : ?>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Add New Event</h3>
  </div>
  <div class="panel-body">
    <form method="post" enctype="multipart/form-data">
    	<div class="form-group">
    		<label>Event Title</label>
    		<input type="text" name="event_title" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Event content</label>
    		<textarea name="event_content" class="form-control"></textarea>
    	</div>
    	<div class="form-group">
    	    <label>Event Start Date</label>
            <input type="date" name="event_start_date" required="Please choose the start date of event">
        </div>
        <div class="form-group">
    	    <label>Event Image</label>
            <input type="file" name="event_image" accept="*/image">
        </div>
        
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
        <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>EventList">Cancel</a>
    </form>
  </div>
</div>
<?php else: 
	 echo("<script> 
    $(\"#userError\").show();
    $(\"#userError\").text(\"Sorry, you are not admin or not login yet  \");
  
  </script>")
?>

<?php endif; ?>