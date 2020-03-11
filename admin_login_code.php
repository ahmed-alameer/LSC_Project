<?php
session_start();

//include('config.php');

include("init.php");

if (isset($_POST['login'])) {

    // $user = $_POST['user_name'];
    // $pass = $_POST['pass'];


    // $sql = "select * from admin where admin_name = ? and admin_password = ?";
    // $stmt =  $conn->prepare($sql);

    // $stmt->execute([$user, $pass]);

    // $count = $stmt->rowCount();

    // if ($count > 0) {

    //     $_SESSION['success'] = "Success Login";

    //     header("Location:admin_home.php");
    // } else {

    //     $_SESSION['error'] = "Wrong User";

    //     header("Location:admin_login.php");
    // }



    $base_class = new Base_Class();
    $user = $base_class->security($_POST['user_name']);
    $pass = $base_class->security($_POST['pass']);
    $sql = "select * from admin where admin_email = ?";
    $base_class->normal_query($sql, [$user]);
    $db_row =  $base_class->single_row();


    $count = $base_class->count_rows();
    if ($count > 0) {

        $db_pass = $db_row->admin_password;

        if (password_verify($pass, $db_pass)) {

            $_SESSION['success'] = "User Loged in";

            header("Location:admin_home.php");
        } else {

            $_SESSION['error'] = "Wrong Password";
            header("Location:admin_login.php");
        }
    } else {

        $_SESSION['error'] = "Wrong User";

        header("Location:admin_login.php");
    }
}