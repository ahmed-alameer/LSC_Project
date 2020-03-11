<?php
include_once('includes/header.php');
include_once('init.php');

$message = new Messages();
$message->show_message();


?>
<div id="register_info" class="container margin-bottom">


    <div class="row ">
        <div class="col-sm-offset-2 col-sm-8 text-center">



            <h1 class="margin-top text-success">Peer Tutor Register Page</h1>


            <form action="pt_register_code.php" method="POST" class="content">





                <div class="row">
                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="number" placeholder="Peer Tutor Student Id"
                                name="pt_st_id" id="pt_st_id" value="20120000" required>

                        </div>


                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="text" value="said ali" placeholder="Peer Tutor Name"
                                name="pt_name" id="pt_name" required>

                        </div>



                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="email" value="s@gmail.com" placeholder="Peer Tutor Email"
                                name="pt_email" id="pt_email" required>

                        </div>



                    </div>

                </div>




                <div class="row">
                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="text" value="cs" placeholder="Peer Tutor Major"
                                name="pt_major" id="pt_major" required>

                        </div>



                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="text" placeholder="Peer Tutor Department"
                                name="pt_department" id="pt_department" value="cs" required>

                        </div>



                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="text" placeholder="Peer Tutor GPA Major"
                                name="pt_gpa_major" id="pt_gpa_major" value="88" required>

                        </div>


                    </div>

                </div>


                <div class="row">
                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="text" placeholder="Peer Tutor GPA Cumulate"
                                name="pt_gpa_cumul" id="user_name" value="88" required>

                        </div>



                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="text" placeholder="Peer Tutor Bank Name"
                                name="pt_bank_name" id="pt_bank_name" value="Dhofar" required>

                        </div>



                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="number" placeholder="Peer Tutor Bank Account"
                                name="pt_bank_account_no" id="pt_bank_account_no" value="1111111111111" required>

                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-sm-4">

                        <div class="form-group">

                            <input class="form-control" type="number" placeholder="Max Number Of Student To Teach"
                                name="pt_max_student_count" id="pt_max_student_count" value="4" required>

                        </div>



                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">


                            <select name="pt_gender" id="pt_gender" class="form-control" required="required">
                                <option value="">Select Peer Tutor Gender</option>
                                <option value="male" selected>Male</option>
                                <option value="female">Female</option>
                            </select>


                        </div>
                    </div>

                    <div class="col-sm-4">

                        <div class="form-group">

                            <select name="pt_teach_gender" id="pt_teach_gender" class="form-control"
                                required="required">
                                <option value="">Select Students Gender</option>
                                <option value="male">Males</option>
                                <option value="female">Females</option>
                                <option value="both" selected>Both</option>
                            </select>
                        </div>



                    </div>



                    <div class="col-sm-6">

                        <div class="form-group">

                            <input class="form-control" type="text" placeholder="Peer Tutor Phone" name="pt_phone"
                                id="pt_phone" value="99998888" required>

                        </div>


                    </div>


                    <div class="col-sm-6">

                        <div class="form-group">

                            <input class="form-control" type="password" placeholder="Peer Tutor Password"
                                name="pt_password" value="admin" id="pt_password" required>

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




<?php ?>


<?php include_once('includes/footer.php'); ?>