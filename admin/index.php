<?php
session_start();

include "../include/config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <?php include "../include/header.php"; ?>
</head>

<body>


    <div class="jumbotron text-center">
        <h1>เลือกตั้ง 62 เด้อ <i class="fas fa-vote-yea"></i> </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <ul class="list-group">
               
            </div>
            <div class="col-sm-8">
                <div class="col-sm-6 mr-auto">
                    <form action="checklogin.php" method="post">
                        <h4 class="text-center">เข้าสู่ระบบ Admin </h4>
                        <div class="form-group">
                            <label for="exampleInputEmail1">รหัสผู้ใช้งาน</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name='username' placeholder="เลขบัตรประชาชน" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">รหัสผ่าน</label>
                            <span class="mt-3">
                                <a href="#" data-toggle="tooltip" title="รหัสผ่าน (เลข 6 หลักหลังเลข 13 หลัก)"><i class="far fa-question-circle"></i></a>
                            </span>
                            <input type="password" class="form-control" name='password' id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                    </form>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $('[data-toggle="tooltip"]').tooltip();
                });
            </script>
</body>

</html>