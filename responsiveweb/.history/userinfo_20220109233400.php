<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "dilpeshproject";
$con = mysqli_connect($servername, $username, $password, $database);

if($con){
    echo "connection successful";
}else{
    echo "Conneciton Unsuccessful Please Try again !!";
}

mysqli_select_db($con,'dilpeshproject');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = " insert into userinfo (user, email, mobile, comment) values ($user','$email','$mobile','$comment')";

echo $query;    

mysqli_query($con, $query);


?>