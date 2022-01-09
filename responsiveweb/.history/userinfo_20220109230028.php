<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dilpeshproject";
$con = mysqli_connect($servername, $username,$password,$database);

if($con){
    echo "connection successful";
}else{
    echo "Conneciton Unsuccessful Please Try again !!";
}

mysqli_select_db($con,'dilpeshproject');




?>