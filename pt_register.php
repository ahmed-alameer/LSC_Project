<?php include_once('includes/header.php'); ?>
<?php include_once('includes/helper_fn.php'); ?>


<div id="register_info" class="container margin-bottom">


    <div class="row ">
        <div class="col-sm-offset-2 col-sm-8 text-center">



            <h1 class="margin-top text-success">Peer Tutor Register Page</h1>


            <form action="pt_register_code.php" method="POST" class="content">



                <div class="row">
                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="number" placeholder="Peer Tutor Student Id" name="pt_s_id"
                                id="pt_s_id" required>

                        </div>


                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="text" placeholder="Peer Tutor Name" name="pt_name"
                                id="pt_name" required>

                        </div>



                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="text" placeholder="Peer Tutor Email" name="pt_email"
                                id="pt_email" required>

                        </div>



                    </div>

                </div>




                <div class="row">
                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="text" placeholder="Peer Tutor Major" name="pt_major"
                                id="pt_major" required>

                        </div>



                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="text" placeholder="Peer Tutor Department"
                                name="pt_department" id="pt_department" required>

                        </div>



                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="text" placeholder="Peer Tutor GPA Major"
                                name="pt_gpa_major" id="pt_gpa_major" required>

                        </div>


                    </div>

                </div>


                <div class="row">
                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="text" placeholder="Peer Tutor GPA Cumulate"
                                name="pt_gpa_cumul" id="user_name" required>

                        </div>



                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="text" placeholder="Peer Tutor Bank Name"
                                name="pt_bank_name" id="pt_bank_name" required>

                        </div>



                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="text" placeholder="Peer Tutor Bank Account"
                                name="pt_bank_account_no" id="pt_bank_account_no" required>

                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="number" placeholder="Max Number Of Student To Teach"
                                name="pt_max_student_count" id="pt_max_student_count" required>

                        </div>



                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">


                            <select name="pt_gender" id="pt_gender" class="form-control" required="required">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>


                        </div>
                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">

                            <select name="pt_teach_gender" id="pt_teach_gender" class="form-control"
                                required="required">
                                <option value="">Select Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="both">Both</option>
                            </select>
                        </div>



                    </div>



                    <div class="col-sm-6">

                        <div class="form-group">

                            <input class="form-control" type="number" placeholder="Peer Tutor Phone" name="pt_phone"
                                id="pt_phone" required>

                        </div>


                    </div>


                    <div class="col-sm-6">

                        <div class="form-group">

                            <input class="form-control" type="password" placeholder="Peer Tutor Password"
                                name="pt_password" id="pt_password" required>

                        </div>



                    </div>


                </div>

                <div class="form-group">
                    <input class="btn btn-green btn-block " name="pt_register" type="submit" value="Register">
                </div>

                <a href="pt_login.php" class="text-center btn btn-warning">Peer Tutor Login Page</a>

            </form>


        </div>
    </div>

</div>

<?php if (isset($_SESSION['error'])) {

    $error = $_SESSION['error'];
    show_alert($error, 'error');
} ?>



<?php ?>


<?php include_once('includes/footer.php'); ?>