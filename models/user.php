<?php
class UserModel extends Model{
	public function register(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);

		if($post['submit']){
			if($post['name'] == '' || $post['email'] == '' || $post['password'] == ''||$post['phone']==''){
				Messages::setMsg('Please Fill In All Fields', 'error');
				return;
			}
			
			if( filter_var($post['email'], FILTER_VALIDATE_EMAIL ) == false ){
    			 Messages::setMsg('Invalid email address, The email address must be have @ ', 'error');
				 return;
			 }
			 if( filter_var($post['phone'], FILTER_SANITIZE_NUMBER_INT ) == false){
		    	 Messages::setMsg('Please enter a valid phone number', 'error');
				 return;
		    }
		    if (strlen($post['phone']) >=12) {
		    	Messages::setMsg('Please enter a valid phone number and the phone number must be no more than 11 digits', 'error');
				return;
		    }
			if( strlen( $post['password'] ) < 8 ){
    			 Messages::setMsg('Password must be at least 8 characters', 'error');
				 return;
		    }
		    

			// Insert into MySQL
			$this->query('INSERT INTO users (name, phone, email, password) VALUES(:name, :phone, :email, :password)');
			$this->bind(':name', $post['name']);
			$this->bind(':phone', $post['phone']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->execute();
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'Users/login');
			}
		}
		return;
	}

	public function login(){
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);//hash password 

		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM users WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"user_id"	=> $row['user_id'],
					"name"	=> $row['name'],
					"email"	=> $row['email'],
					"phone" => $row['phone'],
					"is_staff"=>$row['is_staff']
				);
				if($_SESSION['user_data']['is_staff']==0){//login with user will go to home page
					header('Location: '.ROOT_URL);
				}
				else//login with admin will go to Room management page
				{
					header('Location: '.ROOT_URL.RoomList);
				}
			} else {
				Messages::setMsg('Incorrect Login, Please try again', 'error');
			}
		}
		return;
	}
	
		public function myAccount(){
			 /*$this->query('SELECT * FROM users');
			$rows = $this->resultSet();
			return $rows;*/
			
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
			if($post['submit']){//set update profile
			
				$this->query('UPDATE users SET name = :name, phone = :phone, email= :email WHERE user_id = :user_id');
				$this->bind(':name', $post['name']);
				$this->bind(':phone', $post['phone']);
				$this->bind(':email', $post['email']);
				$this->bind(':user_id',$_SESSION['user_data']['user_id']);
				$this->execute();
					Messages::setMsg('Your profile has been updated in database, Please re-login to see how it change', 'success');
			}
		
		}
}
