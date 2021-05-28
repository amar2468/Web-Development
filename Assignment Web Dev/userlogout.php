<!DOCTYPE html>
<html>
<head>

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


</style>



<title>Student Residence Management | User Logout</title>
</html>
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
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] = 1)
{
	echo '<br><br><br><br><br><br>';
	session_unset();
	session_destroy();
	echo '<center><h1>Successfully Logged off!';
	$_SESSION['loggedin'] = 0;
}
else
{
	echo '<br><br><br><br><br><br>';
	echo '<center><h1>You are trying to log off even though you are already logged off!';
}
?>

</body>