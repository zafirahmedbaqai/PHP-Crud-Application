<?php include 'partials/Database.php'?>


<div class="row">
  <div class="col">
    <h3>ALL STUDENTS</h3>
</div>
<div class="col">

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-primary me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Add Student</button>
</div>
</div>
</div>


<table class="table" id="usertable ">
  <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FIRST NAME</th>
      <th scope="col">LAST NAEM</th>
      <th scope="col">AGE</th>
      <th scope="col">UPDATE</th>
      <th scope="col">DELETE</th>
    </tr>
  </thead>
  <tbody>
  <?php

    $query = "select * from `students` ";

    $result = mysqli_query($connection, $query);

    if(!$result){
      die("query Failed".mysqli_error());
    }
    
    
     else{

      while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
           <td><?php echo $row['id'];?></td>
           <td><?php echo $row['first_name'];?></td>
            <td><?php echo $row['last_name'];?></td>
            <td><?php echo $row['age'];?></td>
            <td><a href="update_page.php?id=<?php echo $row['id'];?>"class="btn btn-success">Update</a></td>
            <td><a href="delete_page.php?id=<?php echo $row['id'];?>"class="btn btn-danger">Delete</a></td>
      </tr>
      <?php
      }}
?>


    


  
  </tbody>
</table>



<?php
if (isset ($_GET['meaasge'])){
  echo"<h6>".$_GET['message']."</h6>";
}

?>
<?php
if (isset ($_GET['insert_msg'])){
  echo"<h6>".$_GET['insert_msg']."</h6>";
}
?>

<?php
if (isset ($_GET['update_msg'])){
  echo"<h6>".$_GET['update_msg']."</h6>";
}
?>

<?php
if (isset ($_GET['delete_msg'])){
  echo"<h6>".$_GET['delete_msg']."</h6>";
}
?>

