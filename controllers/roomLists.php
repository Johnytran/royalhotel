<?php
class RoomList extends Controller{
	protected function Index(){
		$viewmodel = new RoomListModel();
		$this->returnView($viewmodel->Index(), true);
	}
		protected function updateRoom(){
		$viewmodel = new RoomListModel();
		$this->returnView($viewmodel->updateRoom(), true);
	}
}