<?php
class Confirmation extends Controller{
	
	protected function Index(){
		
		$viewmodel = new PaymentModel();
		$this->returnView($viewmodel->Index(), true);
		
	}
	
}