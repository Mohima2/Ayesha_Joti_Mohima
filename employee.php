<?php



$connect = new PDO("mysql:host=localhost;dbname=project", "root", "");
function fill_unit_select_box($connect)
{ 
 $output = '';
 $query = "SELECT * FROM designation";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["title"].'">'.$row["title"].'</option>';
 }
 return $output;
}

function fill_unit_select_box2($connect)
{ 
 $output = '';
 $query = "SELECT * FROM cell";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["cell_code"].'">'.$row["cell_code"].'</option>';
 }
 return $output;
}



?>
<!DOCTYPE html>
<html>
 <head>
  <title>Add Remove Select Box Fields Dynamically using jQuery Ajax in PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.map">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.slim.min.map"></script>
 </head>
 <body>
  <br />
  <div class="container">
   <h4 align="center">Add Employee in the List</h4>
   <br />
   <form method="post" id="insert_form">
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered" id="item_table">
      <tr>
       <th>Employee Code</th>
       <th>Name(Bangla)</th>
       <th>Name(English)</th>
       <th>Designation</th>
       <th>Cell Code</th>
       <th>User Role</th>
       <th>Password</th>
      </tr>
     </table>
     <button type="button" name="add" class="btn btn-success btn-sm add"><span class="glyphicon glyphicon-plus"></span></button>
     <div align="center">
      <input type="submit" name="submit" class="btn btn-info" value="Insert" />
     </div>
    </div>
   </form>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';
  html += '<tr>';
  html += '<td><input type="text" name="empID[]" class="form-control empID" /></td>';
  html += '<td><input type="text" name="name(bn)[]" class="form-control name(bn)" /></td>';
  html += '<td><input type="text" name="name(en)[]" class="form-control name(en)" /></td>';
  html += '<td><select name="designation[]" class="form-control designation"><option value="">Select Unit</option><?php echo fill_unit_select_box($connect); ?></select></td>';
  html += '<td><select name="cell_ID[]" class="form-control cell_ID"><option value="">Select Unit</option><?php echo fill_unit_select_box2($connect); ?></select></td>';
  html += '<td><select name="usertype[]" class="form-control usertype"><option value="">Select Unit</option><?php echo fill_unit_select_box($connect); ?></select></td>';
  html += '<td><input type="password" name="password[]" class="form-control password" /></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
  $('#item_table').append(html);
 });
 
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
 });
 
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.empID').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Employee Code at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.designation').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Enter Designation at "+count+" Row</p>";
    return false;
   }
   count = count + 1;
  });
  
  $('.password').each(function(){
   var count = 1;
   if($(this).val() == '')
   {
    error += "<p>Set Password at "+count+" Row</p>";
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
      $('#error').html('<div class="alert alert-success">Item Details Saved</div>');
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
