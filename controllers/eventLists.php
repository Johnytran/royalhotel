<?php
class EventList extends Controller{
	protected function Index(){
		$viewmodel = new EventListModel();
		$this->returnView($viewmodel->Index(), true);
	}
	
	protected function addEvent(){
		$viewmodel = new EventListModel();
		$this->returnView($viewmodel->addEvent(), true);
	}
}