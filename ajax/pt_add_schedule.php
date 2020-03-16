<?php


session_start();

include('../init.php');

$base_class = new Base_Class();

$pt_id = $_SESSION['pt']['id'] ? $_SESSION['pt']['id'] : 0;


$sch_time_id =  $base_class->security($_POST['sch_time_id']);
$pt_w_sch_day =  $base_class->security($_POST['pt_w_sch_day']);

$sql = "insert into pt_weekly_schedule(pt_id , sch_time_id , pt_w_sch_day) values(?,?,?)";


$base_class->normal_query($sql, [

    $pt_id, $sch_time_id, $pt_w_sch_day
]);

$count =   $base_class->count_rows();

if ($count > 0) {

    $status = "success";

    $response = ['status' => $status];
}



echo json_encode($response);