<?php

require_once 'database.php';

if(isset($_POST['submit'])){
    $name = $_POST['userName'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $pass = $_POST['pass'];
    $conPass = $_POST['conPass'];

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(strcmp($pass,$conPass)){

        $_SESSION['msg']="Confirm Password is incorrect";


    }else{
        $query = "INSERT INTO `user` (`user_id`, `user_name`, `address`, `gender`, `password`, `contact`) VALUES (NULL, '$name', '$address', '$gender', '$pass', '$phone');";
        db_insert($query);
        $_SESSION['msg']="Registration is successful";
    }
    header('Location: registration.php');
}
?>