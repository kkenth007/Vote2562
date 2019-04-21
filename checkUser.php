<?php
session_start();
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
                    <li class="list-group-item"><a href="checkUser.php">ตรวจสอบสิทธิ์การเลือกตั้ง</a></li>
                    <li class="list-group-item"><a href="#">ตรวจพรรคการเมือง</a></li>
                    <li class="list-group-item"><a href="Logina.php">เข้าสู่ระบบ</a></li>
                    <li class="list-group-item"><a href="#">ผลการเลือกตั้ง</a></li>
                    <li class="list-group-item"><a href="vote.php">ทดสอบดูหน้า เลือกตั้ง</a></li>

                </ul>
            </div>
            <div class="col-sm-8">
                <div class="col-sm-6">
                <h4>ตรวจสอบสิทธิ์การเลือกตั้ง</h4>
                <form action="testUser.php" method="post">
                    <!-- <input type="text" name="number" value=""> -->
                    <div class="form-group">
                        <label for="exampleInputPassword1">กรอกหมายเลขบัตรประจำตัวประชาชน</label>
                        <input type="text" class="form-control" name="number" id="exampleInputPassword1" placeholder="เลขบัตรประจำตัวประชาชน">
                    </div>
                    <input type="submit" class="btn btn-success" name="submit" value="ตรวจสอบ">
                </form>
                </div>

            </div>

</body>

</html>