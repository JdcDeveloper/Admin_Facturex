<div class="row page-header">	
	<h2 class="fa fa-clipboard col-md-6 col-md-offset-3">Add</h2>
</div>


<div class="row col-md-6 col-md-offset-3 ">

	<?php echo form_open('projects/register'); ?>	
	

	<div class="form-group">
		<label>Nombre:</label>

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
		<label>Presupuesto:</label>

		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-credit-card"></i>
			</div>
			
			<select class="form-control" name="presupuesto" id="presupuesto">
				<option value="0">Seleccionar...</option>				
			</select>
			

		</div>
		
	</div>

	
	<div class="form-group">
		<label>Descripcion:</label>

		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-comment"></i>
			</div>
			<textarea name="descripcion" class="form-control"></textarea>
			<!-- <div class="text-danger"><?php //echo form_error('first_name');  ?></div> -->

		</div>
		<!-- /.input group -->
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
