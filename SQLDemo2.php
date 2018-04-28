<?php
$hostname="localhost";
$username="root";
$pass="";
$db="mydb1";
$conn=mysqli_connect($hostname,$username,$pass,$db);
if(!$conn)
    die(mysqli_connect_error());
$sql="select * from student";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    echo "<table border='red'><tr><th>Roll_No</th><th>Name</th><th>DOB</th></tr>";
    while($row=mysqli_fetch_assoc($result))
    {
        echo "<tr><td>".$row["Reg_No"]."</td><td>".$row["Name"]."</td><td>".$row["DOB"]."</td></tr>";
    }
    echo "</table>";
}
