
<div class="container">

<form action="<?php echo base_url().'User/edit'.$value['ID']?>" method="POST" class="form-inline">
    <div class="form-group">
      <label for="email">NAME:</label>
      <input type="text" class="form-control" value="<?php set_value('name',$user['name']);?>" id="email" placeholder="Name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">COURSE (YEAR):</label>
      <input type="text" class="form-control" value="<?php set_value('cyear',$user['cyear']);?>" id="pwd" placeholder="COURSE (YEAR)" name="cyear">
    </div>
    <div class="form-group">
      <label for="email">EMAIL:</label>
      <input type="email" class="form-control" value="<?php set_value('email',$user['email']);?>" id="email" placeholder="Email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">PASSWORD:</label>
      <input type="password" class="form-control" value="<?php set_value('password',$user['password']);?>" id="pwd" placeholder="Password" name="password">
    </div>

    <button type="submit" class="btn btn-primary " name="submit" style="margin-top:25px; margin-left: 30px">Submit</button>
  </form>


<!-- <div class="container">
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
          <th>Actions</th>
          
        </tr>
      </thead>
      
      
      
      
      
      <tbody>
        <?php
        if (! empty($users)) { foreach ($users as  $value)  { ?>
        
        
        
        
        <tr>
          <td><?php echo $value['ID'];?></td>
          <td><?php echo $value['Name'];?></td>
          <td><?php echo $value['Cyear'];?></td>
          <td><?php echo $value['Email'];?></td>
          <td><?php echo $value['Password'];?></td>
          <td>
            <a href="<?php echo base_url();?>?id=<?php echo $value['ID'];?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
            <a href="delete.php?id=<?php echo $value['ID'];?>" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
          </td>
          
        </tr>
        
        
        
        
        
        <?php
        }}  
        ?>
      </tbody>
    </table>
  </div>
</div>

} -->


</body>
</html>