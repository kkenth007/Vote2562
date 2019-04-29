<?php
session_start();

include "./include/config.php";

$data = "SELECT * FROM `applicant` WHERE AREA_ID = 1";
$result = mysqli_query($con, $data);

$data = "SELECT * FROM `applicant` WHERE AREA_ID = 2";
$result1 = mysqli_query($con, $data);

$data = "SELECT * FROM `applicant` WHERE AREA_ID = 3";
$result2 = mysqli_query($con, $data);


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
      <div class="col-sm-9">
        <div class="area1">
          <h3>เลือกตั้ง จังหวัดเลยแบ่งตามเขต</h3>
          <h4>เขต 1</h4>
          <div class="card-deck">
            <?php
            while ($row = mysqli_fetch_array($result)) { ?>


              <div class="card">
                <img src="<?php echo $row['Logo_Candidate'] ?> " class="img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">หมายเลข <?php echo $row['Number_applicant'] ?></h5>
                  <p class="card-text"><?php echo $row['Name_applicant'] ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><?php echo $row['Candidate_name'] ?></small>
                </div>
              </div>
            <?php } ?>

          </div>

        </DIV>


        <!-- //area 2 -->
        <div class="area1">
          <h4>เขต 2</h4>
          <div class="card-deck">
            <?php
            while ($row = mysqli_fetch_array($result1)) { ?>


              <div class="card">
                <img src="<?php echo $row['Logo_Candidate'] ?> " class="img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">หมายเลข <?php echo $row['Number_applicant'] ?></h5>
                  <p class="card-text"><?php echo $row['Name_applicant'] ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><?php echo $row['Candidate_name'] ?></small>
                </div>
              </div>
            <?php } ?>

          </div>

        </DIV>
        <!-- //area 3 -->
        <div class="area1">
          <h4>เขต 3</h4>
          <div class="card-deck">
            <?php
            while ($row = mysqli_fetch_array($result2)) { ?>


              <div class="card">
                <img src="<?php echo $row['Logo_Candidate'] ?> " class="img-fluid" alt="...">
                <div class="card-body">
                  <h5 class="card-title">หมายเลข <?php echo $row['Number_applicant'] ?></h5>
                  <p class="card-text"><?php echo $row['Name_applicant'] ?></p>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><?php echo $row['Candidate_name'] ?></small>
                </div>
              </div>
            <?php } ?>

          </div>

        </DIV>
      </div>
    </div>
  </div>
</body>

</html>