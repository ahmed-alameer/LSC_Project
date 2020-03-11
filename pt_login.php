<?php
include_once('includes/header.php');
include('init.php');

$message = new Messages();
$message->show_message();


?>


<div class="container">


    <div class="row ">
        <div class="col-sm-offset-4 col-sm-4 text-center">



            <h1 class="margin-top text-success">Peer Tutor Login Page</h1>


            <form action="pt_login_code.php" method="POST" class="content">



                <div class="form-group">
                    <span class="glyphicon glyphicon-user"> </span>
                    <input class="form-control" type="text" placeholder="Student Id" name="user_name" id="user_name"
                        required>

                </div>


                <div class="form-group">
                    <span class="glyphicon glyphicon-lock"> </span>
                    <input class="form-control" placeholder="Password" type="password" name="pass" id="pass" required>
                </div>

                <div class="form-group">
                    <input class="btn btn-success btn-block " name="login" type="submit" value="Login">
                </div>

                <a href="pt_register.php" class="text-center btn btn-warning">Peer Tutor Register</a>


            </form>


        </div>
    </div>

</div>

<?php if (isset($_SESSION['error'])) {

    $error = $_SESSION['error'];
    show_alert($error, 'error');
} ?>

<?php include_once('includes/footer.php'); ?>