		<div class="row page-header">	
			<h2 class="fa fa-users col-md-6 col-md-offset-3 ">Edit</h2>
		</div>

		<div class="row col-md-6 col-md-offset-3" >

			<form action="" method="post">

				<div class="form-group">
					<label>Nombre y Apellido:</label>					

					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-user"></i>
						</div>
						<input type="text" name="nombre" class="form-control"
						value="<?php echo $usuario->nombre?>" >						

					</div>

					<div class="text-danger"><?php echo form_error('nombre');  ?></div>

				</div>

				<div class="form-group">
					<label>Email:</label>					

					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-envelope"></i>
						</div>
						<input type="text" name="email" class="form-control"
						value="<?php echo $usuario->email?>">						

					</div>

					<div class="text-danger"><?php echo form_error('email');  ?></div>

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

					<div class="text-danger"><?php echo form_error('role');  ?></div>

				</div>


				<div class="form-group">
					<button type="submit" name="submit" value="submit" class="btn-success btn-sm glyphicon glyphicon-ok">Actualizar</button>
					<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancel</button>
				</div>

				<div class="form-group">
					<a id="backUsers"><span class="btn-default btn-sm glyphicon glyphicon-arrow-left">Back</span></a>
				</div>									
			</form>		
			
		</div>