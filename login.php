<form method="POST">

Username<input type="text" name=user></input><br><br>
Password<input type="password" name=pass></input><br>
<input type="submit"></input>

</form>
<?php
session_start();




$user=$_POST['user'];
$pass=$_POST['pass'];

$username='admin';
$password='admin';
/*

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
echo "";

}






//select query start
$sql= "SELECT * FROM jerry";
$result=mysqli_query($conn, $sql);


$row = mysqli_fetch_assoc($result);


*/

if($user==$username && $pass==$password )
{
	
	$_SESSION['alpha']=1  ;

	
	
	
	
	
	
	if($_SESSION['alpha']==1){
	
	 header("location:first.php");
	
}
else{
	
	header("location:login.php");
}
	
	
}

else{
	
	
	echo "";
}


?>



