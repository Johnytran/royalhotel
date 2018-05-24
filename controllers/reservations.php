<?php
class Reservations extends Controller{
	protected function Index(){
		$viewmodel = new ReservationModel();
		$this->returnView($viewmodel->Index(), true);
	}
}