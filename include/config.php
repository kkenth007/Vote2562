<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'elect_db';

$con = mysqli_connect($server,$username,$password,$dbname);
mysqli_set_charset($con,"UTF8");

if($con){
    // echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
}else{
    echo error_log($con);
}


?>