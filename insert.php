<?php

$con = mysqli_connect("localhost", "root", "root", "email-database");

if(!$con)
{
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo "<br>";


if(!mysqli_select_db($con,'email-database'))
{
    echo 'Database not selected';
}
echo "Database selected successfully";
echo "<br>";


$Name = $_POST['name'];
$Email = $_POST['email'];

$sql = "INSERT INTO person (Name,Email) VALUES ('$Name','$Email')";

if(!mysqli_query($con,$sql))
{
    echo 'Information was not inserted into database';
}
else
{
    echo 'Email and name saved into database';
}

header("refresh:6; url=index.html");

mysqli_close($con);
?>
