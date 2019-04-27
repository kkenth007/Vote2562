<?php
session_start();

//เรียกไฟล์เชื่อม ต่อ ฐานข้อมูลเข้ามาใช้งาน ไฟล์เข้ามาใช้งาน
include "connect.php";
include "../include/header.php";
if($_SESSION['level'] == 'admin'){
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <style>
   
    table {
      border: 1px solid black;
      border-collapse: collapse;
    }

    th,
    td {
      border: 1px solid black;
      padding: 15px;
    }
  </style>
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
        <h4>จัดการข้อมูลผู้มีสิทธิเลือกตั้ง</h4>
        <table class="table">
          <tr class="thead-dark">
            <th style="width:190px;">ชื่อเต็ม</th>
            <th>รหัสประชาชน</th>
            <!-- <th>เลขทะเบียนบ้าน</th> -->
            <th>รหัสผ่าน</th>
            <th>สถานะ</th>
            <th>เขต</th>
            <th style="width:90px;">เลือกตั้งแล้ว</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
          </tr>

          <?php
          $sqliSelect = "SELECT * FROM user";
          $result = $conn->query($sqliSelect);

          while ($row = $result->fetch_assoc()) {
            echo "<tr>
        <td width='120px;'>" . $row['Fullname'] . "</td>
        <td>" . $row['IDCard'] . "</td>
        <!-- <td>" . $row['Register'] . "</td>-->
        <td>" . $row['Password'] . "</td>
        <td>" . $row['Status'] . "</td>
        <td style='width:90px;'>" . $row['ID'] . "</td>
        <td>" . $row['Status_scored'] . "</td>
        <td><a href='updateUser.php?IDCard=" . $row['IDCard'] . "'>แก้ไขข้อมูล</a></td>
        <td><a href='deleteUser.php?IDCard=" . $row['IDCard'] . "'>ลบข้อมูล</a></td>
      </tr>";
          }

          ?>
        </table>
        <a class='btn btn-success' href='add.php'>เพิ่มข้อมูล</a>
        <br><br><br>
      </div>

</body>

</html>
<?php }else{
  header("Location:index.php");
}

?>