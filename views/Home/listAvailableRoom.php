<div class="container">
	 <h2>Hello There</h2>
  <h3>This is the list of available room of hotel</h3>   
  	<a class="btn btn-success btn-share mb-5" href="<?php echo ROOT_PATH; ?>Reservations">BOOK NOW</a>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Room_Number</th>
        <th>Type</th>
        
      </tr>
    </thead>
    <tbody>
        <?php foreach($viewmodel as $item) : ?> <!--list all the room-->
      <tr>
        <td><?php echo $item["room_number"]; ?></td>
        <td><?php echo $item["room_type"]; ?></td>
      </tr>
      <?php endforeach ?>
      </tbody>
  </table>
  </div>