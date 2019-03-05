<?php
/**
 * Created by PhpStorm.
 * User: tanma
 * Date: 3/23/2018
 * Time: 3:48 AM
 */

        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        unset($_SESSION['user']);
        if(isset($_SESSION['admin']))unset($_SESSION['admin']);
        if(isset($_SESSION['userId']))unset($_SESSION['userId']);
        header('Location: Home.php');
?>