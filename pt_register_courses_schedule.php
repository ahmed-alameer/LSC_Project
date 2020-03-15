<?php
include_once('includes/header.php');
include_once('init.php');

$message = new Messages();
$message->show_message();


?>
<div class="container">


    <div class="row ">

        <h1 class="margin-top text-success text-center">Peer Tutor Register Courses And Schudel Page</h1>


        <div class="col-sm-offset-1 col-sm-5 text-center">
            <h2>Courses</h2>

            <form class="content" id="form_courses">


                <div class="form-group">

                    <input class="form-control" type="text" placeholder="Course Code " name="course_code" id="course_code">
                </div>

                <div class="form-group">

                    <input class="form-control" type="text" placeholder="Subject" name="subject" id="subject">

                </div>

                <div class="form-group">
                    <input class="btn btn-success btn-block " name="register_courses" id="register_courses" type="button" value="Register Courses">
                </div>

            </form>


        </div>



        <div class="col-sm-offset-1 col-sm-5 text-center">
            <h2>Schedule</h2>

            <form method="POST" class="content">

                <div class="form-group">



                    <select name="pt_hour" id="pt_hour" class="form-control">
                        <option value="">Select Houre</option>

                        <?php
                        $base_class = new Base_Class();
                        $base_class->normal_query("select * from schedule_hours");
                        $hours = $base_class->all_rows(); ?>


                        <?php foreach ($hours as $hour) :  ?>
                            <option value="<?php echo $hour->sc_id ?>"><?php echo $hour->sc_hour ?></option>

                        <?php endforeach;  ?>

                    </select>

                </div>




                <div class="form-group">

                    <select name="pt_day" id="pt_day" class="form-control">
                        <option value="">Select Day</option>
                        <option value="Sunday">Sunday</option>
                        <option value="Monday">Monday</option>
                        <option value="Tusday">Tusday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                    </select>

                </div>


                <div class="form-group">
                    <input class="btn btn-success btn-block " name="register_schedule" id="register_schedule" type="button" value="Register Schedule">
                </div>



            </form>
        </div>
    </div>








    <!-- Show Tables data -->


    <div class="row ">


        <div class="col-sm-offset-1 col-sm-5 text-center">

            <div class="content">

                <div class="table-responsive" id="courses_data">

                </div>



            </div>

        </div>


        <div class="col-sm-offset-1 col-sm-5 text-center">

            <div class="content">




            </div>
        </div>
    </div>

</div>

<?php include_once('includes/footer.php'); ?>

<script>
    $(document).ready(function() {

        show_courses();




        $('#register_courses').click(function(e) {



            e.preventDefault();

            add_course();

        });




        $('#register_schedule').click(function() {



        });



        function add_course() {

            var course_code = $('#course_code').val();
            var subject = $('#subject').val();

            if (course_code == "" || subject == "") {
                alertify.error('Please Enter All Values');
                return;

            }

            $.ajax({
                type: "POST",
                url: "ajax/pt_add_course.php",
                dataType: "json",
                data: {
                    course_code: course_code,
                    subject: subject
                },
                success: function(response) {

                    if (response.status == "success") {

                        alertify.success('Course Added Successfully');
                        show_courses();
                        $('#form_courses').trigger("reset");


                    }

                },
                error: function() {

                    alertify.error('Course Not Added');

                }

            });





        }




        function add_schedule() {

            var pt_hour = $('#pt_hour').val();
            var pt_day = $('#pt_day').val();

            if (pt_hour == "" || pt_day == "") {
                alertify.error('Please Enter All Values');

            } else {


            }

        }



        function show_schedule() {

            $.ajax({
                method: "GET",
                url: "ajax/pt_show_schedule.php",
                success: function(response) {

                    $("#courses_data").html(response);

                },
                error: function(e) {

                    console.log(e);

                }

            });


        }




        $(document).on('click', '.delete', function() {



        });






    });





    function show_courses() {

        $.ajax({
            method: "GET",
            url: "ajax/pt_show_courses.php",
            success: function(response) {

                $("#courses_data").html(response);

            },
            error: function(e) {

                console.log(e);

            }

        });


    }

    function confirm_fnc() {

        //return confirm("Are You Sure");

        return alertify.confirm('Delet Course', 'Are You Sure', function() {

            var id = $('.delete').attr('id');

            $.ajax({
                type: "POST",
                url: "ajax/pt_delete_course.php",
                dataType: "json",
                data: {
                    id: id
                },
                success: function(response) {

                    if (response.status == "success") {
                        show_courses();
                        alertify.success('Course Deleted Successfully');



                    }

                }

            });

        }, function() {

        });

    }
</script>