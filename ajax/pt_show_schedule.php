<?php


include("../init.php");


$base_class = new Base_Class();

$sql = "select * from pt_courses";
$base_class->normal_query($sql);
$rows = $base_class->all_rows();

$count = $base_class->count_rows();


$output = " 
 <table class='table table-hover table-bordered'>
     <thead>
         <tr class='text-white'>
             <th>ID</th>
             <th>Course Code</th>
             <th>Subject</th>
             <th>Action</th>
         </tr>
     </thead>
     <tbody>
     ";



if ($count > 0) {

    foreach ($rows as $row) {

        $mes_confrim = "'Are You Sure'";

        $output .= "
       
        <tr>
                <td>$row->pt_course_id</td>
                <td>$row->pt_course_code</td>
                <td>$row->pt_subject</td>
                <td><button class='btn btn-danger btn-sm delete' onclick='confirm_fnc()' id='$row->pt_course_id'><span class='glyphicon glyphicon-remove-sign'></span></button></td>
            </tr>
    ";
    }
} else {

    $output .= "<tr>
                <td colspan='4' align='center' >No Data Found</td>
               
            </tr>
            
    ";
}

$output .= "</tbody>
</table>";


echo $output;