<?php
class Reservations extends Controller{
	
	protected function Index(){
		
		$viewmodel = new ReservationModel();
		$this->returnView($viewmodel->Index(), true);
		
	}
	public function checkStartDate(){
		$roomAvailableStart = "2018/06/30";
		$roomAvailableEnd = "2018/08/01";
		
		$startDate = $_POST['startDate'];
		//echo $startDate.'---';
		$myObj = new stdClass();
		if(strtotime($startDate) >= strtotime($roomAvailableStart) && strtotime($startDate) <= strtotime($roomAvailableEnd)){ 
		    $myObj->result = 1;
		    
		}else{
		    $myObj->result = 0;
		}
		
		$arrDateAva = explode("/",$roomAvailableStart);
		$arrDateEnd = explode("/",$roomAvailableEnd);
		
		$myObj->validDate = $arrDateAva[2].'/'.$arrDateAva[1].'/'.$arrDateAva[0];
		$myObj->endDate = $arrDateEnd[2].'/'.$arrDateEnd[1].'/'.$arrDateEnd[0];
		
		$myJSON = json_encode($myObj);
		
		echo $myJSON;
		exit;
	}
	public function checkEndDate(){
		$roomAvailableEnd = "2018/08/01";
		$endDate = $_POST['endDate'];
		$myObj = new stdClass();
		if(strtotime($endDate) >= strtotime($roomAvailableEnd)){ 
		    $myObj->result = 0;
		    
		}else{
		    $myObj->result = 1;
		}
		
		$arrDateAva = explode("/",$roomAvailableEnd);
		
		$myObj->validDate = $arrDateAva[2].'/'.$arrDateAva[1].'/'.$arrDateAva[0];
		$myJSON = json_encode($myObj);
		
		echo $myJSON;
		exit;
	}
}