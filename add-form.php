<?php
if(isset($_POST['submit']))
{
    include "db.php";
    $name=$_POST['name1'];
    $fname=$_POST['fname'];
    $phone=$_POST['phone'];
    // echo $name."<br>";
    // echo $fname."<br>";
    // echo $phone."<br>";
    $sql = "INSERT into data1 (name,fname,phone) values('$name','$fname','$phone')";
//echo $sql;
if(mysqli_query($conn,$sql))
{
    echo" data inserted successfully";
}
else
{
    echo "data not inserted";
}
die();
}
?>