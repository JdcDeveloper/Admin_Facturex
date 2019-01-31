<div class="row col-md-6 col-md-offset-3 ">


	<p class="bg-primary" id="msgPasswordChanged">

		<?php if($this->session->flashdata('passwordChange')): ?>

			<?php echo $this->session->flashdata('passwordChange'); ?>

		<?php endif; ?>

	</p>

	<p class="bg-danger" id="msgUploadFailed">

		<?php if($this->session->flashdata('uploadFailed')): ?>

			<?php echo $this->session->flashdata('uploadFailed'); ?>

		<?php endif; ?>

	</p>


	<h1 class="page-header">
		Profile		
	</h1>

</div>


<form action="<?php echo base_url();?>users/loadimg" method="post" enctype="multipart/form-data">		

	<div class="form-group col-md-6 col-md-offset-3">		
		
		<label>Img:</label>
		<input type="file" class="form-control" name="img" >

		<div class="text-center ">
			<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Upload</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancel</button>	

			<br>
			<br>
		</div>			
	</div>

</form>


<form action="<?php echo base_url();?>login/changepassadmin" method="post">
	
	<div class="form-group col-md-6 col-md-offset-3">	

		
		<input type="password" class="form-control" name="passwordn" placeholder="New Password">
		<div class="text-danger"><?php echo form_error('passwordn');  ?></div>

		<div class="text-center">
			<button type="submit"  name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Cambiar</button>
			<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancel</button>	
		</div>

		<br>
		<br>

	</div>



</form>
