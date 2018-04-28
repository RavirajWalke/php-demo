<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$dbhost="localhost";
$dbuser="root";
$pass="2014bcs021";
$dbname="mydb";
$conn=mysqli_connect($dbhost,$dbuser,$pass,$dbname);
if(!$conn)
    die(mysqli_connect_error());
$sql="create table t1(id int,name varchar(10),age int)";
if(mysqli_query($conn,$sql))
{
    echo 'table t1 created successfully';
}
for($i=0;$i<3;$i++)
{
$id=1;
$name1='raviraj';
$age=20;
$sql="insert into t1 values(".$id.",'".$name1."',".$age.")";
$result = mysqli_query($conn,$sql);
if(!$result_)
    echo mysqli_error($conn);
}
$sql="select * from t1";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    echo "<table border='blue'><tr><th>id</th><th>Name</th><th>Age</th></tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["age"]."</td><tr>";
    }
    echo "</table>";
}
mysqli_close($conn);
?>