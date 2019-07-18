<?php


$id= $_GET['id'];

?>



<html>
<head>
</head>
<body>
<form action="" method="POST">
First Name
<br>
<input type="text" name=fname>
</input>
<br>
Last name
<br>
<input type="text" name=lname>
</input>
<br>
Email
<br>
<input type="text" name=email>
</input>
<br>
phone Number
<br>
<input type="text" name= phone >
</input>
<br>
<br>
<input type="submit" name=submit>
</input>

</form>

</body>
</html>






<?php

if(isset($_POST['submit']) ){

$name= $_POST['fname'];
$lname= $_POST['lname'];
$email= $_POST['email'];
$phone= $_POST['phone'];



$servername = "localhost";
$username = "root";
$password = "";



$conn = mysqli_connect($servername, $username, $password , 'learn');

$query= "UPDATE `jerry` SET `fname`='$name',`lname`='$lname',`email`='$email',`phone`='$phone' WHERE `id` = '$id'";

$update = mysqli_query($conn,$query);

if (!$update)
{
	
	echo "not updated";
}

else{
	
	
	header("location:second.php");
}



}



?>