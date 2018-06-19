<?php
class HomeModel extends Model{
	public function Index(){
		if($post['submit'])
		{
			header('Location: '.ROOT_URL.'listAvailableRoom');
		}
	}
	public function listAvailableRoom(){
	    $this->query('SELECT * FROM rooms INNER JOIN room_type ON rooms.room_type_id=room_type.room_type_id WHERE is_book=false');
		$rows = $this->resultSet();
		return $rows;
	}
}