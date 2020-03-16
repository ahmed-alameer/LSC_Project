<?php


include("../init.php");


$base_class = new Base_Class();

$sql = "select * from pt_weekly_schedule  wk , schedule_time st where  wk.sch_time_id = st.sch_time_id ";
$base_class->normal_query($sql);
$rows = $base_class->all_rows();

$count = $base_class->count_rows();


$output = " 
 <table class='table table-hover table-bordered'>
     <thead>
         <tr class='text-white'>
             <th>ID</th>
             <th>Time</th>
             <th>Day</th>
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
                <td>$row->pt_w_sch_id</td>
                <td>$row->sch_time</td>
                <td>$row->pt_w_sch_day</td>
               
                <td><button class='btn btn-danger btn-sm delete-sch'  id='$row->pt_w_sch_id'><span class='glyphicon glyphicon-remove-sign'></span></button></td>
          
                </tr>
    ";
    }
} else {

    $output .= "<tr>
                <td colspan='9' align='center' >No Data Found</td>
               
            </tr>
            
    ";
}

$output .= "</tbody>
</table>";


echo $output;