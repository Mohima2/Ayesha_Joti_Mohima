<?php
//index.php

$connect = new PDO("mysql:host=localhost;dbname=jbl2", "root", "");
function fill_unit_select_box($connect)
{ 
 $output = '';
 $query = "SELECT * FROM employee ORDER BY empID ASC";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["name(bn)"].'">'.$row["name(bn)"].'</option>';
 }
 return $output;
}

function fill_unit_select_box2($connect)
{ 
 $output2 = '';
 $query2 = "SELECT * FROM desination ORDER BY id ASC";
 $statement2 = $connect->prepare($query2);
 $statement2->execute();
 $result2 = $statement2->fetchAll();
 foreach($result2 as $row2)
 {
  $output2 .= '<option value="'.$row2["title"].'">'.$row2["title"].'</option>';
 }
 return $output2;
}

function fill_unit_select_box3($connect)
{ 
    $output3 = '';
    $query = "SELECT * FROM shift";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    foreach($result as $row)
    {
     $output3 .= '<option value="'.$row["title"].'">'.$row["title"].'</option>';
    }
    return $output3;
   }
?>
<!DOCTYPE html>
<html>
 <head>
  <title>Office Duty</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="jquery-ui.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="timepicker.css">
  <script type="text/javascript" src="timepicker.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>

 <?php include ("header.php"); ?>
  <br />
  <div class="container">
   
   <h4 align="center">Office Duty</h4>
   <br />
   <form method="post" id="insert_form">
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered" id="item_table">
      <tr>
       
       <th>Employee Name</th>
       <th>Designation</th>
       <th>Shift</th>
       <th>Date</th>
       <th>Time From</th>
       <th>Time To</th>
      
      </tr>
      <tr>
      <td><select name="name[]" class="form-control"><option value="">Select ID</option><?php echo fill_unit_select_box($connect); ?></select></td>

        <td><select name="designation[]" class="form-control"><option value="">Select Designation</option><?php echo fill_unit_select_box2($connect); ?></select></td>

        <td><select name="shift[]" class="form-control"><option value="">Select Shift</option><?php echo fill_unit_select_box3($connect); ?></select></td>

        <td><input type="text" name="Datepicker[]" id="datepicker" class="form-control item_name" /></td>

        <div>
        <td><input type="text" id="timepkr" name="time" style="width:100px;float:left;" class="form-control" placeholder="HH:MM" /><button type="button" class="btn btn-primary" onclick="showpickers('timepkr',24)" style="width:40px;float:left;"><i class="fa fa-clock-o"></i></td>


        <td><input type="text" id="timepkr" name="timeTo"  type="button" style="width: 100px; float: left" class="form-control" placeholder="HH:MM" /><button type="button" class="btn btn-primary" onclick="showpickers('timepkr',24)" style="width:40px;float:left;"><i class="fa fa-clock-o"></i></td>
        </div>

        <div class="timepicker"></div>
    </tr>
     </table>
     <div><button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button></div>
     <div align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Insert" />
     </div>
    </div>
   </form>
  </div>
 </body>
</html>

<script src="jquery-3.6.2.min.js"></script>
<script src="jquery-ui.min.js"></script>

<script>
    $(document).ready(function(){
        $('#datepicker').datepicker({
            dateFormat: "dd-mm-yy", 
            changeMonth: true ,
            changeYear: true
        });
    });
</script>


<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){

    
  var html = '';
  html += '<tr>';
  
  html += '<td><select name="empID[]" class="form-control"><option value="">Select ID</option><?php echo fill_unit_select_box($connect); ?></select></td>';
  html += '<td><select name="designation[]" class="form-control"><option value="">Select Designation</option><?php echo fill_unit_select_box2($connect); ?></select></td>';
  html += '<td><select name="shift[]" class="form-control"><option value="">Select Shift</option><?php echo fill_unit_select_box3($connect); ?></select></td>';
  html += '<td><input type="text" name="Datepicker[]" id="datepicker" class="form-control" /></td>';

  html += '<td> <input type="text" class="timepkr" name="timeTo" style="width:100px;float:left;" class="form-control" placeholder="HH:MM" /><button type="button" class="btn btn-primary"  style="width:40px;float:left;"><i class="fa fa-clock-o"></i></td>';
  html += ' <td><input type="text" class"timepkr" name="timeTo" style="width:100px;float:left;" class="form-control" placeholder="HH:MM" /><button type="button" class="btn btn-primary"  style="width:40px;float:left;"><i class="fa fa-clock-o"></i></div>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });

 $(document).ready(function(){
        $('#datepicker').datepicker({
            dateFormat: "dd-mm-yy", 
            changeMonth: true ,
            changeYear: true
        });
    });
 
 $(document).on('click', '.remove', function(){  
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
 
  
  $('.shift').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Shift at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });

  
  $('.Datepicker').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Select Date at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == 'ok')
     {
      $('#item_table').find("tr:gt(0)").remove();
      $('#error').html('<div class="alert alert-success"> Details Saved</div>');
     }
    }
   });
  }
  else
  {
   $('#error').html('<div class="alert alert-danger">'+error+'</div>');
  }
 });
 
});
</script>


