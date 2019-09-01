<?php if ( ! empty($users)) {
 
 ?>
<div class="container">
  <form action="<?php echo base_url().'User/update'?>" method="POST" class="form-inline">

      <div class="form-group">
           
      <input type="hidden" class="form-control" id="email" value="<?php echo $users[0]['ID'];?>" placeholder="Name" name="ID">
      
    </div>

    <div class="form-group">
      <label for="email">NAME:</label>
      <input type="text" class="form-control" id="email" value="<?php echo $users[0]['Name'];?>" placeholder="Name" name="name">
    </div>
    <div class="form-group">
      <label for="exampleSelect1">select Course</label>
      <select class="form-control" id="exampleSelect1" name="course">
        <option>B.tech</option>
        <option>M.tech</option>
        <option>Bca</option>
        <option>Mca</option>
        <option>Phd</option> 
      </select>
    </div>
    <div class="form-group">
      <label for="pwd">COURSE (YEAR):</label>
      <input type="text" class="form-control" id="pwd" value="<?php echo $users[0]['Cyear'];?>" placeholder="COURSE (YEAR)" name="cyear">
    </div>
    <div class="form-group">
      <label for="email">EMAIL:</label>
      <input type="email" class="form-control" id="email" value="<?php echo $users[0]['Email'];?>" placeholder="Email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">PASSWORD:</label>
      <input type="password" class="form-control" id="pwd" value="<?php echo $users[0]['Password'];?>" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-primary " name="submit" style="margin-top:25px; margin-left: 30px">Submit</button>
  </form>
</div>
<div class="container">
  <div class="">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-8"><h2 style="
    font-family: 'Acme', sans-serif;
">Student <b>Details</b></h2></div>
        
      </div>
    </div>
    <table class="table table-bordered bg-info">
      <thead>
        <tr>
          <th>Name</th>
          <th>Class</th>
          <th>Year</th>
          <th>Email</th>
          <th>Password</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if (! empty($studentdata)) { foreach ($studentdata as $value) {?>
        <tr>
          <td><?php echo $value['Name'];?></td>
          <td><?php echo $value['course'];?></td>
          <td><?php echo $value['Cyear'];?></td>
          <td><?php echo $value['Email'];?></td>
          <td><?php echo $value['Password'];?></td>
          <td>
            
            <a class="edit" href="<?php echo base_url().'User/editStudent'?>/<?php echo $value['ID'];?>" title="Edit" data-toggle="tooltip"><i class="far fa-edit"></i></a>
            <a class="delete" href="<?php echo base_url().'User/delete'?>/<?php echo $value['ID'];?>"" title="Delete" data-toggle="tooltip"><i class="far fa-trash-alt"></i></a>
          </td>
        </tr>
        <?php }}?>
        
      </tbody>
    </table>
  </div>
</div>
<?php } else{?>
<!-- <?php echo "<pre>"; print_r($studentdata); ?>
 -->

  <?php //echo "<pre>"; print_r($users[0]['ID']); ?> 

  <?php //echo $users[0]['Email']; ?>

<div class="container">
  <div class="">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-8"><h2>Student <b>Details</b></h2></div>
        <div class="col-sm-4">
          
        </div>
      </div>
    </div>
    <table class="table table-bordered bg-info">
      <thead>
        <tr>
          <th>Name</th>
          <th>Class</th>
          <th>Year</th>
          <th>Email</th>
          <th>Password</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php if (! empty($studentdata)) { foreach ($studentdata as $value) {?>
        <tr>
          <td><?php echo $value['Name'];?></td>
          <td><?php echo $value['course'];?></td>
          <td><?php echo $value['Cyear'];?></td>
          <td><?php echo $value['Email'];?></td>
          <td><?php echo $value['Password'];?></td>
          <td>
            
            <a class="edit" href="<?php echo base_url().'User/editStudent'?>/<?php echo $value['ID'];?>" title="Edit" data-toggle="tooltip"><i class="far fa-edit"></i></a>
            <a class="delete" href="<?php echo base_url().'User/delete'?>/<?php echo $value['ID'];?>"" title="Delete" data-toggle="tooltip"><i class="far fa-trash-alt"></i></a>
          </td>
        </tr>
        <?php }}?>
        
      </tbody>
    </table>
  </div>
</div>
<?php } ?>


</body>
</html>
