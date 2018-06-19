<?php
class Home extends Controller{
	protected function Index(){
		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->Index(), true);
	}
	protected function listAvailableRoom(){
		$viewmodel = new HomeModel();
		$this->returnView($viewmodel->listAvailableRoom(), true);
	}
}