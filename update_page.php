<?php include 'header.php'?>
<?php include 'main.php'?>
<?php include 'partials/Database.php'?>



<?php
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  

    $query = "select * from `students` where `id` = '$id'";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die("query Failed".mysqli_error());
    }
    
    
     else{
      $row = mysqli_fetch_assoc($result);
           
            //  print_r($row);
     }
    }
      


  ?>

  <?php
  if(isset($_POST['update_students'])){
      if(isset($_GET['id_new'])){
        $idnew = $_GET['id_new'];
      }

    
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $age = $_POST['age'];
$query = "update `students` set `first_name` = '$fname', `last_name` = '$lname', `age` = '$age' where `id` = '$idnew'";


$result = mysqli_query($connection, $query);

if(!$result){
  die("query Failed".mysqli_error());
}
else{
  header('location:index.php?update_msg=you have successfully updated the data');
}


  }

 

  ?>



<div class="container">
  <form action="update_page.php?id_new=<?php echo $id;?>" method="post">
<div class="form-group">
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="First Name" name="firstname" aria-describedby="basic-addon1" value="<?php echo $row['first_name'] ?? ""?> ">
</div>

<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Last Name" name="lastname" aria-describedby="basic-addon2" value="<?php echo $row['last_name']?>">

</div>
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Age" name="age" aria-describedby="basic-addon3" value="<?php echo $row['age']?>">

</div>
</div>
<input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
</form>
</div>

