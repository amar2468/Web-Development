<?php

// This shows the servername, the username and the password, which are needed in order to create the database.

$servername = "localhost";
$username = "root";
$password = "";

// Make a connection with mysqli so I can create the database

$connection = new mysqli($servername,$username,$password);

// If the connection failed

if($connection->connect_error)
{
	die("The connection has failed: ".$connection->connection_error);
}

// Otherwise, create the database

$sql = "CREATE DATABASE dbstudentresidence";

// If successfully created, then print to screen that it was successful

if($connection->query($sql) == TRUE)
{
	echo "Database successfully connected!";
}

// Otherwise, print error to screen
else
{
	echo "Database connection has failed".$connection->error;
}


// Close database connection

$connection->close();



?>