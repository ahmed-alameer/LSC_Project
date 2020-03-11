<?php
session_start();

include("init.php");

if (isset($_POST['login'])) {


    $base_class = new Base_Class();
    $user = $base_class->security($_POST['user_name']);
    $pass = $base_class->security($_POST['pass']);
    $sql = "select * from admin where admin_email = ?";
    $base_class->normal_query($sql, [$user]);
    $db_row =  $base_class->single_row();


    $count = $base_class->count_rows();
    $message = new Messages();

    if ($count > 0) {

        $db_pass = $db_row->admin_password;



        if (password_verify($pass, $db_pass)) {

            $message->set_message('Success Login', 'success');

            header("Location:admin_home.php");
        } else {

            $_SESSION['error'] = "Wrong Password";
            header("Location:admin_login.php");
        }
    } else {

        $message->set_message('Wronge User', 'error');

        header("Location:admin_login.php");
    }
}