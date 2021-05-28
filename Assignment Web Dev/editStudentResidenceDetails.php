<!DOCTYPE html>
<html>
<head>
<title>Student Residence Management | Edit Student Residence Details</title>



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

input[type=text],input[type=email],input[type=number]
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

$connectionEdit = new mysqli($servername, $username, $password, $dbname);

if ($connectionEdit->connect_error) 
{
  die("The connection has failed: " . $connectionEdit->connect_error);
}

if(isset($_POST['idneeded']) && isset($_POST['first_name']) && isset($_POST['surname']) && isset($_POST['email_address']) && isset($_POST['address_student']) && isset($_POST['paidprice']))
{
	$idstudent = $_POST['idneeded'];
	$name_of_student = $_POST['first_name'];
	$surname_of_student = $_POST['surname'];
	$email_of_student = $_POST['email_address'];
	$addr_of_student = $_POST['address_student'];
	$paid_price = $_POST['paidprice'];
	
	$sqlupdate = "UPDATE studentresidence SET Name = '$name_of_student',Surname = '$surname_of_student',Email = '$email_of_student',Address = '$addr_of_student', PricePaid = '$paid_price' WHERE ID = '$idstudent'";

	if (mysqli_query($connectionEdit, $sqlupdate)) 
	{
		echo '<br><br><br><br><br><br>';
		echo "<center><h1>Record updated successfully";
	} 
	else 
	{
		echo '<br><br><br><br><br><br>';
		echo "<center><h1>Error updating record: " . mysqli_error($connectionEdit);
	}
mysqli_close($connectionEdit);

}



?>

<br><br><br><br><br><br>
<h1 class = "b" align = "center">Editing Student Residence Details</h1><br>
<p align = "center">Enter in the details so you can change the student residence details</p><br>
<form align="center" method="post">
<p>ID</p>
<input type="text" name="idneeded"><br>
<p>Name</p>
<input type="text" name="first_name"><br>
<p>Surname</p>
<input type="text" name="surname"><br>
<p>Email</p>
<input type="text" name="email_address"><br>
<p>Address</p>
<input type="text" name="address_student"><br>
<p>Price paid</p>
<input type="number" name="paidprice"><br><br><br>

<input type="submit" name="submit" value = "Update">

</form>



</body>



</html>