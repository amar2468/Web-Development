<!DOCTYPE html>
<html>
<head>
<title>Student Residence Management | Home</title>

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
  padding: 15px 12px;
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
border: 0;
padding: 0;
margin: 0;
}

body
{
	background-color:#F5F5F5;
}


h1
{
	font-size:40px;
	margin-right: 650px;
}


</style>



<h1 align="center">Student Residence Management <ul class="first"><li><a href = "register.php">Register</a></li>
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

?>




<img src = "https://images.adsttc.com/media/images/5017/571e/28ba/0d22/5a00/0008/newsletter/stringio.jpg?1414455357" width = "1300" height = "600"></img><br><br><br><br>


<footer>
<p>Contact Details:</p><br>
<p>Author: Amar Plakalo</p>
<p>Email: office@studentresidence.ie</p><br>
</footer>

</body>



</html>