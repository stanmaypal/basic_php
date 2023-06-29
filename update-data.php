<?php
if(isset($_POST['submit']))
{
    include "db.php";
    $name=$_POST['name1'];
    $fname=$_POST['fname'];
    $phone=$_POST['phone'];
    $sid=$_POST['sid'];
    // echo $name."<br>";
    // echo $fname."<br>";
    // echo $phone."<br>";
    $sql = "UPDATE `data1` SET name='$name',fname='$fname',phone='$phone' WHERE id ='$sid'";
// echo $sql;
// die();
if(mysqli_query($conn,$sql))
{
    echo"alert('Data updated !!')";
    header("Location:from.php");
}
}
else
{
    echo "data not updated";
}
die();

?>