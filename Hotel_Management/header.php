<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel management system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Hotel Management System</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="Home.php">Home</a></li>
            <!-- <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hotel <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Reservation</a></li>

              </ul>e
            </li> -->
            <?php
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            ?>
            <?php
            if(isset($_SESSION['userId'])){?>
                <li><a href="room-list.php">Rooms</a></li>
                <li><a href="personal-reservation.php">Personal Reservation</a></li>
            <?php
            }
            ?>

            <?php
                if(isset($_SESSION['admin'])){?>
                    <li><a href="room-manage.php">Room Manage</a></li>
                    <li><a href="reservation-manage.php">Reservation Manage</a></li>

            <?php
                }
            ?>
            <li><a href="#">About</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span>  <?= isset($_SESSION['user'])?$_SESSION['user']:"Sign Up";?> </a></li>
            <li><a href="<?=isset($_SESSION['user'])?'logout.php':'Login.php'?>"><span class="glyphicon glyphicon-log-in"></span><?= isset($_SESSION['user'])?" LogOut":"Login"?></a></li>
        </ul>
    </div>
</nav>

<div class="container" style="margin-bottom: 150px">