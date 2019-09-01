
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>show data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>




  <div class="container">
  <div class="table-wrapper" >
    <div class="table-title">
      <div class="row">
        <div class="col-sm-8"><h2>Student <b>Details</b></h2></div>
        
      </div>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Class(year)</th>
          <th>Email</th>
          <th>Password</th>
          
        </tr>
      </thead>
      
    
  
  
  
     
  <?php

  if (! empty($users)){  foreach ($users as $value) { ?>
       <tr>
          <td><?php echo $value['ID'];?></td>
          <td><?php echo $value['Name'];?></td>
          <td><?php echo $value['Cyear'];?></td>
          <td><?php echo $value['Email'];?></td>
          <td><?php echo $value['Password'];?></td>
          
        </tr>
      
      
   
    
  
  <?php
  }}
  ?>

</table>
  </div>
</div>
</div>

</body>
</html>
