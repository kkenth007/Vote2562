<?php
session_start();
include "connect.php";
include "../include/header.php";

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
        <div class="col-sm-6">
        <h4>เพิ่มข้อมูล</h4>
          <form class="" action="user.php" method="post">

            ชื่อ-นามสกุล
            <input type="text" class="form-control" name="Fullname" value="">
            เลขบัตรประชาชน
            <input type="text" class="form-control" name="IDCard" value="">
            เลขทะเบียนบ้าน
            <input type="text" class="form-control" name="Register" value="">
            รหัสผ่าน
            <input type="text" class="form-control" name="Password" value="">
            สถานะ <strong>(0 คือ ไม่มีสิทธิ 1 คือ มีสิทธิ)</strong>
            <input type="text" class="form-control" name="Status" value="">
            เขต
            <input type="text" class="form-control" name="ID" value="">
            <br>
            <input type="submit" class="btn btn-success" name="" value="เพิ่มข้อมูล">

          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<?php }else{
  header("Location:index.php");
}

?>