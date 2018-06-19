<?php
class CompleteModel extends Model{
	public function Index(){
		//die('test');
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		//if($post['submit']){
			// $this->query('SELECT * FROM rooms WHERE room_id = :room_id');
			// $this->bind(':room_id',$post['room_id']);
			// $row = $this->single();
			// if($row){
			// 	//check room available from store this room_id session
			// 	$_SESSION['rooms_data'] = array(
			// 		"room_id"	=> $row['room_id'],
			// 		"is_book"=>$row['is_book']
			// 	);
			// if($_SESSION['rooms_data']['is_book']==true)
			// {
			// 	Messages::setMsg('Sorry, the room was booked ', 'error');
			// 	 return;
			// }
			// }
			$check_in_date = explode("/",$post['departureDate']);
			$check_out_date = explode("/",$post['arrivalDate']);
			
			$check_in_datef = $check_in_date[2].'/'.$check_in_date[1].'/'.$check_in_date[0];
			$check_out_datef = $check_out_date[2].'/'.$check_out_date[1].'/'.$check_out_date[0];
			//print_r($post);
			// die;
			$this->query('UPDATE rooms SET is_book=:is_book,check_in_date=:check_in_date,check_out_date=:check_out_date,number_of_adult=:number_of_adult,number_of_child=:number_of_child,comment=:comment,user_id=:user_id,payment=:payment WHERE room_id=:room_id');
			$this->bind(':is_book',true);
			$this->bind(':check_in_date', $check_in_datef);
			$this->bind(':check_out_date', $check_out_datef);
			$this->bind(':number_of_adult', $post['numOfAdult']);
			$this->bind(':number_of_child', $post['numOfChildren']);
			$this->bind(':comment', $post['comment']);
			$this->bind(':user_id', $_SESSION['user_data']['user_id']);
			$this->bind(':payment', $post['payment']);
			$this->bind(':room_id',$post['room_id']);
			
			$this->execute();
			Messages::setMsg('you have successfully booked this room ', 'successMsg');
			return;
			
			// Insert into MySQL
			// $this->query('UPDATE rooms SET is_book=:is_book,check_in_date=:check_in_date,check_out_date=:check_out_date,number_of_adult=:number_of_adult,number_of_child=:number_of_child,comment=:comment,user_id=:user_id,payment=:payment WHERE room_id=:room_id');
			// $this->bind(':is_book',true);
			// $this->bind(':check_in_date', $post['check_in_date']);
			// $this->bind(':check_out_date', $post['check_out_date']);
			// $this->bind(':number_of_adult', $post['number_of_adult']);
			// $this->bind(':number_of_child', $post['number_of_child']);
			// $this->bind(':comment', $post['comment']);
			// $this->bind(':user_id', $_SESSION['user_data']['user_id']);
			// $this->bind(':payment', $post['payment']);
			// $this->bind(':room_id',$post['room_id']);
			
			// $this->execute();
			// Messages::setMsg('you have successfully booked this room ', 'successMsg');
			// return;
				
				
				// Verify
	/*			if($this->lastInsertId()){
					// Redirect
					header('Location: '.ROOT_URL.'Reservations');
				}*/
		//}
	}
}