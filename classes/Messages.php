<?php



class Messages
{


    public function set_message($text, $type)
    {

        session_start();

        if ($type == "error") {

            $_SESSION['msg'] = [
                'type' => 'error',
                'text' => $text

            ];
        } elseif ($type == "success") {

            $_SESSION['msg'] = [
                'type' => 'success',
                'text' => $text

            ];
        }
    }

    public function show_message()
    {


        if (isset($_SESSION['msg'])) {


            if ($_SESSION['msg']['type'] == 'error') {



                $msg_text = $_SESSION['msg']['text'];

                echo "<script>
                   alertify.error('$msg_text');
                  </script>";

                unset($_SESSION['msg']);
            } elseif ($_SESSION['msg']['type'] == 'success') {

                $msg_text = $_SESSION['msg']['text'];

                echo "<script>
                   alertify.success('$msg_text');
                  </script>";

                unset($_SESSION['msg']);
            }
        }
    }
}