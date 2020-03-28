<?php
include_once('includes/header.php');
include_once('init.php');

$pt_id =  $_SESSION['pt']['id'] ?  $_SESSION['pt']['id'] : 0;

if ($pt_id == 0) {
    echo "<script>window.location ='index.php'</script>";
}

$message = new Messages();
$message->show_message();

$base_class = new Base_Class();

$base_class->normal_query("select * from peer_tutor where pt_id = ?", [$pt_id]);
$row = $base_class->single_row();

?>
<h1 class="text-center text-success">Peer tutor Home</h1>


<div class="container">


    <div class="row ">
        <div class=" col-sm-4 text-center ">


            <div class="content">

                <h2 class="text-white">My Messages</h2>

                <div class="table-responsive" id="courses_data">

                </div>



            </div>

        </div>




        <div class=" col-sm-4 text-center ">


            <div class="content">

                <h2 class="text-white">Send Message</h2>

                <form action="pt_send_message_code.php" method="POST">

                    <div class="form-group">


                        <textarea name="message" id="message" placeholder="Your Message Here" class="form-control"
                                  rows="3" required="required"></textarea>


                    </div>



                    <div class="form-group">
                        <input class="btn btn-success btn-block " name="send" type="submit" value="Send">
                    </div>



                </form>


                <h2 class="text-white">Status </h2>
                <?php

                $status;
                if ($row->pt_status == 0) {

                    echo $status = "<h3 class='text-white'>Your Request is Pending</h3>";
                } elseif ($row->pt_status == 1) {

                    echo $status = "<h3 class='text-white'>Your Request is Successfully Approved.<br> <br>
                                            <b>You Can Start Your Work in The Libray. </b> <br><br>
                                            Good Luck </h3>";
                } elseif ($row->pt_status == 2) {

                    echo $status = "<h3 class='text-danger'>Sorry Your Request is Rejected </h3>";
                }

                ?>

            </div>

        </div>




        <div class=" col-sm-4 text-center ">


            <div class="content">

                <h2 class="text-white">LSC Messages</h2>

                <div class="table-responsive" id="courses_data">

                </div>


            </div>

        </div>








    </div>
</div>






<?php include_once('includes/footer.php'); ?>