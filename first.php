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
<input type="text" name=lname>
</input>
<br>
Email
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



session_start();


if($_SESSION['alpha']==1){






if(isset($_POST['submit'])) {
	$name=0;	$lname=0;	$email=0;	$phone=0;

$pass=0;

	
	if(isset($_POST['fname']) && ($_POST['fname']) !=''){
		
		$name=$_POST['fname'];
		
	}
	else{
		
		$error[]='name is missing';
		
	}
	
	/* last name ka code run huny laga */
	
	
	if(isset($_POST['lname']) && ($_POST['lname']) !=''){
		
		$lname=$_POST['lname'];
		
	}
	else{
		
		$error[]='last name is missing';
		
	}
	
	
	
	if(isset($_POST['email']) && ($_POST['email']) !=''){
		
		$email=$_POST['email'];
		
	}
	else{
		
		$error[]='email is missing';
		
	}
	
	
	if(isset($_POST['phone']) && ($_POST['phone']) !=''){
		
		$phone=$_POST['phone'];
		
	}
	else{
		
		$error[]='phone Number is missing';
		
	}
	
	
	if(isset($error)  && count($error) >0 )
	{

foreach ($error as $value) {
	# code...
	echo $value;
	echo '<br>';





}}






//database connection

$servername = "localhost";
$username = "root";
$password = "";


// Create connection
$conn = mysqli_connect($servername, $username, $password , 'learn');

// Check connection
if (!$conn) {
    echo"not connected with database";
}
else{
echo "data base cinnecected";

}

$query = "INSERT INTO `jerry`(`fname`, `lname`, `email`, `phone`) VALUES ('$name','$lname','$email','$phone')";
echo $query;
$insert = mysqli_query($conn,$query);
if(!$insert)
{
	
	echo "data not inserted";
}
else{
	
	
	header("location:second.php");




}

}
}
else{

	header('location:login.php');
}
?>

<br>
<br>
<form action = "logout1.php">
<input type="submit" value="logout" </input>


</form>
