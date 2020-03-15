<?php
session_start();


include('init.php');

if (isset($_POST['pt_register'])) {

    $base_class = new Base_Class();

    $pt_st_id = $base_class->security($_POST['pt_st_id']);
    $pt_name =  $base_class->security($_POST['pt_name']);

    $pt_email =  $base_class->security($_POST['pt_email']);
    $pt_major =  $base_class->security($_POST['pt_major']);

    $pt_department =  $base_class->security($_POST['pt_department']);
    $pt_gpa_major =  $base_class->security($_POST['pt_gpa_major']);

    $pt_gpa_cumul =  $base_class->security($_POST['pt_gpa_cumul']);
    $pt_bank_name =  $base_class->security($_POST['pt_bank_name']);

    $pt_bank_account_no =  $base_class->security($_POST['pt_bank_account_no']);
    $pt_max_student_count =  $base_class->security($_POST['pt_max_student_count']);

    $pt_gender =  $base_class->security($_POST['pt_gender']);
    $pt_teach_gender =  $base_class->security($_POST['pt_teach_gender']);


    $pt_phone =  $base_class->security($_POST['pt_phone']);
    $pt_password =  $base_class->security($_POST['pt_password']);


    $pt_code_array = explode(' ', $pt_name);


    $pt_code = $pt_code_array[0][0];

    if (isset($pt_code_array[1][0])) {
        $pt_code .= $pt_code_array[1][0];
    }


    $sql = "insert into peer_tutor(pt_st_id , pt_name , pt_code ,  pt_email , pt_major , pt_department ,
     pt_gpa_major , pt_gpa_cumul , pt_bank_name , pt_bank_account_no , pt_max_student_count ,
      pt_gender , pt_teach_gender , pt_phone , pt_password) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";


    $base_class->normal_query($sql, [

        $pt_st_id, $pt_name, $pt_code, $pt_email, $pt_major, $pt_department, $pt_gpa_major,
        $pt_gpa_cumul, $pt_bank_name, $pt_bank_account_no,  $pt_max_student_count,
        $pt_gender,  $pt_teach_gender, $pt_phone, $pt_password
    ]);

    $count =   $base_class->count_rows();

    $message = new Messages();


    if ($count > 0) {

        $_SESSION['pt'] = ['id' => $base_class->last_insert_id()];

        $message->set_message("User Registered Successfully", "success");

        header("Location:pt_register_courses_schedule.php");
    } else {

        $message->set_message("User Not Registered", "error");

        header("Location:pt_register.php");
    }
}