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
                <?php include "include/menu.php"; ?>
            </div>
            <div class="col-sm-8">
                <!-- <img width="100%" src="https://news.mthai.com/app/uploads/2019/03/22-03-19-6.jpg" alt=""> -->
                <img class="img-thumbnail" width="98%" src="http://image.bangkokbiznews.com/kt/media/image/news/2019/01/23/825013/750x422_825013_1548236405.png" alt="">
                <br>
            </div>
            <div class="position-admin" style="margin-left:90%;">
                <a href="./admin/index.php" class='btn btn-warning btn-sm'><i class="fas fa-user-lock"></i> ผู้ดูเเลระบบ</a>
            </div>
            <br><br>


</body>

</html>