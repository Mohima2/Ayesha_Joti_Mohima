<?php


$studentid = $_GET["studentid"];
$accountno= $_GET['accountno'];
$priority = filter_input(INPUT_GET, "priority", FILTER_VALIDATE_INT);
//$terms = filter_input(INPUT_GET, "terms", FILTER_VALIDATE_BOOL);

//if ( ! $terms) {
  //  die("Terms must be accepted");
//}  

//database connection
$conn = new mysqli('localhost','root','','test');
        
if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}           
        
$sql = "INSERT INTO loan(studentid,accountno, priority)
        VALUES (?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "iii",
                       $studentid,
                       $accountno,
                       $priority,
                       );

mysqli_stmt_execute($stmt);

echo "Successfully loan delivered of 50tk";