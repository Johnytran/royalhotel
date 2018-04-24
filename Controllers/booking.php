<?php
include("../includes/base.php");
$user = $_SESSION['user'];
if(isset($user) && $user->id){
    Base::Redirect("Http://".$_SERVER['SERVER_NAME']."/register.php");
}else{
    Base::Redirect("Http://".$_SERVER['SERVER_NAME']."/register.php");
}
?>