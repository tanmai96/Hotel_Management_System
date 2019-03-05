<?php

require_once 'database.php';

if(isset($_POST['submit'])){
    $userId = $_POST['userId'];
    $roomId = $_POST['roomId'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];

    echo $userId.$roomId.$checkin.$checkout;

    $query = "INSERT INTO `reservation` (`id`, `check_in`, `check_out`, `roomId`, `userId`, `isAccepted`) VALUES (NULL, '$checkin', '$checkout', '$roomId', '$userId', '1');";
    db_insert($query);
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['msg']="Reservation request is successfully sent";

    header('Location: personal-reservation.php');
}
?>