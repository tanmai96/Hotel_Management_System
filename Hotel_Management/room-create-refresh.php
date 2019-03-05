<?php

require_once 'database.php';

if(isset($_POST['submit'])){
    $roomNo = $_POST['roomNo'];
    $type = $_POST['type'];
    $phone = $_POST['telephone'];
    $rate = $_POST['rate'];

    $query = "INSERT INTO `room` (`id`, `roomId`, `Room_type`, `Rate`, `Phone_no`,isReserved) VALUES (NULL, '$roomNo', '$type', '$rate', '$phone','0');";
//    echo $query;
    db_insert($query);
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['msg']="Room creation is successful";

    header('Location: room-manage.php');
}
?>