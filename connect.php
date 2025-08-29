<?php 

ini_set('display_errors', 1);
error_reporting(~0);
date_default_timezone_set("Asia/Bangkok");

$host = 'mysql.railway.internal';
$db_user = 'root';
$db_pass = 'ylQPdoZREepEcahCXUuGxHQVYjbmPTHB';
$db_name = 'railway';

$conn = mysqli_connect($host,$db_user,$db_pass,$db_name);
$query = mysqli_query($conn,"SET NAMES UTF8");


if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}



?>