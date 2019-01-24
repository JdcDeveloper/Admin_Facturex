<div class="row col-md-12 ">

	<div class="page-header">

		<p class="bg-danger" id="msgProjectDeleted">

			<?php if($this->session->flashdata('projectsDeleted')): ?>

				<?php echo $this->session->flashdata('projectsDeleted'); ?>

			<?php endif; ?>

		</p>

		<p class="bg-warning" id="msgProjectRejected">

			<?php if($this->session->flashdata('projectRejected')): ?>

				<?php echo $this->session->flashdata('projectRejected'); ?>

			<?php endif; ?>

		</p>

		<p class="bg-primary" id="msgProjectAproved">

			<?php if($this->session->flashdata('projectAproved')): ?>

				<?php echo $this->session->flashdata('projectAproved'); ?>

			<?php endif; ?>

		</p>		
		
		
		<!-- <h1>Usuarios</h1> -->
	</div>

	<div>

		<!-- <a id="addUsers"><span class="btn-success btn-xs glyphicon glyphicon-plus" data-toggle="modal" ></span></a>		 -->	

		<a id="pdf"><span class="btn-danger  btn-xs glyphicon glyphicon-file">PDF</span></a>

		<a id="excel"><span class="btn-warning  btn-xs glyphicon glyphicon-download-alt">XLS</span></a>
			
	</div>

	<br>



	<table id="tableUsers"class="table table-responsive table-hover table-striped" >    
		
		<thead>
			<tr>
				<th >#</th>
				<th >Nombre</th>
				<th >Emaill</th>
				<th >Role</th>
				<th >Fecha</th>			
				<th >Acciones</th>		                          
				
			</tr>
		</thead>

		<tbody>
			<?php

			foreach ($usuarios as $data) {

				?>
				<tr>
					<td><?php echo $data->id ?> </td>		
					<td><?php echo $data->nombre ?> </td>
					<td><?php echo $data->email ?> </td>
					<td><?php echo $data->role ?> </td>
					<td><?php echo $data->created_at ?> </td>				
					<td >
						<a class="approved" href="<?php echo base_url("users/getUserByID/$data->id") ?>" ><span class="btn-primary btn-xs glyphicon glyphicon glyphicon-zoom-in" data-toggle="approved" title="Approved" onclick="approved()"></span></a>

						<a class="rejected"  href="<?php echo base_url("users/edit/$data->id") ?>" ><span class="btn-success btn-xs glyphicon glyphicon glyphicon-pencil" data-toggle="rejected" title="Rejected" onclick="rejected()" ></span></a>

						<a id="deleted"  href="<?php echo base_url("users/delete/$data->id") ?>" ><span class="btn-danger btn-xs glyphicon glyphicon-trash" data-toggle="deleted" title="Deleted" onclick="deleted()"></span></a>
					</td>


				</tr>
				

				<?php

			}


			?>
		</tbody>

	</table>

	<br>
	<br>
	<br>
</div>


<script type="text/javascript">
	function approved(evt){
		
		var confirms;
		
		confirms=confirm("you are sure to approve this project?");

		if (confirms) {        
			
		} else {
			
			event.preventDefault();
			
		}

	}

	function rejected(evt){
		
		var confirms;
		
		confirms=confirm("You are sure to reject this project?");

		if (confirms) {        
			
		} else {
			
			event.preventDefault();
			
		}

	} 


	function deleted(evt){
		
		var confirms;
		
		confirms=confirm("Are you sure to delete this record?");

		if (confirms) {        
			
		} else {
			
			event.preventDefault();
			
		}

	}                    
</script>

