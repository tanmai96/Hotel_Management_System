<?php
include_once "database.php";

if(session_status()==PHP_SESSION_NONE){
    session_start();
}

?>

<?php
if(isset($_POST['submit']))
{
    $name=$_POST['hotel_name'];
    $type=$_POST['hotel_type'];
    $address=$_POST['address'];
    $phone=$_POST['phone'];

}

$query="INSERT INTO `hotel` ( `Hotel_name`, `Hotel_type`, `Address`, `Phone_no`) VALUES ('$name', '$type', '$address', '$phone')";
db_insert($query);
$_SESSION['status']="Insertion is successful";
header('Location: Hotel.php');


?>
