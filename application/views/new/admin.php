<!-- <?php if ($msg=$this->session->flashdata('success')); ?>
	<div class="row">
	<div class="alert col-lg-12" style="text-align: center;">
    <?php echo $msg; ?>
  </div></div> -->
<div class="container responsive ">
	<h1 align="center" style="
    font-family: 'Acme', sans-serif;
"><u>!!Welcome To Admin Dashboard!!</u></h1>


    
	

	<div class="" >
		<div class="table-title ">
			<div class="row" >
				<div class="col-lg-12 "><h2 align="center" style="font-family: 'Acme', sans-serif;" ><b>[</b>All Shared <b>Document]</b></h2></div>
			</div>
		</div>
		<table class="table table-bordered bg-info" style="margin-bottom: 63px;">
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
                    <td><?php echo $value['name']; ?>-<?php echo $value['course'];?>(<?php echo $value['Usertype'];?>)</td>
					<td>	<a href="<?php echo base_url();?>user/downloadDoc/<?php echo $value['ID'];?>" class="delete" title="Delete" data-toggle="tooltip"><i class='far fa-arrow-alt-circle-down' style='font-size:20px; margin-left: 25px; '></i></a>
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
