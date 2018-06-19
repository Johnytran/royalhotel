<?php
class Reservations extends Controller{
	
	private $checkout_date='';
	protected function Index(){
		
		$viewmodel = new ReservationModel();
		$this->returnView($viewmodel->Index(), true);
		
	}
	public function checkStartDate(){
		$viewmodel = new ReservationModel();
		$roomDate = $viewmodel->getRoomDate($_POST['room_id']);
		$this->checkout_date = $roomDate[0]['check_out_date'];
		$this->checkout_date = str_replace('-','/',$this->checkout_date);
		
		$roomAvailableStart = $this->checkout_date;
		$roomAvailableEnd = "2018/08/01";
		
		$startDate = $_POST['startDate'];
		//echo $roomAvailableStart.'---';
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