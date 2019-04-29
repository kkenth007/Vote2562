<?php
include "connect.php";

$Fullname = $_POST['Fullname'];
$IDCard = $_POST['IDCard'];
$Register = $_POST['Register'];
$Password = $_POST['Password'];
$Status = $_POST['Status'];
$ID = $_POST['ID'];


$sqlInsert = "INSERT INTO user(Fullname, IDCard, Register, Password, Status, AREA_ID )
VALUES ('$Fullname','$IDCard','$Register','$Password','$Status','$ID')";
// query() เป็นฟังก์ชั่นที่ทำการ execute คำสั่ง sql
$conn->query($sqlInsert);
$conn->close();//ปิด connection
header("Location:testDB.php"); /* เปลี่ยนหน้าไปยังหน้า form.php */
exit(); // หยุดการทำงานของ script ทั้งหมด


 ?>
