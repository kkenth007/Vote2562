<?php
session_start();

include './include/config.php';
echo $login_username = mysqli_real_escape_string($con,$_POST['id_card']);
echo "<br/>";
echo $login_password = mysqli_real_escape_string($con,$_POST['password']);

// ถ้า id เเละ รหัสผ่านที่กรอกมา ตัวอักษรไม่เท่ากับ 13ตัว and 6ตัวให้ กลับไปล็อกอินใหม่
if(strlen($login_password) != 6 or strlen($login_username) != 13){
  header("Location:Login.php");
}

$sql = "SELECT * FROM user WHERE IDCard='$login_username' && Password='$login_password'";
$result = mysqli_query($con,$sql);
// $row = mysqli_fetch_array($result);
print_r($result);

// if(mysqli_num_rows($result) == 1){
//   if($row['Fullname'] == 'admin' && $row['Password'] == '123456789'){
//     // $_SESSION['Admin'] = $row['Fullname'];
//     header("Location:/admin/testDB.php");
//   }
 
// }

if(mysqli_num_rows($result) == 1){
  $row = mysqli_fetch_array($result);
  $_SESSION['Fullname'] = $row['Fullname'];
  $_SESSION['IDCard'] = $row['IDCard'];
  $_SESSION['Register'] = $row['Register'];
  $_SESSION['Password'] = $row['Password'];
  $_SESSION['ID'] = $row['AREA_ID'];
  $_SESSION['status'] = $row['stauts'];
  $_SESSION['Status_scored'] = $row['Status_scored'];
    header("Location:vote.php");
}else{
    header("Location:Login.php");
}


 ?>
