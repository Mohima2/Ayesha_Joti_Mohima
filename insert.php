<?php
//insert.php;

if(isset($_POST["empID"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=jbl", "root", "");
 $dutyID = uniqid();
 for($count = 0; $count < count($_POST["empID"]); $count++)
 {  
  $query = "INSERT INTO info
  (dutyID, empID, shiftID, Datepicker, Time, TimeTo) 
  VALUES (:dutyID, :empID, :shiftID, :Datepicker, :Time, TimeTo)
  ";
  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':dutyID'   => $order_id,
    ':empID'  => $_POST["empID"][$count], 
    ':shiftID' => $_POST["shiftID"][$count], 
    ':Datepicker'  => $_POST["Datepicker"][$count],
    ':Time'  => $_POST["Time"][$count],
    ':TimeTo'  => $_POST["TimeTo"][$count]
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
