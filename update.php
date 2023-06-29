<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_GET['upid']))
{
    include "db.php";
    $upid=$_GET['upid'];

    $sql="SELECT * FROM data1 WHERE id='$upid'"; // Fix: Added * to select all columns
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container">
        <div class="row">
            <form action="update-data.php" method="post">
                <div class="mb-3" style="width: 50%;">
                <input type="text" class="form-control" id="exampleInputEmail1" hidden value="<?php echo $row['id']; ?>" title="Name" name="sid">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    
                </div>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row['name']; ?>" title="Name" name="name1">
                </div>
                <div class="mb-3" style="width: 50%;">
                    <label for="exampleInputPassword1" class="form-label">Father's Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" title="Father's name" value="<?php echo $row['fname']; ?>" name="fname">
                </div>
                <div class="mb-3" style="width: 50%;">
                    <label for="exampleInputPassword1" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" title="Phone No." value="<?php echo $row['phone']; ?>" name="phone">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    
<?php
}
?>
</body>
</html>
