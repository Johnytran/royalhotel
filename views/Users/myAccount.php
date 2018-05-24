<?php if(!isset($_SESSION['is_logged_in'])) : 
  //  Messages::setMsg('You need to login', 'error');
  echo("<script> 
    $(\"#userError\").show();
    $(\"#userError\").text(\"Your profile not available! Please do login \");
  
  </script>")
?>
<?php else:  ?>
    <div class="container">
    <div class="row my-5">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Profile</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">History of reserve</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Edit Profile</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <h3 class="mb-3">Your Profile</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Your Name</h6>
                            <p>
                                <?php echo $_SESSION['user_data']['name']; ?>
                            </p>
                            <h6>Your Phone Number</h6>
                            <p>
                                <?php echo $_SESSION['user_data']['phone']; ?>
                            </p>
                            <h6>Your Email</h6>
                            <p>
                                <?php echo $_SESSION['user_data']['email']; ?>
                            </p>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    
                </div>
                <div class="tab-pane" id="edit">
                    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                       
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Your Name</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="name" type="text" value="<?php echo $_SESSION['user_data']['name']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Your Phone Number</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="phone" type="text" value="<?php echo $_SESSION['user_data']['phone']; ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Your Email</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="email" type="text" value="<?php echo $_SESSION['user_data']['email']; ?>">
                            </div>
                        </div>
                         <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="submit" name="submit" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <h1>Welcome <?php echo $_SESSION['user_data']['name'] ?></h1>
            <a class="btn btn-primary ml-2" href="<?php echo ROOT_URL; ?>users/logout"> Logout</a>
        </div>
    </div>
</div>
<?php endif; ?>
 
