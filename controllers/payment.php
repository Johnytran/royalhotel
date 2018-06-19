<?php
class Payment extends Controller{
	
	protected function Index(){
		session_start();
        $_SESSION['customer_data'] = $_POST;
		$viewmodel = new PaymentModel();
		$this->returnView($viewmodel->Index(), true);
		
	}
	
}