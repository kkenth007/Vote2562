<?php
include "./include/config.php";
// $query = "SELECT * FROM table_applicant WHERE candidate_id = '1LEI1'";
// $result = mysqli_query($con, $query) or die( mysqli_error($con));
// $row = mysqli_fetch_array($result);
// echo json_encode($row); 

if(isset($_POST["choose_id"]))  
{   $id = $_POST["choose_id"];
    $query = "SELECT * FROM table_applicant WHERE candidate_id = '$id'";
    $result = mysqli_query($con, $query) or die( mysqli_error($con));
    $row = mysqli_fetch_array($result);
    echo json_encode($row); 
} 
?>