<?php
class Events extends Controller{
	protected function Index(){
		$viewmodel = new EventModel();
		$this->returnView($viewmodel->Index(), true);
	}
	protected function expiredEvent(){
		$viewmodel = new EventModel();
		$this->returnView($viewmodel->expiredEvent(), true);
	}
		protected function happeningEvent(){
		$viewmodel = new EventModel();
		$this->returnView($viewmodel->happeningEvent(), true);
	}
}