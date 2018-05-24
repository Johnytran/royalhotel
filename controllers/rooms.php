<?php
class Rooms extends Controller{
	protected function Index(){
		$viewmodel = new RoomModel();
		$this->returnView($viewmodel->Index(), true);
	}
}