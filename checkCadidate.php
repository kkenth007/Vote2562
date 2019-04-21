<?php
session_start();

include "./include/config.php";

    // $data = "SELECT * FROM table_applicant";
    // $result = mysqli_query($con,$data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <?php include "./include/header.php"; ?>
</head>

<body>


    <div class="jumbotron text-center">
        <h1>เลือกตั้ง 62 เด้อ <i class="fas fa-vote-yea"></i> </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <ul class="list-group">
                    <li class="list-group-item active">เมนู</li>
                    <li class="list-group-item"><a href="#">ตรวจสอบสิทธิ์การเลือกตั้ง</a></li>
                    <li class="list-group-item"><a href="#">ตรวจพรรคการเมือง</a></li>
                    <li class="list-group-item"><a href="Logina.php">เข้าสู่ระบบ</a></li>
                    <li class="list-group-item"><a href="#">ผลการเลือกตั้ง</a></li>
                    <li class="list-group-item"><a href="vote.php">ทดสอบดูหน้า เลือกตั้ง</a></li>

                </ul>
            </div>
            <div class="col-sm-8">
                <h3>เขต 1</h3>
        <div class="card-deck">
  <div class="card">
    <img src="https://avatars0.githubusercontent.com/u/32562129 " class="img-fluid" alt="...">
    <div class="card-body">
      <h5 class="card-title">เบอร์ 1</h5>
      <p class="card-text">พรรคการเรียน</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">นายอดิสร โครตวงค์</small>
    </div>
  </div>
  <div class="card">
    <img src="https://avatars0.githubusercontent.com/u/32562129 " class="img-fluid" alt="...">
    <div class="card-body">
      <h5 class="card-title">เบอร์ 2</h5>
      <p class="card-text">พรรคใจ</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">นายคนิต วิจิตรปัญญา</small>
    </div>
  </div>
  <div class="card">
    <img src="https://avatars0.githubusercontent.com/u/32562129 " class="img-fluid" alt="...">
    <div class="card-body">
      <h5 class="card-title">เบอร์ 3</h5>
      <p class="card-text">พรรคผ่อน</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">นายศิริชัย สิงห์ลา</small>
    </div>
  </div>
</div>
<h3>เขต 2</h3>
<div class="card-deck">
<div class="card">
<img src="https://avatars0.githubusercontent.com/u/32562129 " class="img-fluid" alt="...">
<div class="card-body">
<h5 class="card-title">เบอร์ 1</h5>
<p class="card-text">พรรคการเรียน</p>
</div>
<div class="card-footer">
<small class="text-muted">นายอดิสร โครตวงค์</small>
</div>
</div>
<div class="card">
<img src="https://avatars0.githubusercontent.com/u/32562129 " class="img-fluid" alt="...">
<div class="card-body">
<h5 class="card-title">เบอร์ 2</h5>
<p class="card-text">พรรคใจ</p>
</div>
<div class="card-footer">
<small class="text-muted">นายคนิต วิจิตรปัญญา</small>
</div>
</div>
<div class="card">
<img src="https://avatars0.githubusercontent.com/u/32562129 " class="img-fluid" alt="...">
<div class="card-body">
<h5 class="card-title">เบอร์ 3</h5>
<p class="card-text">พรรคผ่อน</p>
</div>
<div class="card-footer">
<small class="text-muted">นายศิริชัย สิงห์ลา</small>
</div>
</div>
</div>
<h3>เขต 3</h3>
<div class="card-deck">
<div class="card">
<img src="https://avatars0.githubusercontent.com/u/32562129 " class="img-fluid" alt="...">
<div class="card-body">
<h5 class="card-title">เบอร์ 1</h5>
<p class="card-text">พรรคการเรียน</p>
</div>
<div class="card-footer">
<small class="text-muted">นายอดิสร โครตวงค์</small>
</div>
</div>
<div class="card">
<img src="https://avatars0.githubusercontent.com/u/32562129 " class="img-fluid" alt="...">
<div class="card-body">
<h5 class="card-title">เบอร์ 2</h5>
<p class="card-text">พรรคใจ</p>
</div>
<div class="card-footer">
<small class="text-muted">นายคนิต วิจิตรปัญญา</small>
</div>
</div>
<div class="card">
<img src="https://avatars0.githubusercontent.com/u/32562129 " class="img-fluid" alt="...">
<div class="card-body">
<h5 class="card-title">เบอร์ 3</h5>
<p class="card-text">พรรคผ่อน</p>
</div>
<div class="card-footer">
<small class="text-muted">นายศิริชัย สิงห์ลา</small>
</div>
</div>
</div>
            </div>

</body>

</html>
