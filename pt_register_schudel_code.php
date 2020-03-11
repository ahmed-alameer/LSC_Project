<?php
session_start();


include('config.php');

if (isset($_POST['login'])) {

    $user = $_POST['user_name'];
    $pass = $_POST['pass'];

    $sql = "select * from peer_tutor where pt_st_id = ? and pt_password = ?";
    $stmt = $conn->prepare($sql);

    $stmt->execute([$user, $pass]);

    $count = $stmt->rowCount();

    if ($count > 0) {

        header("Location:pt_home.php");
    } else {

        $_SESSION['error'] = "Wrong User";

        header("Location:pt_login.php");
    }
}
