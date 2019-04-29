<?php
session_start();
include "./include/config.php";

if(isset($_POST["choose_id"]))  
{   $id = $_POST["choose_id"];
    $query = "SELECT * FROM applicant WHERE ID_Candidate = '$id'";
    $result = mysqli_query($con, $query) or die( mysqli_error($con));
    $row = mysqli_fetch_array($result);
    echo json_encode($row); 
    mysqli_close($con);
} 

if(isset($_POST["check"]))  
{
    // echo $_POST["check"];
    // เปิด SESSION 
    $IDCard = $_SESSION['IDCard'];
    $area = $_SESSION['ID']; 

    if(is_numeric($_POST["check"])){
        //ลงคะแนนตามปกติ
        $id = $_POST["check"];
        $sql = "INSERT INTO score (AREA_ID,ID_Candidate) VALUES ('$area', '$id')";
        $update = "UPDATE user SET Status_scored = '1' WHERE user.IDCard = '$IDCard'";
        mysqli_query($con,$sql);
        mysqli_query($con,$update);
        mysqli_close($con);
        header("Location:logout.php");

    }else{
        //กรณีไม่ประสงค์ลงคะเเนน
        //$area="";// $area = SESSION_['ID'];
        $sql = "INSERT INTO score (AREA_ID) VALUES ('$area')";
        mysqli_query($con,$sql);
        $update = "UPDATE user SET Status_scored = '1' WHERE user.IDCard = '$IDCard'";
        mysqli_query($con,$update);
        mysqli_close($con);
        header("Location:logout.php");
    }
} 

?>