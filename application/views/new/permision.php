<?php //echo "<pre>"; print_r($data);exit(); ?>
<div class="container">
	<div class="">
		<div class="table-title">
			<div class="row">
				<div class="col-sm-8"><h2>Permision For <b>Document</b></h2></div>
			</div>
		</div>
		<table class="table table-bordered bg-info">
			<thead>
				<tr>
					<th>Permission Number</th>
					<th>Document Id</th>
					<th>Doc Name</th>
					<th>User Id</th>
					<th>User Name</th>
					<th>User Type</th>
					<th>User Course</th>
					<th>Requested Date</th>
					<th>Permission</th>
				</tr>
			</thead>
			<tbody>
            <?php if (! empty($data)) { foreach ($data as $value) {?>
            	
           
				<tr>
					   <td><?php echo $data[0]['ID'];?></td>
					   <td><?php echo $data[0]['doc_id'];?></td>
					   <td><?php echo $data[0]['doc_name'];?></td>
					   <td><?php echo $data[0]['user_id'];?></td>
					   <td><?php echo $data[0]['user_name'];?></td>
					   <td><?php echo $data[0]['user_type'];?></td>
					   <td><?php echo $data[0]['user_course'];?></td>
					   <td><?php echo $data[0]['request_date'];?></td>
						<td><a href="<?php echo base_url();?>User/adminGivePermissionForDoc/<?php echo $data[0]['ID'];?>" class="delete" title="Allow" data-toggle="tooltip"><i class="fa fa-lock" style="font-size:36px"></i></a>
					</td>
				</tr>
				<?php }}else{ echo "No Request data";}?>
			</tbody>
		</table>
	</div>
</div>


</body>
</html>