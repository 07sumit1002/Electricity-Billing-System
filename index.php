<?php
error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ebill";
    $conn = mysqli_connect($servername,$username,$password,$dbname);
if($_POST['submit']){
    $curread    =   $_POST['curr'];
    $prevread   =   $_POST['prev'];
    $start      =   $_POST['startDate'];
    $end        =   $_POST['endDate'];
    $sanc       =   $_POST['sancload'];
    $query   = "INSERT INTO bill (curr, prev, startdate, enddate, sancload)
     VALUES ('$curread', '$prevread', '$start', '$end', '$sanc')";
    $data = mysqli_query($conn,$query);
    if($data){
        echo"<script>alert('Succesfully Created')</script>";
    }
}