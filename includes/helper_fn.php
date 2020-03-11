<?php
function show_alert($message, $type)
{
    if ($type == 'error') {

        echo "<script>
               alertify.error($message);
              </script>";

        unset($_SESSION['error']);
    } else {



        echo "<script>
               alertify.success('$message');
            </script>";

        unset($_SESSION['success']);
    }
}