
<div class="container">
  
  <div class="">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6" style="border-right: 2px solid #768276; text-align: center;"><h2>All Shared <b>Document</b></h2></div>
        <form action="<?php echo base_url().'User/file'?>" method="POST" enctype = "multipart/form-data" >
        <div class="form-group col-sm-6" style="margin-left: 110px; " >
      <label for="exampleInputFile">File input</label>
      <input type="file" class="form-control-file" name="files" id="exampleInputFile" aria-describedby="fileHelp">
  <button type="submit" class="btn btn-primary " name="file" style="margin-top:0px; margin-left: 220px">Submit</button></form>
      
    </div>
      </div>
    </div>
    <table class="table table-bordered bg-info" style="margin-bottom: 63px; ">
      <thead>
        <tr>
          <th>DocNo</th>
          <th>Document Name</th>
          <th>Doctype</th>
          <th>Docsize</th>
          <th>Docpath</th>
          <th>Action</th> 
        </tr>
      </thead>
      <tbody>
    <?php if (! empty($user)) { foreach ($user as $value) {?>
      
    
  
        <tr>
          <td><?php echo $value['ID'];?></td>
                    <td><?php echo $value['docname'];?></td>
                    <td><?php echo $value['doctype'];?></td>
                    <td><?php echo $value['docsize'];?></td>
                    <td><?php echo $value['docPath'];?></td>
                    
          <td>  <a href="<?php base_url();?>deletedoc/<?php echo $value['ID'];?>" class="delete" title="Delete" data-toggle="tooltip" style="margin-left: 30px"><i class="far fa-trash-alt"></i></a>
          </td>
        </tr>
        <?php
        }}
        else {
          echo "no data";
         } ?>
      </tbody>
    </table>
  </div>
</div>


</body>
</html>