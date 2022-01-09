<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "userinfodata";
$con = mysqli_connect($servername, $username,$password,$database);

if($con){
    echo "connection successful";
}else{
    echo "Conneciton Unsuccessful Please Try again !!";
}




?>