<?php
session_start();

include "./include/config.php";

    $data = "SELECT * FROM table_applicant";
    $result = mysqli_query($con,$data);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <style>
        th {
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
                    <li class="list-group-item active">เมนู</li>
                    <li class="list-group-item"><a href="logout.php">เข้าสู่ระบบ</a></li>
                </ul>
            </div>
            <div class="col-sm-8 bg-warning">

            </div>
</body>

</html>