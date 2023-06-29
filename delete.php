<?php
if(isset($_GET['delid']))
{
    include "db.php";
    $delid=$_GET['delid'];
    // echo $delid;

    $sql="delete from data1 where id='$delid'";

    if(mysqli_query($conn,$sql))
{
    //echo" data deleted successfully";
    header("Location:from.php");
}
else
{
    echo "data not deleted";
}
}
?>
