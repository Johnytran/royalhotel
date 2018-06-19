<?php if(!isset($_SESSION[is_logged_in])) : ?>
<div class="row justify-content-center mt-5 mb-5 mr-0" >
<div class="card  ">
<article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1">Sign Up Your Account</h4>
	<hr>
	<form method="post" id="loginForm" action="<?php $_SERVER['PHP_SELF']; ?>">
  	  <div class="form-group">
  	<div class="input-group">
  		<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
  		 </div>
  		<input name="name" class="form-control" placeholder="Your Name" type="text">
  	</div> <!-- input-group.// -->
  	</div> <!-- form-group// -->
  	<div class="form-group">
  	<div class="input-group">
  		<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fas fa-phone"></i> </span>
  		 </div>
  		<input name="phone" id="phonenumber" class="form-control" placeholder="Your Phone Number" type="text">
  	</div> <!-- input-group.// -->
  	</div> <!-- form-group// -->
  	<div class="form-group">
  	<div class="input-group">
  		<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fas fa-envelope"></i> </span>
  		 </div>
  		<input name="email" id="email" class="form-control" placeholder="Email or login" type="text">
  	</div> <!-- input-group.// -->
  	</div> <!-- form-group// -->
  	<div class="form-group">
  	<div class="input-group">
  		<div class="input-group-prepend">
  		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
  		 </div>
  	    <input class="form-control" placeholder="******" type="password" name="password">
  	</div> <!-- input-group.// -->
  	</div> <!-- form-group// -->
  	<!-- Filled-in checkbox -->
    <div class="form-check">
        <input class="form-check-input filled-in" type="checkbox" value="" id="filledInCheckbox1" required>
        <label class="form-check-label" for="filledInCheckbox1">
             <a href="#">Accept privacy and terms of use?</a>
        </label>
    </div>
    <p class="ml-1"><a href="<?php echo ROOT_PATH; ?>Users/login" class="btn">Already have an account?</a></p>
  	<div class="form-group">
  	<button type="submit" class="btn btn-primary btn-block" name="submit" value="submit"> Register  </button>
  	</div> <!-- form-group// -->
  	<!--<script>
		 $j("#loginForm").submit(function(){
                            var phone = $j('#phonenumber').val(),
                                intRegex = /[0-9 -()+]+$/;
                            var email = $j('#email').val();
                            if((phone.length < 6) || (!intRegex.test(phone)))
                            {
                                $j('#phonenumber').focus();
                                alert('Please enter a valid phone number.');
                                return false;
                            }
                             
                            if((email.length == 0))
                            {
                                $j('#email').focus();
                                alert('Please fill the mail');
                                return false;
                            }
                        });
	</script>-->
	</form>
</article>
</div> <!-- card.// -->
</div>

<?php else: 
	 echo("<script> 
    $(\"#userError\").show();
    $(\"#userError\").text(\"You already login!  \");
  
  </script>")
?>

<?php endif; ?>