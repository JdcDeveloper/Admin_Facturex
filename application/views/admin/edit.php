		<div class="row col-md-6 col-md-offset-3" >

			<form action="" method="post">
				<div class="form-group">
					<label>Nombre y apellido:</label>
					<input type="text" class="form-control"  name="nombre" value="<?php echo $usuario->nombre?>">
					<div class="text-danger"><?php echo form_error('nombre');  ?></div>
				</div>

				<div class="form-group">
					<label>Email:</label>
					<input type="text" class="form-control"  name="email" value="<?php echo $usuario->email?>">
					<div class="text-danger"><?php echo form_error('email');  ?></div>
				</div>			

				<div class="form-group">
					<label>Role:</label>
					<select class="form-control" name="role" id="role">
						<option value="0">Select Role</option>				
					</select>
					<div class="text-danger"><?php echo form_error('role');  ?></div>	
				</div>

				<div class="form-group">
					<button type="submit" name="submit" value="submit" class="btn-success btn-sm glyphicon glyphicon-ok">Update</button>
					<button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancel</button>
				</div>

				<div class="form-group">
					<a id="backUsers"><span class="btn-default btn-sm glyphicon glyphicon-arrow-left">Back</span></a>
				</div>									
			</form>
			<br>
			<br>
			<br>
			
		</div>