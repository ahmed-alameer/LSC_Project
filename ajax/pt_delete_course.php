<?php


session_start();

include('../init.php');


$base_class = new Base_Class();

$pt_id = $_SESSION['pt']['id'] ? $_SESSION['pt']['id'] : 0;





$id =  $_POST['id'];

$sql = "delete from pt_courses where pt_course_id = ?";


$base_class->normal_query($sql, [$id]);

$count =   $base_class->count_rows();

if ($count > 0) {

    $response = ['status' => 'success'];
} else {

    $response = ['status' => 'error'];
}


echo json_encode($response);