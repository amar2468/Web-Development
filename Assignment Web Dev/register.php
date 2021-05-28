<!DOCTYPE html>
<html>
<head>
<title>Student Residence Management | Register</title>


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

input[type=text],input[type=password]
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






</style>

<h1 class="a" align="center">Student Residence Management<ul class="first"><li><a href = "register.php">Register</a></li>
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




<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbStudentResidence";


$connToRegister = new mysqli($servername, $username, $password, $dbname);



if ($connToRegister->connect_error) 
{
  die("Connection has failed: " . $connToRegister->connect_error);
}
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = 1)
{
	echo '<br><br><br><br><br><br>';
	echo '<center><h1>You are already logged in! You cannot register until you log off!';
	return;
}



if(isset($_POST['Uname'] ) && isset($_POST['Password'] ))
{
	$uname = $_POST['Uname'];
	$password = $_POST['Password'];
	$_SESSION["username"] = '$uname';
	$_SESSION["pass"] = '$password';
	
	$checkquery = mysqli_query($connToRegister,"SELECT UserName FROM student WHERE UserName ='$uname'");
	
	mysqli_select_db($connToRegister,'dbStudentResidence');
	
	$result=mysqli_fetch_assoc($checkquery);
	
	if (mysqli_num_rows($checkquery) > 0) 
	{
		echo '<br><br><br><br><br><br>';
		echo '<center><h1>Unsuccessful Registration! Try again';
		header( 'location:userlogin.php' );
		return;
				  
	}
	else 
	{
		echo '<br><br><br><br><br><br>';
		$sqladd = "INSERT INTO student(UserName,Password) VALUES ('$uname','$password')";
		echo '<center><h1>You have successfully registered!';
	}
	
	if ($connToRegister->query($sqladd) === TRUE) 
	{
		echo "<center>New record added to Student Residence Database";
	} 
	else 
	{
		echo "<center>Record NOT added. Error: " . $sqladd . "<br>" . $connToRegister->error;
	}
	
	
$connToRegister->close();
}

?>

</head>
<body>
<br><br><br><br><br><br><br>
<h1 class = "b" align="center">Registration</h1><br>
<p align="center">You can register using a username and password. 
<br>This will allow you to use the website after you also log in</p><br>
</head>
<body>

<form method="post" align="center">
<p>Username</p>
<input type="text" name="Uname"><br><br>
<p>Password</p>
<input type="password" name="Password"><br><br><br>
<input type="submit" name="submitbutton">
</form>



</body>



</html>