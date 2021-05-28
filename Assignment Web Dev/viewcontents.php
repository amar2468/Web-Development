<!DOCTYPE html>
<html>
<head>
<title>Student Residence Management | View Student Residence Details</title>


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


body
{
	background-color:#F5F5F5;
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

p
{
	font-size:20px;
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
$database = "dbStudentResidence";
$mysqli = new mysqli($servername, $username, $password, $database);

echo'<br><br><br><br><br><br><br>';

echo'<h1 class = "b" align="center">Viewing Student Residence Details</h1><br>
<p align="center">This shows the database contents for the student<br>
residence management system</p><br>';


$sqlcommand = "SELECT * FROM studentresidence";

if ($result = $mysqli->query($sqlcommand)) 
{
	while ($row = $result->fetch_assoc()) 
	{
		echo "<center>".$row["ID"];
		echo'<br />';
		echo "<center>".$row["Name"];
		echo'<br />';
		echo "<center>".$row["Surname"];
		echo'<br />';
		echo "<center>".$row["Email"];
		echo'<br />';
		echo "<center>".$row["Address"];
		echo'<br />';
		echo "<center>".$row["PricePaid"];
		echo'<br />';
		echo'<br />';
		
		
		
	}
}
		





?>






</body>



</html>