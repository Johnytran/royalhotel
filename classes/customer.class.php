<?php
class Customer extends Database{
  public $errors = array();
  public function __construct(){
    parent::__construct();
  }
  public function register($email,$password){
    $errors = array();
    
    //check the email
    if( filter_var($email, FILTER_VALIDATE_EMAIL ) == false ){
      $errors["email"] = "invalid email address";
    }
    //validate the password
    if( strlen( $password ) < 6 && preg_match('/[A-Z]/', $password)){
      $errors["password"] = "password must be at least 6 characters and contain a upper letter";
    }
    
    if( count($errors) == 0 ){
      $query = 'INSERT INTO customers 
      (email,password,created,lastseen)
      VALUES
      ( ? , ?, NOW(), NOW() )';
      $statement = $this -> connection -> prepare( $query );
      //hash the password
      $hash = password_hash($password, PASSWORD_DEFAULT );
      //bind parameters
      $statement -> bind_param('ss', $email, $hash );
      //execute query
      if( $statement -> execute() ){
        return true;
      }
      else{
        //database error
        return false;
      }
    }
    else{
      //process errors
    }
    
  }
}
?>