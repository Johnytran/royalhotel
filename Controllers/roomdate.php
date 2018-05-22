<?php
$roomAvailableStart = "2018/06/30";
$roomAvailableEnd = "2018/08/01";

$startDate = $_GET['startDate'];
$myObj = new stdClass();
if(strtotime($startDate) >= strtotime($roomAvailableStart) && strtotime($startDate) <= strtotime($roomAvailableEnd)){ 
    $myObj->result = 1;
    
}else{
    $myObj->result = 0;
}

$arrDateAva = explode("/",$roomAvailableStart);

$myObj->validDate = $arrDateAva[2].'/'.$arrDateAva[1].'/'.$arrDateAva[0];
$myJSON = json_encode($myObj);

echo $myJSON;
exit;
?>