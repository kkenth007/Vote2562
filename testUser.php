<?php
session_start();
include "./include/config.php";
$id = $_POST['number'];
$data = "SELECT * FROM user INNER JOIN area ON user.AREA_ID = area.AREA_ID  Where IDCard='$id'";

$result = mysqli_query($con, $data);
if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_array($result);
    $fullname = $row['Fullname'];
    $idcard = $row['IDCard'];
    $area = $row['AREA_ID'];
    $province = $row['province'];
    if ($row['Status'] == '1') {
        $owner = "คุณมีสิทธิ์เลือกตั้ง ";
    } else {
        $owner = "คุณไม่มีสิทธิ์เลือกตั้ง ";
    }
} else {
    $owner = "คุณไม่มีสิทธิ์เลือกตั้ง ";
    $owner = "คุณไม่มีสิทธิ์เลือกตั้ง ";
    $fullname = "";
    $idcard = "";
    $area = "";
    $province = "";
}

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
                <!-- <center>
                    <h3><?php //echo $owner; ?></h3>
                </center><br>
                <label for=""><?php //echo "ชื่อ : " . $fullname; ?> </label><br>
                <label for=""><?php //echo "เขต : " . $area ?> </label><br>
                <label for=""><?php //echo "จังหวัด : " . $province ?> </label><br> -->

                <!-- new -->
                <div class="toast" data-autohide="false">
                    <div class="toast-header">
                        <strong class="mr-auto text-primary"><?php echo $owner; ?></strong>
                        <small class="text-muted">5 วินาทีผ่านมา</small>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                    </div>
                    <div class="toast-body">
                    <?php echo "<strong>ชื่อ : </strong>" . $fullname; ?><br />
                    <?php echo "<strong>เขต : </strong>" . $area ?><br />
                    <?php echo "<strong>จังหวัด : </strong>" . $province ?>
                    </div>
                </div>

            </div>

            <script>
                $(document).ready(function() {
                    $('.toast').toast('show');
                });
            </script>
</body>

</html>