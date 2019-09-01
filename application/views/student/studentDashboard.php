
    <table class="table table-bordered bg-info" style="margin-bottom: 63px; ">
      <thead class="bg-primary ">
        <tr>
          <th>DocNo</th>
          <th>Document Name</th>
          <th>Doctype</th>
          <th>Docsize</th>
          <th>Docpath</th>
          <th>Uploaded By</th>
          <th>Download</th>
                    
          
        </tr>
      </thead>
      <tbody>
    <?php if (! empty($user)) { foreach ($user as $value) {?>
      
    
  
        <tr style="color:black;">
          <td><?php echo $value['ID'];?></td>
                    <td><?php echo $value['docname'];?></td>
                    <td><?php echo $value['doctype'];?></td>
                    <td><?php echo $value['docsize'];?></td>
                    <td><?php echo $value['docPath'];?></td>
                    <td><?php echo $value['name'];?>-<?php echo $value['course'];?>(<?php echo $value['Usertype'];?>)</td>
          <td>  <a href="<?php echo base_url();?>User/downloadDoc/<?php echo $value['ID'];?>" class="delete" title="Delete" data-toggle="tooltip"><i class='far fa-arrow-alt-circle-down' style='font-size:20px; margin-left: 25px; '></i></a>
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

<div class="col-sm-6 "><h2 align="center" ><b>[</b>All Shared <b>Document ADMIN]</b></h2></div>
  <table class="table table-bordered bg-info" style="margin-bottom: 63px; ">
      <thead class="bg-primary ">
        <tr>
          <th>DocNo</th>
          <th>Document Name</th>
          <th>Doctype</th>
          <th>Docsize</th>
          <th>Docpath</th>
          <th>Uploaded By</th>
          <th>Download</th>
                    
          
        </tr>
      </thead>
      <tbody>
    <?php if (! empty($user1)) { foreach ($user1 as $value) {?>
      
    
  
        <tr style="color:black;">
          <td><?php echo $value['ID'];?></td>
                    <td><?php echo $value['docname'];?></td>
                    <td><?php echo $value['doctype'];?></td>
                    <td><?php echo $value['docsize'];?></td>
                    <td><?php echo $value['docPath'];?></td>
                    <td><?php echo $value['name'];?>-<?php echo $value['course'];?>(<?php echo $value['Usertype'];?>)</td>
          <td>  <a href="<?php echo base_url();?>User/downloadDoc/<?php echo $value['ID'];?>" class="delete" title="Delete" data-toggle="tooltip"><i class='far fa-arrow-alt-circle-down' style='font-size:20px; margin-left: 25px; '></i></a>
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
