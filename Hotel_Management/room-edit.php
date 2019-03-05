<?php
include_once 'header.php';
require_once 'database.php';
$id = $_GET['id'];
$query = "select * from room where id='$id'";
$data = db_select($query);
$data = $data[0];
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<form action="room-edit-refresh.php" method="post">

    <div class="col-md-4 col-md-offset-4" style="border: 2px solid #c7254e;background: #EAEAEA;padding: 10px">
        <h4 style="padding-left: 25%">Edit RooM</h4>
        <div class="form-group">
            <label>Room No:</label>
            <input type="number" name="roomNo" class="form-control" value="<?=$data['roomId']?>" required>
            <input name="id" value="<?=$id?>" hidden>
        </div>

        <div class="form-group">
            <label>Room Type:</label>
            <input name="type" class="form-control" value="<?=$data['Room_type']?>" required>
        </div>

        <div class="form-group">
            <label>Rate:</label>
            <input name="rate" class="form-control" value="<?=$data['Rate']?>" required>
        </div>

        <div class="form-group">
            <label>Telephone:</label>
            <input name="telephone" class="form-control" value="<?=$data['Phone_no']?>" required>
        </div>

        <input type="submit" name="submit" class="btn btn-success col-md-offset-4" value="Update" >
    </div>

</form>




<?php
include_once 'footer.php';
?>
