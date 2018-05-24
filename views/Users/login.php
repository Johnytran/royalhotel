<?php if(!isset($_SESSION[is_logged_in])) : ?>
<div class="row justify-content-center mt-5 mb-5 mr-0" >
<div class="card  ">
<article class="card-body">
	<h4 class="card-title text-center mb-4 mt-1 ">Sign in</h4>
	<hr>
	<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
	<div class="form-group">
	<div class="input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
		<input name="email" class="form-control" placeholder="Email or login" type="text">
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
	<div class="form-group">
	<button type="submit" class="btn btn-primary btn-block" name="submit" value="submit"> Login  </button>
	</div> <!-- form-group// -->
	<p class="text-center"><a href="#" class="btn">Forgot password?</a></p>
	<a href="<?php echo ROOT_PATH; ?>Users/register" class="btn btn-primary btn-block"> Do not have an account? Sign up now?  </a>
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