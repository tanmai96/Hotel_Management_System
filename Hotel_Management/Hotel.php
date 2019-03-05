<?php
include_once "header.php";

if(session_status()==PHP_SESSION_NONE)
{
    session_start();
}
if(isset($_SESSION['status'])){
    echo $_SESSION['status'];
    unset($_SESSION['status']);
}
?>
<form action="Hotel_refresh.php" method="post">
    <div class="col-md-4 col-md-offset-4" style="border: 2px solid #c7254e;background: #EAEAEA;padding: 10px;">
        <h4 >Hotel Properties.</h4>
        <div class="form-group">
            <label>Hotel Name</label>
            <input name="hotel_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Hotel type</label>
            <input name="hotel_type" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input name="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label>phone</label>
            <input name="phone" class="form-control" required>
        </div>
        <input type="submit" name="submit" class="btn btn-success col-md-offset-5" value="Submit">
    </div>
</form>
<?php
include_once "footer.php";
?>
