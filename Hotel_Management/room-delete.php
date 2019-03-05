<?php

require_once 'database.php';
$id = $_GET['id'];
$query = "delete from room where id = '$id'";
db_delete($query);
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$_SESSION['msg']="Room Deletion is successful";
header('Location: room-manage.php');

?>