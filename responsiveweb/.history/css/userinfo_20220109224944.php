<?php

$servername = "localhost";
$username = "localhost";
$password = "";
$con = mysqli_connect('localhost','root');

if($con){
    echo "connection successful";
}else{
    echo "Conneciton Unsuccessful Please Try again !!";
}




?>