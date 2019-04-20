<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = '';

$con = mysqli_connect($server,$username,$password,$dbname);

if($con){

}else{
    echo error_log($con);
}


?>