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
    <div class="container">
        <div class="row">
            <form action="add-form.php" method="post">
                <div class="mb-3" style="width: 50%;">
                  <label for="exampleInputEmail1" class="form-label">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1"  title="NAme" name="name1">
                  
                </div>
                <div class="mb-3"  style="width: 50%;">
                  <label for="exampleInputPassword1" class="form-label">Father's NAme</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" title="Father's name" name="fname">
                </div>
                <div class="mb-3"  style="width: 50%;">
                    <label for="exampleInputPassword1" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" title="Phone No." name="phone">
                  </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
    <table class="table">
      <tr>
        <th>Sr.</th>
        <th>Name</th>
        <th>Father's Name</th>
        <th>Phone</th>
        <th>Action</th>
      </tr>
<?php
include "db.php";
$sql = "SELECT * FROM data1";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  $a=1;
  while($row = mysqli_fetch_assoc($result)) {
    ?>
      <tr>
      <td> <?php echo $a; ?></td>   
    
      <td> <?php echo $row['name']; ?></td>   
      <td> <?php echo $row['fname']; ?></td>   
      <td> <?php echo $row['phone']; ?></td> 
            <td>
        <a href="delete.php?delid=<?php echo($row['id']);?>" class="btn btn-danger">Delete</a>  
        <a href="update.php?upid=<?php echo($row['id']);?>" class="btn btn-success">Update</a>  
      </td>
      </tr>  


    <?php
     $a++;
  }
 
}


?>
      
    </table>
</body>
</html>
