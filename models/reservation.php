<?php
class ReservationModel extends Model{
	public function Index(){
		
/*		$this->query('SELECT * FROM booking INNER JOIN rooms ON booking.room_id=rooms.room_id');
		if(['booking.room_id']==['rooms.room_id']){
			$this->query('UPDATE rooms SET is_book=1 WHERE booking.room_id=rooms.room_id');
			$this->execute();
		}*/
	
		
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if($post['submit']){
			$this->query('SELECT * FROM rooms WHERE room_id = :room_id');
			$this->bind(':room_id',$post['room_id']);
			$row = $this->single();
			if($row){//check room available from store this room_id session
				$_SESSION['rooms_data'] = array(
					"room_id"	=> $row['room_id'],
					"is_book"=>$row['is_book']
				);
			if($_SESSION['rooms_data']['is_book']==true)
			{
				Messages::setMsg('Sorry, the room was booked ', 'error');
				 return;
			}
			}
			
			// Insert into MySQL
			$this->query('UPDATE rooms SET is_book=:is_book,check_in_date=:check_in_date,check_out_date=:check_out_date,number_of_adult=:number_of_adult,number_of_child=:number_of_child,comment=:comment,user_id=:user_id,payment=:payment WHERE room_id=:room_id');
			$this->bind(':is_book',true);
			$this->bind(':check_in_date', $post['check_in_date']);
			$this->bind(':check_out_date', $post['check_out_date']);
			$this->bind(':number_of_adult', $post['number_of_adult']);
			$this->bind(':number_of_child', $post['number_of_child']);
			$this->bind(':comment', $post['comment']);
			$this->bind(':user_id', $_SESSION['user_data']['user_id']);
			$this->bind(':payment', $post['payment']);
			$this->bind(':room_id',$post['room_id']);
			
			$this->execute();
			Messages::setMsg('you have successfully booked this room ', 'successMsg');
			return;
			
			
			// Verify
/*			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'Reservations');
			}*/
		}
		
	}
	public function getRoomDate($room_id){
		$this->query('Select check_out_date From rooms WHERE room_id=:room_id');
		$this->bind(':room_id',$room_id);
		$rows = $this->resultSet();
		return $rows;
	}
}