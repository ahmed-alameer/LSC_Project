<?php
session_start();


include('init.php');

if (isset($_POST['pt_register'])) {

    $pt_s_id = $_POST['pt_s_id'];
    $pt_name = $_POST['pt_name'];

    $pt_email = $_POST['pt_email'];
    $pt_major = $_POST['pt_major'];

    $pt_department = $_POST['pt_department'];
    $pt_gpa_major = $_POST['pt_gpa_major'];

    $pt_gpa_cumul = $_POST['pt_gpa_cumul'];
    $pass = $_POST['pt_bank_name'];

    $pt_bank_account_no = $_POST['pt_bank_account_no'];
    $pt_max_student_count = $_POST['pt_max_student_count'];

    $pt_gender = $_POST['pt_gender'];
    $pt_teach_gender = $_POST['pt_teach_gender'];


    $pt_phone = $_POST['pt_phone'];
    $pt_password = $_POST['pt_password'];


    $sql = "insert into peer_tutor(pt_s_id , pt_name , pt_eamil , pt_major) values()";

    // if ($count > 0) {


    //     header("Location:register_courses.php");
    // } else {

    //     $_SESSION['error'] = "Wrong User";

    //     header("Location:pt_login.php");
    // }
}