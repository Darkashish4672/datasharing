
    <div class="container">

<form action="<?php echo base_url();?>User/addStudent" method="POST" class="form-inline">
    <div class="form-group" style="margin-left: 30px;">
      <label for="email">NAME:</label>
      <input type="text" class="form-control" id="email" placeholder="Name" name="name">
      <?php echo form_error('name'); ?>
    </div>
    <div class="form-group" style="margin-left: 30px;">
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
      <input type="text" class="form-control" id="pwd" placeholder="COURSE (YEAR)" name="cyear">
        <?php echo form_error('cyear'); ?>
    </div>
    <div class="form-group" style="margin-left: 10px;">
      <label for="email">EMAIL:</label>
      <input type="email" class="form-control" id="Email" placeholder="Email" name="email">
        <?php echo form_error('email'); ?>
    </div>
    <div class="form-group" style="margin-left: 5px;">
      <label for="pwd">PASSWORD:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Password" name="password">
        <?php echo form_error('password'); ?>
    </div>

    <button type="submit" class="btn btn-primary " name="submit" style="margin-top:25px; margin-left: 500px;">Submit</button>
  </form>



        <div class="container" >
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
                        <th>ID</th>
                        <th>Name</th>
                        <th>Selected Course</th>
                        
                        <th>Year</th>
                        
                        <th>Email</th>
                        <th>Password</th>
                        <th>Type</th>
                        
                    </tr>
                </thead>
                <tbody>
        <?php if (! empty($users)) { foreach ($users as $value) {   ?>
                  <tr>
                        <td><?php echo $value['ID'];?></td>
                        <td><?php echo $value['Name'];?></td>
                        <td><?php echo $value['course'];?></td>
                        <td><?php echo $value['Cyear'];?></td>
                        <td><?php echo $value['Email'];?></td>
                        <td><?php echo $value['Password'];?></td>
                        <td><?php echo $value['type'];?></td>
                        
                    </tr>
        <?php }}
        else {
           echo "table not found";
         } ?>
                </tbody>
            </table>
        </div>
    </div>



     
</body>
</html>
