<br>
<br>
<div class="col-md-6 col-md-offset-3">
	<h1 class="page-header">
		Users
		<small>Info</small>
	</h1>

</div>

<div class="col-md-6 col-md-offset-3 ">        

	<div class="list-group">
		<img class="img-responsive" src="<?=base_url()?>uploads/files/<?php echo $usuario->imagen;?>" />
	</div>   

	<div class="list-group">
		<h2 class="text-info">Date:<?php echo $usuario->nombre ?></h2>
	</div>      

	<div class="list-group">
		<h2 class="text-info">Email:<?php echo $usuario->email ?></h2>
	</div>

	<div class="list-group">	
		<h2 class="text-info">Role:<?php echo $usuario->role ?></h2>
	</div>

	<div class="list-group">
		<h2 class="text-info">Users:<?php echo $usuario->created_at ?></h2>
	</div>	

	<div class="list-group">
		<a id="backUsers"><span class="btn-default btn-sm glyphicon glyphicon-arrow-left">Back</span></a>
	</div>

</div>
