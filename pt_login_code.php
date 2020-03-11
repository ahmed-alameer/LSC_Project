<?php
session_start();


//include('config.php');

include("init.php");

if (isset($_POST['login'])) {

    // $user = $_POST['user_name'];
    // $pass = $_POST['pass'];

    // $sql = "select * from peer_tutor where pt_st_id = ? and pt_password = ?";
    // $stmt = $conn->prepare($sql);

    // $stmt->execute([$user, $pass]);

    // $count = $stmt->rowCount();

    // if ($count > 0) {

    //     header("Location:pt_home.php");
    // } else {

    //     $_SESSION['error'] = "Wrong User";

    //     header("Location:pt_login.php");
    // }


    $base_class = new Base_Class();
    $user = $base_class->security($_POST['user_name']);
    $pass = $base_class->security($_POST['pass']);
    $sql = "select * from peer_tutor where pt_st_id = ?";
    $base_class->normal_query($sql, [$user]);
    $db_row = $base_class->single_row();


    $count = $base_class->count_rows();



    if ($count > 0) {

        $db_pass = $db_row->pt_password;

        if (password_verify($pass, $db_pass)) {

            $_SESSION['success'] = "User Loged in";

            header("Location:pt_home.php");
        } else {


            $_SESSION['error'] = "Wrong Password";
            header("Location:pt_login.php");
        }
    } else {

        $_SESSION['error'] = "Wrong User";

        header("Location:pt_login.php");
    }
}