<?php

//error_reporting(0);
//if (isset($name)){
@$name = $_GET['name'];
//}


//if ( ! $terms) {
  //  die("Terms must be accepted duh");
//}   
$conn = new mysqli('localhost','root','','test');
//$host = "localhost";
//$dbname = "message_db";
//$username = "root";
//$password = "";
        
//$conn = mysqli_connect(hostname: $host,
//                       username: $username,
  //                     password: $password,
    //                   database: $dbname);
        
if (mysqli_connect_error()) {
    die("Connection error: " . mysqli_connect_error());
}           
        
$sql = "INSERT INTO message_db (name)
        VALUES (?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "s",
                       $name,
                       );

mysqli_stmt_execute($stmt);

echo "Record saved.";

?>