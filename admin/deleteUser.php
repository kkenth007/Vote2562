<?php
include "connect.php";

$IDCard =  $_GET['IDCard'];
$sqlDelete = "DELETE FROM user WHERE IDCard='$IDCard'";
$conn->query($sqlDelete);
$conn->close();//ปิด connection
header("Location:testDB.php"); /* เปลี่ยนหน้าไปยังหน้า form.php */
exit(); // หยุดการทำงานของ script ทั้งหมด

 ?>
