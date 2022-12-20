<?php

if(isset($_POST["empID"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=jbl2", "root", "");
 $serial = uniqid();
 for($count = 0; $count < count($_POST["empID"]); $count++)
 {  
  $query = "INSERT INTO employee
  (serial, empID, name(bn), name(en), designation, cell_ID, usertype, password) 
  VALUES (:serial, :empID, :name(bn), :name(en), :designation, :cell_ID, :usertype,:password)";
  //VALUES (100, 100, 'hafij', 'hafij', 'apg', '1','a-11', 'password')";

  $statement = $connect->prepare($query);
  $statement->execute(
   array(
    ':serial'   => $serial,
    ':empID'  => $_POST["empID"][$count], 
    ':name(bn),' => $_POST["name(bn),"][$count], 
    ':name(en),'  => $_POST["name(en),"][$count],
    ':designation,'  => $_POST["designation,"][$count],
    ':cell_ID'  => $_POST["cell_ID"][$count],
    ':usertype,'  => $_POST["usertype,"][$count],
    ':password'  => $_POST["password"][$count]
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
