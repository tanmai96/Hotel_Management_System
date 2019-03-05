<?php
/**
 * Created by PhpStorm.
 * User: tanma
 * Date: 3/23/2018
 * Time: 1:34 AM
 */
require_once 'database.php';
$data = db_select("select * from admin");

foreach ($data as $row){
    echo $row[0].' '.$row[1].' '.$row[2].' '.$row[3].'<br>';
}
?>