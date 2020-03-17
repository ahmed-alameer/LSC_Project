<?php
include_once('includes/header.php');
include_once('init.php');

$message = new Messages();
$message->show_message();

$pt_id =  $_SESSION['pt']['id'] ?  $_SESSION['pt']['id'] : 0;


?>
<div class="container">


    <div class="row ">

        <h1 class="margin-top text-success text-center">Peer Tutor Register Courses And Schudel Page</h1>


        <div class="col-sm-offset-1 col-sm-5 text-center">
            <h2>Courses</h2>

            <form class="content" id="form_courses">


                <div class="form-group">

                    <input class="form-control" type="text" placeholder="Course Code " name="course_code"
                        id="course_code">
                </div>

                <div class="form-group">

                    <input class="form-control" type="text" placeholder="Subject" name="subject" id="subject">

                </div>

                <div class="form-group">
                    <input class="btn btn-success btn-block " name="register_courses" id="register_courses"
                        type="button" value="Register Courses">
                </div>

            </form>


        </div>



        <div class=" col-sm-5 text-center">
            <h2>Weekly Schedule</h2>

            <form method="POST" class="content" id="form_schedule">



                <div class="form-group">

                    <select name="sch_time_id" id="sch_time_id" class="form-control">
                        <option value="">Select Time</option>

                        <?php
                        $base_class = new Base_Class();
                        $base_class->normal_query("select * from schedule_time");
                        $hours = $base_class->all_rows(); ?>


                        <?php foreach ($hours as $hour) :  ?>
                        <option value="<?php echo $hour->sch_time_id ?>"><?php echo $hour->sch_time ?></option>

                        <?php endforeach;  ?>

                    </select>

                </div>







                <div class="form-group">

                    <select name="pt_w_sch_day" id="pt_w_sch_day" class="form-control">
                        <option value="">Select Day</option>
                        <option value="Sunday">Sunday</option>
                        <option value="Monday">Monday</option>
                        <option value="Tusday">Tusday</option>
                        <option value="Wednesday">Wednesday</option>
                        <option value="Thursday">Thursday</option>
                    </select>

                </div>









                <div class="form-group">
                    <input class="btn btn-success btn-block " name="register_schedule" id="register_schedule"
                        type="button" value="Register Schedule">
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


        <div class=" col-sm-5 text-center">

            <div class="content">

                <div class="table-responsive" id="schedule_data">

                </div>


            </div>
        </div>
    </div>

</div>

<?php include_once('includes/footer.php'); ?>

<script>
$(document).ready(function() {

    show_courses();
    show_schedule();




    $('#register_courses').click(function(e) {



        e.preventDefault();

        add_course();

    });




    $('#register_schedule').click(function(e) {


        e.preventDefault();

        add_schedule();



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

        var sch_time_id = $('#sch_time_id').val();
        var pt_w_sch_day = $('#pt_w_sch_day').val();

        if (sch_time_id == "" || pt_w_sch_day == "") {
            alertify.error('Please Enter All Values');

            return;

        }


        $.ajax({
            type: "POST",
            url: "ajax/pt_add_schedule.php",
            dataType: "json",
            data: {
                sch_time_id: sch_time_id,
                pt_w_sch_day: pt_w_sch_day
            },
            success: function(response) {

                if (response.status == "success") {

                    alertify.success('Schedule Added Successfully');
                    show_schedule();
                    $('#form_schedule').trigger("reset");


                } else {
                    alertify.error('Schedule Not Added');
                }

            },
            error: function() {

                alertify.error('Schedule Not Added');

            }

        });

    }




    $(document).on('click', '.delete-course', function() {


        var id = $(this).attr('id')

        confirm_fnc(id);


    });




    $(document).on('click', '.delete-sch', function() {


        var id = $(this).attr('id')

        schedule_confirm_fnc(id);


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




function show_schedule() {

    $.ajax({
        method: "GET",
        url: "ajax/pt_show_schedule.php",
        success: function(response) {

            $("#schedule_data").html(response);

        },
        error: function(e) {

            console.log(e);

        }

    });


}




function confirm_fnc(id) {

    //return confirm("Are You Sure");

    return alertify.confirm('Delet Course With ID ' + id, 'Are You Sure', function() {



        $.ajax({
            type: "POST",
            url: "ajax/pt_delete_course.php",
            dataType: "json",
            data: {
                id: id
            },
            success: function(response) {

                if (response.status == "success") {

                    alertify.success('Course Deleted Successfully');
                    show_courses();


                }

            }

        });



    }, function() {

    });

}



function schedule_confirm_fnc(id) {

    //return confirm("Are You Sure");


    return alertify.confirm('Delet Course With ID ' + id, 'Are You Sure', function() {

        $.ajax({
            type: "POST",
            url: "ajax/pt_delete_schedule.php",
            dataType: "json",
            data: {
                id: id
            },
            success: function(response) {

                if (response.status == "success") {

                    alertify.success('Schedule Deleted Successfully');

                    show_schedule();

                }

            }

        });

    }, function() {

    });

}
</script>