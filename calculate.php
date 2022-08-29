<?php

 $no1 = $_POST["no1"];
 $no2 = $_POST["no2"];

 $arthematic_operation = $_POST['arth_oper'];
 
/* using if condation 
 if($arthematic_operation == 'sum_oper') {
     $cal_val = $no1 + $no2;
 } else if ($arthematic_operation == 'sub_oper'){
    $cal_val = $no1 - $no2;
 } else if ($arthematic_operation == 'multip_oper') {
    $cal_val = $no1 * $no2;
 } else {
    $cal_val = $no1 / $no2;
 }
*/

// switch condation 
switch($arthematic_operation) {
    case "sum_oper";
    $cal_val = $no1 + $no2;
    break;
    case "sub_oper";
    $cal_val = $no1 - $no2;
    break;
    case "multip_oper";
    $cal_val = $no1 * $no2;
    break;
    default:
    $cal_val = $no1 / $no2;




}
echo $cal_val;


?>