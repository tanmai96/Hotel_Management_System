<?php

include_once "header.php";
require_once 'database.php';

if(isset($_POST['submit'])){

    $name = $_POST['userName'];
    $pass = $_POST['pass'];
    $data = db_select("select * from user where user_name='$name' && password='$pass'");
    if($data!=null) {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['user'] = $name;
        $_SESSION['userId'] = $data[0]['user_id'];
        header('Location: Home.php');
    }
}

?>

<form action="Login.php" method="post">

    <div class="col-md-4 col-md-offset-4" style="border: 2px solid #c7254e;background: #EAEAEA;padding: 10px">
        <h4 style="padding-left: 25%">Registration Form</h4>
        <div class="form-group">
            <label>User Name:</label>
            <input name="userName" class="form-control" placeholder="Input user name" value="" required>
        </div>


        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="pass" class="form-control" placeholder="Password" value="" required>
        </div>

        <input type="submit" name="submit" class="btn btn-success col-md-offset-4" value="Log IN" >
    </div>

</form>

<?php
include_once "footer.php";
?>


