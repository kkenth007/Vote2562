<?php
session_start();
include "./include/config.php";
    $id = $_POST['number'];
    $data = "SELECT * FROM user INNER JOIN area ON user.ID = area.ID  Where IDCard='$id'";

    // $data = "SELECT * FROM user Where IDCard='$id'";
    $result = mysqli_query($con,$data);
    if(mysqli_num_rows($result) == 1){
      $row = mysqli_fetch_array($result);
      // print_r($row);
      $fullname = $row['Fullname'];
      $idcard = $row['IDCard'];
      $area = $row['ID'];
      $province= $row['province'];
      // echo $area;
      if($row['Status'] == '1'){
        $owner = "คุณมีสิทธิ์เลือกตั้ง ";
      }else{
        $owner = "คุณไม่มีสิทธิ์เลือกตั้ง ";
      }

    }else{
        $owner = "คุณไม่มีสิทธิ์เลือกตั้ง ";
        $owner = "คุณไม่มีสิทธิ์เลือกตั้ง ";
        $fullname = "";
        $idcard = "";
        $area = "";
        $province="";
    }

?>

<?php
// echo $_POST['number']

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
     <center><h3><?php echo $owner; ?></h3></center><br>
     <label for=""><?php echo "ชื่อ : ".$fullname; ?> </label><br>
     <label for=""><?php echo "เขต : ".$area ?> </label><br>
     <label for=""><?php echo "จังหวัด : ".$province ?> </label><br>

             </div>

 </body>

 </html>
