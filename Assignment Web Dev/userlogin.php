<!DOCTYPE html>
<html>
<head>
<title>Student Residence Management | User Login</title>


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

body
{
	background-color:#F5F5F5;
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


<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbStudentResidence";


$connDB = new mysqli($servername, $username, $password, $dbname);



if ($connDB->connect_error) 
{
  die("Connection has failed: " . $connDB->connect_error);
}

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = 1)
{
	echo '<br><br><br><br><br><br>';
	echo '<center><h1>You are already logged in! You cannot log in again until you log off!';
	return;
}

if(isset($_POST['username'] ) && isset($_POST['pass'] ))
{
	$uname = $_POST['username'];
	$password = $_POST['pass'];
	$_SESSION["username"] = '$uname';
	$_SESSION["pass"] = '$password';
	
	$loginusernamepass = mysqli_query($connDB,"SELECT UserName,Password FROM student WHERE UserName ='$uname' AND Password = '$password'");
	
	if (mysqli_num_rows($loginusernamepass) > 0) 
	{
		echo '<br><br><br><br><br><br>';
		echo '<center><h1>You have successfully logged on! Enjoy using the website!';
		$_SESSION['loggedin'] = 1;
        $_SESSION['timeout'] = time();
		return;
                  
    }
	else 
	{
		echo '<br><br><br><br><br><br>';
		echo '<center><h1>Incorrect username and password. Try again';
		$_SESSION["loggedin"] = 0;
		session_unset();
		return;
    }
	
	
	
$connDB->close();
}

?>

<br><br><br><br><br><br><br>
<h1 class = "b" align="center">User Login Page</h1><br>
<p align="center">You can login using your username and password. 
<br>This will allow you to use the website</p><br>
</head>
<body>

<form method="post" align="center">
<p>Username</p>
<input type="text" name="username"><br><br>
<p>Password</p>
<input type="password" name="pass"><br><br><br>
<input type="submit" name="submitbutton">
</form>




</body>



</html>