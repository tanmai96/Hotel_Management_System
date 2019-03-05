<?php
include_once 'header.php';
$roomId = $_GET['roomId'];
$userId = $_GET['userId'];
echo $roomId.$userId;
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<form action="room-reserve-refresh.php" method="post">
    <input name="roomId" value="<?=$roomId?>" hidden>
    <input name="userId" value="<?=$userId?>" hidden>
    <div class="col-md-4 col-md-offset-4" style="border: 2px solid #c7254e;background: #EAEAEA;padding: 10px">
        <h4 style="padding-left: 20%">Welcome To Room Reservetion</h4>
        <div class="form-group">
            <label>Check In Date:</label>
            <input name="checkin" type="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Check Out date:</label>
            <input name="checkout" type="date" class="form-control" required>
        </div>
        <input type="submit" name="submit" class="btn btn-success col-md-offset-4" value="Reserve" >
    </div>

</form>




<?php
include_once 'footer.php';
?>
