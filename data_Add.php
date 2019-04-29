<?php
session_start();

include "./include/config.php";

$areaname = "SELECT * FROM score";
$fethName = mysqli_query($con, $areaname);
$all = mysqli_fetch_array($fethName);

// $N = "SELECT COUNT(ID) AS allrows FROM score WHERE ID_Candidate IS NOT NULL";
// $N = mysqli_query($con,$N);
// $N = mysqli_fetch_array($N);
// $N = $N['allrows'];
// echo $N;
// echo "<br/>";
// $people = "SELECT COUNT(ID) FROM score WHERE ID_Candidate=3";

// นับคะเเนนของแต่ล่ะคนในเขต 1
$i = 1;
while(true){
  $people[$i] = "SELECT COUNT(AREA_ID) AS point FROM score WHERE ID_Candidate=$i";
  $people[$i] = mysqli_query($con,$people[$i]);
  $people[$i] = mysqli_fetch_array($people[$i]);
  $people[$i] = $people[$i]['point'];
  // echo $people[$i];

  if($i >= 5){
    break;
  }
  $i++;
}

// นับคะแนนของแต่ล่ะคนเขต 2
$i = 6;
while(true){
  $people[$i] = "SELECT COUNT(AREA_ID) AS point FROM score WHERE ID_Candidate=$i";
  $people[$i] = mysqli_query($con,$people[$i]);
  $people[$i] = mysqli_fetch_array($people[$i]);
  $people[$i] = $people[$i]['point'];
  // echo $people[$i];

  if($i >= 10){
    break;
  }
  $i++;
}

// นับคะแนนของแต่ล่ะคนเขต 3
$i = 11;
while(true){
  $people[$i] = "SELECT COUNT(AREA_ID) AS point FROM score WHERE ID_Candidate=$i";
  $people[$i] = mysqli_query($con,$people[$i]);
  $people[$i] = mysqli_fetch_array($people[$i]);
  $people[$i] = $people[$i]['point'];

  // echo "key => $i = ".$people[$i];

  if($i >= 14){
    break;
  }
  $i++;
}

//สสเขต1
$applicant = "SELECT * FROM score";
$score = mysqli_query($con, $applicant);
$K1 = mysqli_fetch_array($score);
$sql = "SELECT * FROM applicant  WHERE AREA_ID = 1";
$getarea1 = mysqli_query($con, $sql);

$K2 = mysqli_fetch_array($score);
$sql = "SELECT * FROM applicant  WHERE AREA_ID = 2";
$getarea2 = mysqli_query($con, $sql);

$K3 = mysqli_fetch_array($score);
$sql = "SELECT * FROM applicant  WHERE AREA_ID = 3";
$getarea3 = mysqli_query($con, $sql);

$area1allow = "SELECT Status FROM user WHERE AREA_ID=1 AND Status=1;";
// ผู้มีสิทธิ เขตที่1
$area1allow = mysqli_query($con, $area1allow);
$numarea1 = mysqli_num_rows($area1allow);
// print_r($numarea1);
$area1allow2 = "SELECT Status FROM user WHERE AREA_ID=2 AND Status=1;";
// ผู้มีสิทธิ เขตที่2
$area1allow2 = mysqli_query($con, $area1allow2);
$numarea2 = mysqli_num_rows($area1allow2);

$area1allow3 = "SELECT Status FROM user WHERE AREA_ID=3 AND Status=1;";
// ผู้มีสิทธิ เขตที่3
$area1allow3 = mysqli_query($con, $area1allow3);
$numarea3 = mysqli_num_rows($area1allow3);

// มาใช้สิทธิทั้มาใช้สิทธิทั้งหมด
$all = "SELECT Status FROM user WHERE Status=1";
$allsum = mysqli_query($con, $all);
$allsumrow = mysqli_num_rows($allsum);

$comevote1 = "SELECT AREA_ID FROM score WHERE AREA_ID=1";
$comevote1 = mysqli_query($con, $comevote1);
$comevote1 = mysqli_num_rows($comevote1);

$comevote2 = "SELECT AREA_ID FROM score WHERE AREA_ID=2";
$comevote2 = mysqli_query($con, $comevote2);
$comevote2 = mysqli_num_rows($comevote2);

$comevote3 = "SELECT AREA_ID FROM score WHERE AREA_ID=3";
$comevote3 = mysqli_query($con, $comevote3);
$comevote3 = mysqli_num_rows($comevote3);

$comeall = "SELECT AREA_ID FROM score";
$comeall = mysqli_query($con, $comeall);
$comeall = mysqli_num_rows($comeall);

// ไม่ประสงค์ลงคะเเนน
$notara1 = "SELECT AREA_ID FROM score WHERE AREA_ID= 1 AND ID_Candidate IS NULL";
$notara1 = mysqli_query($con, $notara1);
$notara1 = mysqli_num_rows($notara1);

$notara2 = "SELECT AREA_ID FROM score WHERE AREA_ID= 2 AND ID_Candidate IS NULL";
$notara2 = mysqli_query($con, $notara2);
$notara2 = mysqli_num_rows($notara2);


$notara3 = "SELECT AREA_ID FROM score WHERE AREA_ID= 3 AND ID_Candidate IS NULL";
$notara3 = mysqli_query($con, $notara3);
$notara3 = mysqli_num_rows($notara3);

$notareaall = "SELECT AREA_ID FROM score WHERE ID_Candidate IS NULL";
$notareaall = mysqli_query($con, $notareaall);
$notareaall = mysqli_num_rows($notareaall);

$allPointone = "SELECT AREA_ID FROM score WHERE AREA_ID = 1 AND ID_Candidate IS NOT NULL";
$allPointone = mysqli_query($con, $allPointone);
$allPointone = mysqli_num_rows($allPointone);

$allPoint2 = "SELECT AREA_ID FROM score WHERE AREA_ID = 2 AND ID_Candidate IS NOT NULL";
$allPoint2 = mysqli_query($con, $allPoint2);
$allPoint2 = mysqli_num_rows($allPoint2);

$allPoint3 = "SELECT AREA_ID FROM score WHERE AREA_ID = 3 AND ID_Candidate IS NOT NULL";
$allPoint3 = mysqli_query($con, $allPoint3);
$allPoint3 = mysqli_num_rows($allPoint3);

$pointallsum = "SELECT ID_Candidate FROM score WHERE ID_Candidate IS NOT NULL";
$pointallsum = mysqli_query($con, $pointallsum);
$pointallsum = mysqli_num_rows($pointallsum);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
  <?php include "./include/header.php"; ?>
</head>

<body>
  <div class="jumbotron text-center">
    <h3>เลือกตั้ง 62 เด้อ <i class="fas fa-vote-yea"></i> </h3>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <?php include "include/menu.php"; ?>
      </div>
      <div class="col-sm-8">
        <h3>เขตที่ 1</h3>
        <div class="user">

          <ul class="list-group list-group-horizontal">
            <li class="list-group-item bg-success text-white" style="width:120px;">ผู้มีสิทธิ</li>
            <li class="list-group-item" style="width:145px;"><?php echo $numarea1; ?></li>
            <li class="list-group-item bg-warning text-black" style="width:120px;">ผู้มาใช้สิทธิ</li>
            <li class="list-group-item" style="width:145px;"><?php echo $comevote1; ?></li>
            <li class="list-group-item bg-danger text-white" style="width:200px">ไม่ประสงค์ลงคะเเนน</li>
            <li class="list-group-item" style="width:145px;"><?php echo $notara1; ?></li>
        </div>


        <div class="user">
          <h3>เขตที่ 2</h3>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item bg-success text-white" style="width:120px;">ผู้มีสิทธิ</li>
            <li class="list-group-item" style="width:145px;"><?php echo $numarea2; ?></li>
            <li class="list-group-item bg-warning text-black" style="width:120px;">ผู้มาใช้สิทธิ</li>
            <li class="list-group-item" style="width:145px;"><?php echo $comevote2; ?></li>
            <li class="list-group-item bg-danger text-white" style="width:200px">ไม่ประสงค์ลงคะเเนน</li>
            <li class="list-group-item" style="width:145px;"><?php echo $notara2; ?></li>
        </div>


        <div class="user">
          <h3>เขตที่ 3</h3>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item bg-success text-white" style="width:120px;">ผู้มีสิทธิ</li>
            <li class="list-group-item" style="width:145px;"><?php echo $numarea3; ?></li>
            <li class="list-group-item bg-warning text-black" style="width:120px;">ผู้มาใช้สิทธิ</li>
            <li class="list-group-item" style="width:145px;"><?php echo $comevote3; ?></li>
            <li class="list-group-item bg-danger text-white" style="width:200px">ไม่ประสงค์ลงคะเเนน</li>
            <li class="list-group-item" style="width:145px;"><?php echo $notara3; ?></li>
        </div>

        <div class="user">
          <h3>รวมทั้ง3เขต</h3>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item bg-success text-white" style="width:120px;">ผู้มีสิทธิ</li>
            <li class="list-group-item" style="width:145px;"><?php echo $allsumrow; ?></li>
            <li class="list-group-item bg-warning text-black" style="width:120px;">ผู้มาใช้สิทธิ</li>
            <li class="list-group-item" style="width:145px;"><?php echo $comeall; ?></li>
            <li class="list-group-item bg-danger text-white" style="width:200px">ไม่ประสงค์ลงคะเเนน</li>
            <li class="list-group-item" style="width:145px;"><?php echo $notareaall; ?></li>

          </ul>
          <br>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item bg-success text-white" style="width:120px;">คะแนนรวมทั้งหมด</li>
            <li class="list-group-item" style="width:145px;"><?php echo $pointallsum; ?></li>

          </ul>
          <br>

          <h4>เลือกตั้ง จังหวัด เลย <strong></h4>
          <table class="table table-bordered table-sm">
            <thead>
              <h3>เขตที่ 1</h3>
              <tr>
                <th width="10px;">หมายเลข</th>
                <th width="90px;">โลโก้พรรค</th>
                <th>ชื่อพรรค</th>
                <th width="90px;">รูปผู้สมัคร</th>
                <th width="220px;">ชื่อผู้สมัคร</th>
                <th>คะเเนน</th>

              </tr>

              <?php $count = 1; while ($row = mysqli_fetch_array($getarea1)) { ?>
                <tr>
                  <td class="text-center"><?php echo $row['Number_applicant']; ?></td>
                  <td><img width="80px;" src="<?php echo $row['Logo_applicant']; ?>" alt=""></td>
                  <td><?php echo $row['Name_applicant']; ?></td>
                  <td><img src="<?php echo $row['Logo_Candidate']; ?>" width="80px;"></td>
                  <td><?php echo $row['Candidate_name']; ?></td>
                  <td><?php echo $people[$count];?></td>
                </tr>

              <?php $count++; } ?>
              <tr >
                <td class="bg-warning" style="padding:15px;" colspan="5">รวมคะแนนเขต 1</td>
                <td class="bg-warning" style="padding:15px;"><?php echo $allPointone; ?></td>
              </tr>




              <table class="table table-bordered table-sm">
                <h3> เขตที่ 2</h3>
                <tr>
                  <th width="10px;">หมายเลข</th>
                  <th width="90px;">โลโก้พรรค</th>
                  <th>ชื่อพรรค</th>
                  <th width="90px;">รูปผู้สมัคร</th>
                  <th width="220px;">ชื่อผู้สมัคร</th>
                  <th>คะเเนน</th>

                </tr>

                <?php  $count = 6; while ($row = mysqli_fetch_array($getarea2)) { ?>
                  <tr>
                    <td class="text-center"><?php echo $row['Number_applicant']; ?></td>
                    <td><img width="80px;" src="<?php echo $row['Logo_applicant']; ?>" alt=""></td>
                    <td><?php echo $row['Name_applicant']; ?></td>
                    <td><img src="<?php echo $row['Logo_Candidate']; ?>" width="80px;"></td>
                    <td><?php echo $row['Candidate_name']; ?></td>
                    <td><?php echo $people[$count];?></td>
                  </tr>

                <?php $count++; } ?>
                <tr>
                  <td class="bg-warning" style="padding:15px;" colspan="5">รวมคะแนนเขต 2</td>
                  <td class="bg-warning" style="padding:15px;" ><?php echo $allPoint2; ?></td>
                </tr>
              </table>

              <table class="table table-bordered table-sm">
                <h3> เขตที่ 3</h3>
                <tr>
                  <th width="10px;">หมายเลข</th>
                  <th width="90px;">โลโก้พรรค</th>
                  <th>ชื่อพรรค</th>
                  <th width="90px;">รูปผู้สมัคร</th>
                  <th width="220px;">ชื่อผู้สมัคร</th>
                  <th>คะเเนน</th>

                </tr>

                <?php $count = 11;  while ($row = mysqli_fetch_array($getarea3)) { ?>
                  <tr>
                    <td class="text-center"><?php echo $row['Number_applicant']; ?></td>
                    <td><img width="80px;" src="<?php echo $row['Logo_applicant']; ?>" alt=""></td>
                    <td><?php echo $row['Name_applicant']; ?></td>
                    <td><img src="<?php echo $row['Logo_Candidate']; ?>" width="80px;"></td>
                    <td><?php echo $row['Candidate_name']; ?></td>
                    <td><?php echo $people[$count];?></td>
                  </tr>

                <?php $count++; } ?>
                <tr>
                  <td class="bg-warning" style="padding:16px;" colspan="5">รวมคะแนนเขต 3</td>
                  <td class="bg-warning" style="padding:15px;"><?php echo $allPoint3; ?></td>
                </tr>
              </table>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>