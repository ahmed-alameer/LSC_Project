<?php include_once('includes/header.php'); ?>
<?php include_once('includes/helper_fn.php'); ?>

<h1>Peer tutor Home</h1>


<?php include_once('includes/footer.php');


if (isset($_SESSION['success'])) {

    $success = $_SESSION['success'];
    show_alert($success, 'success');
}