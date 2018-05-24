<?php
class RoomModel extends Model{
		public function Index(){
	    $this->query('SELECT * FROM room_type ORDER BY room_type_id ASC');
		$rows = $this->resultSet();
		return $rows;
		}
}