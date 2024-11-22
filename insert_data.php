<?php
include 'partials/Database.php';
if(isset($_POST['add_students'])){
    $FirstName = $_POST['firstname'];
    $LastName = $_POST['lastname'];
    $Age = $_POST['age'];
}

if($FirstName == "" || empty($FirstName)){
    
    header('location:index.php?message= you need the first name!');
}

else {
    $query = "INSERT INTO `students` ( `first_name`, `last_name`, `age`) VALUES ( '$FirstName', '$LastName', '$Age')";

// d($_POST);
    $result = mysqli_query($connection,$query);

    if(!$result){
        die("Query Failed".mysqli_error());
    }


    else{
        header('location:index.php?insert_msg=your data has been suessessfully!');
    }
}



?>