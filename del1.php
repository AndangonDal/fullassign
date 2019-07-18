<?php


$servername = "localhost";
$username = "root";
$password = "";



$conn = mysqli_connect($servername, $username, $password , 'learn');











$id = $_GET['id'];

$query="DELETE FROM `jerry` WHERE `id` = '$id'";
$del = mysqli_query($conn,$query);

if(!$del) {
	
	echo "data not deleted";
}

else{
	
	 header("location:first.php");
}






?>