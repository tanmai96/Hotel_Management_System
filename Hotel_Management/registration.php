<?php
include_once 'header.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<form action="registration-refresh.php" method="post">

    <div class="col-md-4 col-md-offset-4" style="border: 2px solid #c7254e;background: #EAEAEA;padding: 10px">
        <h4 style="padding-left: 25%">Registration Form</h4>
        <div class="form-group">
            <label>Name:</label>
            <input name="userName" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Address:</label>
            <input name="address" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Phone:</label>
            <input name="phone" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Gender:</label>
            <select name="gender">
                <option value="1">Male</option>
                <option value="2">Female</option>
            </select>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="pass" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Confirm Password:</label>
            <input type="password" name="conPass" class="form-control" required>
        </div>
        <input type="submit" name="submit" class="btn btn-success col-md-offset-4" value="Resgister" >
    </div>

</form>




<?php
include_once 'footer.php';
?>
