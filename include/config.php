<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'vote2562';

$con = mysqli_connect($server,$username,$password,$dbname);

if($con){
    echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
}else{
    echo error_log($con);
}


?>