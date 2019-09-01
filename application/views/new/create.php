
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Inline form</h2>
  

  <form class="form-inline" name="createUser" method="post" action="<?php echo base_url();?>User/create">  
  	
    <label for="email">NAME:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter NAME" name="name">
    
    <label for="pwd">EMAIL:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
