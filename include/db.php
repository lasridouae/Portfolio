<?php 
$localhost="localhost";
$username="root";
$password="";
$db="sql";

$conn=mysqli_connect($localhost,$username,$password,$db);

if(!$conn)
die('error'.mysqli_connect_error());
else
{
    echo "connected";
}
?>