<?php include_once('includes/header.php'); ?>
<?php include_once('includes/helper_fn.php'); ?>


<div class="container">


    <div class="row ">
        <div class="col-sm-offset-4 col-sm-4 text-center">


            <h1 class="margin-top text-success">Peer Tutor Register Courses Page</h1>


            <form action="pt_register_courses_code_code.php" method="POST" class="content">


                <div class="form-group">

                    <input class="form-control" type="text" placeholder="Course Code " name="user_name" id="user_name" required>

                </div>


                <div class="form-group">

                    <input class="form-control" type="text" placeholder="Subject" name="supject" id="supject" required>

                </div>


                <div class="form-group">
                    <input class="btn btn-success btn-block " name="register_courses" type="submit" value="Register Courses">
                </div>


            </form>


        </div>
    </div>

</div>

<?php if (isset($_SESSION['error'])) {

    $error = $_SESSION['error'];
    show_alert($error, 'error');
} ?>

<?php include_once('includes/footer.php'); ?>