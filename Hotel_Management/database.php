<?php

function db_insert($query){
    $con = db_connect();
    $con->query($query);
    $con->close();
}

function db_update($query){
   db_insert($query);
}

function db_delete($query){
    db_insert($query);
}

function db_select($query){
    $con = db_connect();
    $rows = $con->query($query);
    $data=[];
    if($rows==null){
        echo "Database query failed";
        return $data;
    }else {
        $rows = $rows->fetch_all(MYSQLI_BOTH);
        foreach ($rows as $row){
            array_push($data,$row);
        }
        $con->close();
    }
    return $data;

}
function db_connect(){
    $serverName="localhost";
    $userName="root";
    $password="";
    $dbName="mydb";
    $con= new mysqli($serverName,$userName,$password,$dbName);
    if($con->connect_errno){
        die("connection failed.".$con->connect_error);
    }else {

        return $con;
    }


}
function db_insert_orders($orderDate,$delivaryDate,$delivaryTime,$phoneno,$delivaryAddress,$confirmation=0){
    sessionStart();
    $query  =  "INSERT INTO `orders` (`id`, `orderdate`, `delivarydate`, `delivarytime`, `phoneno`, `delivaryaddress`, `confirmation`, `customerid`) ";
    $query .= "select 'NULL', '".$orderDate."', '".$delivaryDate."', '".$delivaryTime."', '".$phoneno."', '".$delivaryAddress."', '".$confirmation."', id from customer where username='".$_SESSION['username']."';";
    db_insert($query);

}
function db_insert_orderitem($foodId,$amount){
    sessionStart();
    $query = "INSERT INTO `orderitem` (`id`, `foodid`, `amount`, `orderid`) ";
    $query .= "select 'NULL', '".$foodId."', '".$amount."', orders.id from orders,customer where customer.id=orders.customerid && customer.username='".$_SESSION['username']."' ";
    $query .= "order by orders.id desc limit 1;";
    db_insert($query);
}
function sessionStart(){
    if(session_status()==PHP_SESSION_NONE){
        sessionStart();
    }
}



