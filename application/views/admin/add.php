<div class="row page-header">	
	<h2 class="fa fa-users col-md-6 col-md-offset-3">Add</h2>
</div>


<div class="row col-md-6 col-md-offset-3 ">

	<?php echo form_open('users/register'); ?>	
	

	<div class="form-group">
		<label>Nombre y Apellido:</label>

		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-user"></i>
			</div>
			<input type="text" name="nombre" class="form-control" >
			<!-- <div class="text-danger"><?php //echo form_error('first_name');  ?></div> -->

		</div>
		<!-- /.input group -->
	</div>


	<div class="form-group">
		<label>Email:</label>

		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-envelope"></i>
			</div>
			<input type="text" name="email" class="form-control" >
			<!-- <div class="text-danger"><?php //echo form_error('first_name');  ?></div> -->

		</div>
		<!-- /.input group -->
	</div>


	<div class="form-group">
		<label>Password:</label>

		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-key"></i>
			</div>
			<input type="password" name="password" class="form-control" >
			<!-- <div class="text-danger"><?php //echo form_error('first_name');  ?></div> -->

		</div>
		<!-- /.input group -->
	</div>


	<div class="form-group">
		<label>Role:</label>

		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-eye"></i>
			</div>
			
			<select class="form-control" name="role" id="role">
				<option value="0">Seleccionar Role</option>				
			</select>
			

		</div>
		
	</div>


<!-- 	<div class="form-group">
		<label>Fecha:</label>

		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-calendar"></i>
			</div>
			
			<input type="text" id="datepicker" name="fecha" placeholder="Fecha de registro" class="form-control" >
		

		</div>
		
	</div>	
-->



<div class="form-group">
	<button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok">Registrar</button>
	<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>
</div>

<div class="form-group">
	<a href="<?php echo base_url();?>users/view"><span class="btn-default btn-sm glyphicon glyphicon-arrow-left">Back</span></a>
</div>	

<?php echo form_close(); ?>	


</div>
