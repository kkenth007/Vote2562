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
                    <li class="list-group-item"><a href="checkUser.php">ตรวจสอบสิทธิ์การเลือกตั้ง</a></li>
                    <li class="list-group-item"><a href="checkCadidate.php">ตรวจพรรคการเมือง</a></li>
                    <li class="list-group-item"><a href="Login.php">เข้าสู่ระบบ</a></li>
                    <li class="list-group-item"><a href="#">ผลการเลือกตั้ง</a></li>
                    <li class="list-group-item"><a href="vote.php">ทดสอบดูหน้า เลือกตั้ง</a></li>

                </ul>
            </div>
            <div class="col-sm-8">
            <!-- <img width="100%" src="https://news.mthai.com/app/uploads/2019/03/22-03-19-6.jpg" alt=""> -->
            <img class="img-thumbnail" width="98%" src="http://image.bangkokbiznews.com/kt/media/image/news/2019/01/23/825013/750x422_825013_1548236405.png" alt="">
            <br><br><br>
            </div>

</body>

</html>