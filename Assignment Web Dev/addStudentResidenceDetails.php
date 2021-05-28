<!DOCTYPE html>
<html>
<head>
<title>Student Residence Management | Adding Student Residence Details</title>

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

input[type=text],input[type=password],input[type=email],input[type=number]
{
	background-color:#ade6e6;
	border-radius: 10px;
	padding: 8px 20px;
}

p
{
	font-size:20px;
}

body
{
	background-color:#F5F5F5;
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


$connectToStudentResidence = new mysqli($servername, $username, $password, $dbname);



if ($connectToStudentResidence->connect_error) 
{
  die("Connection has failed: " . $connectToStudentResidence->connect_error);
}


if(isset($_POST['fname'] ) && isset($_POST['sname'] ) && isset($_POST['email'] ) && isset($_POST['address'] ) && isset($_POST['pricepaid'] ))
{
	$first_name = $_POST['fname'];
	$surName = $_POST['sname'];
	$Email_addr = $_POST['email'];
	$addr = $_POST['address'];
	$price = $_POST['pricepaid'];
	
	$sqladd = "INSERT INTO studentresidence(Name,Surname,Email,Address,PricePaid) VALUES ('$first_name','$surName','$Email_addr','$addr','$price')";
	
	if ($connectToStudentResidence->query($sqladd) === TRUE) 
	{
		echo '<br><br><br><br><br><br>';
		echo "<center><h1>New record added to Student Residence Database";
	} 
	else 
	{
		echo '<br><br><br><br><br><br>';
		echo "<center><h1>Record NOT added. Error: " . $sqladd . "<br>" . $connectToStudentResidence->error;
	}

$connectToStudentResidence->close();
}


?>
<br><br><br><br><br>
<h1 class = "b" align="center">Input Student Residence Details</h1><br>
<p align="center">The record will be saved in the student residence management
database</p><br><br>



<form method="post" align="center">
<p>Name</p><input type="text" name = "fname"><br><br>
<p>Surname</p><input type="text" name = "sname"><br><br>
<p>Email</p><input type="email" name = "email"><br><br>
<p>Address</p><input type="text" name = "address"><br><br>
<p>Price Paid</p><input type="number" name = "pricepaid"><br><br>
<input type="submit" name="submit">
</form>


</body>



</html>