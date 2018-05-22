<?php
$roomAvailableEnd = "2018/08/01";

$endDate = $_GET['endDate'];
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
?>