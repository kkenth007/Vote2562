<?php
session_start();
include '../include/config.php';
$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'admin' && $password == '123456789'){
    $_SESSION['level'] = 'admin';
    header("Location:testDB.php");
}else{
    header("Location:index.php");
}


 ?>
