<?php
class UserListModel extends Model{
		public function Index(){
	    $this->query('SELECT * FROM users');
		$rows = $this->resultSet();
		return $rows;
		}
}