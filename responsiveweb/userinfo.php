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

$query = "INSERT INTO `userinfo` (`id`, `user`, `email`, `mobile`, `comment`) VALUES (NULL, '$user', '$email', '$mobile', '$comment')";



mysqli_query($con, $query);

header('location:index.php');


?>