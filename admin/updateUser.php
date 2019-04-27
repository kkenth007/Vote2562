<?php
session_start();

include "connect.php";
include "../include/header.php";

$IDCard= $_GET['IDCard'];

$sqlShowUser = "SELECT * FROM user WHERE IDCard = '$IDCard'";
$result = $conn->query($sqlShowUser); // การดึงข้อมูลเรียกด้วยคำสั่ง $conn->query
$row = $result->fetch_assoc(); //$result เป็นคำสั่งแบ่งแถว ทั้งแถว fetch_assocแบ่งเป็นแต่ละคอลัม


if($_SESSION['level'] == 'admin'){
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <div class="jumbotron text-center">
    <h1>เลือกตั้ง 62 เด้อ <i class="fas fa-vote-yea"></i> </h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
      <ul class="list-group">
          <li class="list-group-item bg-dark text-white">เมนู</li>
          <li class="list-group-item"><a href="testDB.php">หน้าหลัก</a></li>
          <li class="list-group-item"><a href="../logout.php">ออกจากระบบ</a></li>
        </ul>
      </div>
      <div class="col-sm-9">
      <h4>แก้ไขข้อมูล</h4>
    <form action="_updateUser.php" method="post">
      ชื่อ-นามสกุล
      <input class="form-control" type="text" name="Fullname" value="<?php echo $row['Fullname'] ?>"> 
      เลขบัตรประชาชน  
      <input class="form-control" type="text" name="IDCard" value="<?php echo $row['IDCard'] ?>"> 
      Register 
      <input class="form-control" type="text" name="Register" value="<?php echo $row['Register'] ?>"> 
      password 
      <input class="form-control" type="text" name="Password" value="<?php echo $row['Password'] ?>"> 
      status 
      <input class="form-control" type="text" name="Status" value="<?php echo $row['Status'] ?>"> 
      ID 
      <input class="form-control" type="text" name="ID" value="<?php echo $row['ID'] ?>"> 
      <br>
      <input type="hidden" name="IDCard" value="<?php echo $row['IDCard']?>">
      <input class="btn btn-success"type="submit" name="" value="แก้ไขข้อมูล">
    </form>
<div>
  <div>

  </body>
</html>
<?php }else{
  header("Location:index.php");
}

?>