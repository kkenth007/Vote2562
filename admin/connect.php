<?php 

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'elect_db';

$conn = mysqli_connect($server,$username,$password,$dbname);
mysqli_set_charset($conn,"UTF8");

// if($con){
//     // echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
// }else{
//     echo error_log($conn);
// }

?>