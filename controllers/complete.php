<?php
class Complete extends Controller{
	
	protected function Index(){
		
		$viewmodel = new CompleteModel();
			
		$this->returnView($viewmodel->Index(), true);
		
	}
	
}