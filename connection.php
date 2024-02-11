<?php

$servername = "localhost";
$username = "root";
$password = "Hacogal241293.";
$database="EngSoledb";

// Create connection
$conn = new mysqli($servername,$username, $password,$database);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
else 
{
    echo "Connected successfully<br>";
} 
/*
//Create Database
$sql="Create Database EngSoledb";

//Checking

if ($conn->query($sql)==TRUE) 
{
    echo "Database EngSoledb created succesfully";
}
else {
    echo "Error creating database: ".$conn->error;
}

$conn->close();


 //CREATE TABLE

$sql= "Create table employeeinfo(eid int, uname varchar(30), hours int)";

if ($conn->query($sql)==TRUE) 
{
    echo "Table employeeinfo created succesfully";
}
else {
    echo "Error creating table: ".$conn->error;
}

?> */