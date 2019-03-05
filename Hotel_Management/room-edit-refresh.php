<?php

require_once 'database.php';

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $roomNo = $_POST['roomNo'];
    $type = $_POST['type'];
    $phone = $_POST['telephone'];
    $rate = $_POST['rate'];

    $query = "UPDATE `room` SET roomId='$roomNo',Room_type='$type',`Rate` = '$rate',Phone_no='$phone' WHERE `room`.`id` = '$id';";
    db_insert($query);
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $_SESSION['msg']="Room  is successfully updated";

    header('Location: room-manage.php');
}
?>