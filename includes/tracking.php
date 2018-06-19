<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <?php 
      session_start();
      //echo $_SESSION['track_active'];
      if($_SESSION['track_active']>=1){
        ?>
        <a href="<?php echo ROOT_PATH; ?>reservations">Customer</a>
      <?php }else{
      ?>
        Customer
      <?php }
      ?>
    </li>
    <li class="breadcrumb-item" >
      <?php 
      if($_SESSION['track_active']>=2){
        ?>
        <a href="<?php echo ROOT_PATH; ?>payment">Payment</a>
      <?php }else{
      ?>
        Payment
      <?php }
      ?>
      </li>
    <li class="breadcrumb-item">
      <?php 
      if($_SESSION['track_active']>=3){
        ?>
        <a href="<?php echo ROOT_PATH; ?>confirmation">Confirmation</a>
      <?php }else{
      ?>
        Confirmation
      <?php }
      ?>  
    </li>
    <li class="breadcrumb-item active">
      <?php 
      if($_SESSION['track_active']>=4){
        ?>
        <a href="<?php echo ROOT_PATH; ?>complete">Complete</a>
      <?php }else{
      ?>
        Complete
      <?php }
      ?>
      
    </li>
  </ol>
</nav>