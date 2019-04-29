<?php
include "connect.php";

$Fullname = $_POST['Fullname'];
$IDCard = $_POST['IDCard'];
$Register = $_POST['Register'];
$Password = $_POST['Password'];
$Status = $_POST['Status'];
$ID = $_POST['ID'];
$sqlUpdateUser = "UPDATE user
SET Fullname='$Fullname',IDCard='$IDCard',Register='$Register',Password='$Password',Status='$Status',AREA_ID='$ID'
WHERE IDCard = '$IDCard'  ";
$conn->query($sqlUpdateUser) or die($conn->error);
$conn->close();//ปิด connection
header("Location:testDB.php"); /* เปลี่ยนหน้าไปยังหน้า form.php */
exit(); // หยุดการทำงานของ script ทั้งหมด
 ?>
