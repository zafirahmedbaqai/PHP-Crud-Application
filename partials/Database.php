
<?php
// Database.php

define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "crud_operation");

$connection = mysqli_connect (HOSTNAME,USERNAME,PASSWORD,DATABASE);

if(!$connection){
    die("Connection Failed");
}
else{
    echo"yes connected";
}




// function d($val){
//      echo '<pre>';
//     print_r ($val);exit;
// }


?>
