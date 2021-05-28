<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbStudentResidence";


$connectionToDB = mysqli_connect($servername, $username, $password, $dbname);



if (!$connectionToDB) 
{
  die("The connection has failed: " . mysqli_connect_error());
}


$sqlcreate = "CREATE TABLE student (
UserName VARCHAR(30) NOT NULL,
Password VARCHAR(30) NOT NULL
)";




if($connectionToDB->query($sqlcreate) == TRUE)
{
	echo "The Table has been successfully created!";
}
else
{
	echo "Table has NOT been created" . $connectionToDB->error;
}
$connectionToDB->close();





?>

</body>
</html>
