<?php

if(isset($_POST["empID"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=jbl2", "root", "");
 $dutyID = uniqid();
 for($count = 0; $count < count($_POST["empID"]); $count++)
 {  
  $query = "INSERT INTO info
  (dutyID, empID, shiftID, Date, Time) 
  VALUES (:dutyID, :empID, :shiftID, :Date, :Time)
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':dutyID'   => $order_id,
    ':empID'  => $_POST["empID"][$count], 
    ':shiftID' => $_POST["shiftID"][$count], 
    ':Date'  => $_POST["Date"][$count],
    ':Time'  => $_POST["Time"][$count]
   )
  );
 }
 $result = $statement->fetchAll();
 if(isset($result))
 {
  echo 'ok';
 }
}
?>
