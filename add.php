<?php 
include 'connect.php';


$pname = mysqli_real_escape_string($conn,$_POST["pname"]);
$fname = mysqli_real_escape_string($conn,$_POST["fname"]);
$lname = mysqli_real_escape_string($conn,$_POST["lname"]);
$position = mysqli_real_escape_string($conn,$_POST["position"]);
$depart = mysqli_real_escape_string($conn,$_POST["depart"]);
$depart_name = mysqli_real_escape_string($conn,$_POST["depart_name"]);
$check = mysqli_real_escape_string($conn,$_POST["check"]);

$date_now = date("Y-m-d H:i:s");

$insert = "INSERT INTO tb_survey(pname, fname, lname, position, dep, dep_name, checked) 
            VALUES('$pname','$fname','$lname','$position','$depart','$depart_name','$check')";

if(mysqli_query($conn,$insert)){

    echo 200;
    
}else{
    echo 500;
}

/* mysqli_close($conn); */


?>