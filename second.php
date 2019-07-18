
<table border="5">
<tr>
<th>ID</th>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>EMAIL</th>
<th>PHONE NUMBER</th>

<th>Delete</th>
<th>Update</th>

</tr>







<?php




session_start();


if($_SESSION['alpha']==1){













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

if  (mysqli_num_rows($result) >0) {
	//output data of each row
	while($row = mysqli_fetch_assoc($result)) {
	?>	
		<tr>
	<td>  <?php echo  $row["id"];?></td>
    <td>  <?php echo  $row["fname"];?></td>
	<td>  <?php echo  $row["lname"];?></td>
	<td>  <?php echo  $row["email"];?></td>
	<td>  <?php echo  $row["phone"];?></td>
 <td> <a href="del1.php?id=<?php echo $row["id"];?>">Delete</a></td>
    <td> <a href="edit1.php?id=<?php echo $row["id"];?>">Update</td>
	  </tr>
  <?php

}




}

}



//enter code



?>


</table>
<br>
<br>
<form action = "first.php">
<input type="submit" value="home" </input>


</form>




<br>
<br>
<form action = "logout.php">
<input type="submit" value="logout" </input>


</form>

