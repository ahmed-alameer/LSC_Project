<?php
include_once('../includes/header.php');
include_once('../includes/menu.php');
include_once('../init.php');

$message = new Messages();
$message->show_message();

echo password_hash('admin', PASSWORD_DEFAULT);

?>



<?php include_once('../includes/footer.php'); ?>