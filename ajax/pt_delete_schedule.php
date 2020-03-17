<?php


session_start();

include('../init.php');


$base_class = new Base_Class();

$pt_id = $_SESSION['pt']['id'] ? $_SESSION['pt']['id'] : 0;





$id =  $_POST['id'];

$id_array = explode('&', $id);

$time_id = $id_array[1];
$day = $id_array[2];




$sql = "delete from pt_weekly_schedule where pt_id = ? and sch_time_id = ? and pt_w_sch_day = ?";


$base_class->normal_query($sql, [$pt_id, $time_id, $day]);

$count =   $base_class->count_rows();

if ($count > 0) {

    $response = ['status' => 'success'];
} else {

    $response = ['status' => 'error'];
}


echo json_encode($response);