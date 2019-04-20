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
                    <li class="list-group-item"><a href="logout.php">เข้าสู่ระบบ</a></li>
                </ul>
            </div>
            <div class="col-sm-8 bg-warning">

            </div>
</body>

</html>