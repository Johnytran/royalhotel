<?php
class RoomListModel extends Model{
		public function Index(){
	    $this->query('SELECT * FROM rooms INNER JOIN room_type ON rooms.room_type_id=room_type.room_type_id');
		$rows = $this->resultSet();
		return $rows;
		}
		public function updateRoom(){
			$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if($post['update']){
			// Insert into MySQL
			$this->query('UPDATE rooms SET is_book=:is_book,check_in_date=:check_in_date,check_out_date=:check_out_date,number_of_adult=:number_of_adult,number_of_child=:number_of_child,comment=:comment,payment=:payment WHERE room_id=:room_id');
			$this->bind(':is_book',$post['is_book']);
			$this->bind(':check_in_date', $post['check_in_date']);
			$this->bind(':check_out_date', $post['check_out_date']);
			$this->bind(':number_of_adult', $post['number_of_adult']);
			$this->bind(':number_of_child', $post['number_of_child']);
			$this->bind(':comment', $post['comment']);
			$this->bind(':payment', $post['payment']);
			$this->bind(':room_id',$post['room_id']);
			
			$this->execute();
			Messages::setMsg('you have successfully updated ', 'successMsg');
			return;
			
			
			// Verify
/*			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'Reservations');
			}*/
		}
		}
}