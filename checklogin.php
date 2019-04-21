<?php
session_start();

include './include/config.php';
echo $login_username = mysqli_real_escape_string($con,$_POST['id_card']);
echo "<br/>";
echo $login_password = mysqli_real_escape_string($con,$_POST['password']);

//ถ้า id เเละ รหัสผ่านที่กรอกมา ตัวอักษรไม่เท่ากับ 13ตัว and 6ตัวให้ กลับไปล็อกอินใหม่
if(strlen($login_password) != 6 or strlen($login_username) != 13){
  header("Location:Logina.php");
}

$salt = 'gsdg8vfd8b1f81g65j1f6';
$hash_login_password = hash_hmac('sha256', $login_password, $salt);

  $sql = "SELECT * FROM tb_login WHERE login_Identification_Number=? AND login_password=?";
  $stmt = mysqli_prepare($table_user, $sql);
  mysqli_stmt_bind_param($stmt,"ss", $login_Identification_Number,$hash_login_password);
  mysqli_execute($stmt);
  $result_user = mysqli_stmt_get_result($stmt);
  if ($result_user->num_rows == 1) {


    $row_user = mysqli_fetch_array($result_user,MYSQLI_ASSOC);
    $_SESSION['login_Identification_Number'] = $row_user['login_Identification_Number'];
    $_SESSION['login_status'] = $row_user['login_status'];
     echo $_SESSION['login_status'];
    if ($_SESSION['login_status'] == 'admin'){//*) {
    // $conn->close();//ปิด connection*
    header("Location:admin.php");//เปลี่ยนหน้าไปยังหน้า form.php*
    // header("Location:main.php");
    exit();// หยุดการทำงานของ script*
      }// } else {///*
      } else {
          // $conn->close();//ปิด connection*
          //header("Location:Logina.php");//เปลี่ยนหน้าไปยังหน้า form.php*
          exit();// หยุดการทำงานของ script*
        //เพิ่มมาใหม่*
        // } else {
          echo "<div ciass='form'><center>
                  <h3>Username/password is incorrect.</h3>
                  <h3>ชื่อ ID / รหัสผ่านไม่ถูกต้อง Click เพื่อกลับไป Login ใหม่</h3>
                  <br>Click here to <a href='Login.php'>Login</a>
                </center></div>";

  }
 ?>
