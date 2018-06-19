<?php
class EventModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM events');
		$rows = $this->resultSet();
		return $rows;
	}
	public function expiredEvent(){
		$this->query('SELECT * FROM events');
		$rows = $this->resultSet();
		return $rows;
	}
	public function happeningEvent(){
		$this->query('SELECT * FROM events');
		$rows = $this->resultSet();
		return $rows;
	}
}