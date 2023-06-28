<?php
 $hostname="localhost";
 $username="root";
 $password="";
$dbname="classWork";

$conn=mysqli_connect($hostname,$username,$password,$dbname);
if(!$conn) 
{
    die("connection failed");
}
 ?>