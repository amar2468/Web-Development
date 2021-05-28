<!DOCTYPE html>
<html>
<head>
<title>Student Residence Management | Delete Student Residence Details</title>



<style>

ul.second
{
  list-style-type: none;
  float:left;
}

li
{
  float: left;
  background-color:#B8B8B8;


}

li a 
{
  display: block;
  color: black;
  text-align: center;
  font-size:20px;
  padding: 15px 13px;
  text-decoration: none;
  
}


li a:hover 
{
  background-color: #D3D3D3;
}

ul.first
{
	float:right;
	list-style-type: none;
}

footer
{
	display:block;
	text-align:center;
	color:blue;
}	

*{
padding: 0;
margin: 0;
}

h1.a
{
	font-size:40px;
	margin-right: 650px;
}

h1.b 
{
	font-size:40px;
}

input[type=submit]
{
	background-color:blue;
	color:white;
	padding: 8px 35px;
	border-radius: 10px;
}

input[type=number]
{
	background-color:#ade6e6;
	border-radius: 10px;
	padding: 8px 20px;
}

body
{
	background-color:#F5F5F5;
}

p
{
	font-size:20px;
}

form
{
	margin-right:15px;
}



</style>


<h1 class = "a" align="center">Student Residence Management<ul class="first"><li><a href = "register.php">Register</a></li>
<li><a href = "userlogin.php">Log in</a></li>
<li><a href = "userlogout.php">Log out</a></li></ul></h1>
<ul class = "second">
<br>
<li><a href = "index.php"><b>Home</b></a></li>
<li><a href = "addStudentResidenceDetails.php"><b>Add Student Residence Details</b></a></li>
<li><a href = "deleteStudentResidenceDetails.php"><b>Delete Student Residence Details</b></a></li>
<li><a href = "editStudentResidenceDetails.php"><b>Edit Student Residence Details</b></a></li>
<li><a href = "viewcontents.php"><b>View Student Residence Details</b></a></li>
</ul>




</head>
<body>

<?php

session_start();
if(isset($_SESSION['loggedin'] ) && $_SESSION['loggedin'] == 1)
{
	echo '';
}
else
{
	return;
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbStudentResidence";

$connectionDB = new mysqli($servername, $username, $password, $dbname);


if(! $connectionDB) 
{
	die('Could not connect! Unsuccessful attempt ' . mysqli_error());
}


if(isset($_POST['studentid']) )
{
	$identifier = $_POST['studentid'];
	$sqldelete = "DELETE FROM studentresidence WHERE ID = $identifier";
   
	if (mysqli_query($connectionDB, $sqldelete)) 
	{
		echo '<br><br><br><br><br><br>';
		echo "<center><h1>Record deleted successfully";
	} 
	else 
	{
		echo '<br><br><br><br><br><br>';
		echo "<center><h1>Error deleting record: " . mysqli_error($connectionDB);
	}

mysqli_close($connectionDB);
}


?>

<br><br><br><br><br><br><br>
<h1 class = "b" align="center">Deleting Student Residence Details</h1><br>



<form align="center" method="post">

<p>Enter ID of Student you wish to remove from residence database</p><br><br>
<input type="number" name="studentid"><br><br><br>
<input type="submit" name="submit">

</form>


</body>



</html>