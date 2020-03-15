<?php


session_start();

include('../init.php');


$base_class = new Base_Class();

$pt_id = $_SESSION['pt']['id'] ? $_SESSION['pt']['id'] : 0;


$course_code =  $base_class->security($_POST['course_code']);
$subject =  $base_class->security($_POST['subject']);

$sql = "insert into pt_courses(pt_id , pt_course_code , pt_subject) values(?,?,?)";


$base_class->normal_query($sql, [

    $pt_id, $course_code, $subject
]);

$count =   $base_class->count_rows();

if ($count > 0) {

    $status = "success";

    $response = ['status' => $status];
}



echo json_encode($response);