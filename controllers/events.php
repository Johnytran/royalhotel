<?php
class Events extends Controller{
	protected function Index(){
		$viewmodel = new EventModel();
		$this->returnView($viewmodel->Index(), true);
	}
}