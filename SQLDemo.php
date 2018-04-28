<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql="CREATE DATABASE myDB1";
if($conn->query($sql)==TRUE)
{
    echo "<br>".'Database created successfully';
}
else
{
    echo "<br>".'error in creating database '.$conn->error;
}
$sql="USE myDB1";
if($conn->query($sql)==TRUE)
{
    echo 'changed db to myDB1';
}
 else 
{
     echo $conn->error;
}
$sql="CREATE TABLE Student(Reg_No varchar(20),Name varchar(30),DOB varchar(10))";
if($conn->query($sql))
{
    echo "<br>".'Table Created Successfully';
}
 else 
{
     echo "<br>".$conn->error;
}
$sql="insert into Student values('2014BCS021','Raviraj Yogiraj Walke','21/09/1996')";
if($conn->query($sql))
{
    echo "inserted successfully";
}
 else {
    echo 'error in inserting';
}
$conn->close();
?>