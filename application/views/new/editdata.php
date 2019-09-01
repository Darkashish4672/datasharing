

<div class="container">
  <form action="<?php echo base_url().'User/update'?>" method="POST" class="form-inline">

      <div class="form-group">
           
      <input type="hidden" class="form-control" id="email" value="<?php echo $studentdata[0]['ID'];?>" placeholder="Name" name="ID">
      
    </div>
    <div class="form-group">
      <label for="email">NAME:</label>
      <input type="text" class="form-control" id="email" value="<?php echo $studentdata[0]['Name'];?>" placeholder="Name" name="name ">
    </div>
    <div class="form-group">
      <label for="pwd">COURSE (YEAR):</label>
      <input type="text" class="form-control" id="pwd" value="<?php echo $studentdata[0]['Cyear'];?>" placeholder="COURSE (YEAR)" name="cyear">
    </div>
    <div class="form-group">
      <label for="email">EMAIL:</label>
      <input type="email" class="form-control" id="email" value="<?php echo $studentdata[0]['Email'];?>" placeholder="Email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">PASSWORD:</label>
      <input type="password" class="form-control" id="pwd" value="<?php echo $studentdata[ 0]['Password'];?>" placeholder="Password" name="password">
    </div>
    <button type="submit" class="btn btn-primary " name="submit" style="margin-top:25px; margin-left: 30px">Submit</button>
  </form>
</div>