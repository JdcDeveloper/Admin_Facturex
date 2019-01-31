<!-- <div class="page-header">
	<h4 class="col-md-6 col-md-offset-3">
		Users		
	</h4>

</div> -->

<div class="col-md-6 col-md-offset-3 ">        

	<div class="list-group">
		<img class="img-responsive" src="<?=base_url()?>uploads/files/<?php echo $usuario->imagen;?>" />
	</div>   

	<div class="list-group">
		<h4 class="text-info">Date:<?php echo $usuario->nombre ?></h4>
	</div>      

	<div class="list-group">
		<h4 class="text-info">Email:<?php echo $usuario->email ?></h4>
	</div>

	<div class="list-group">	
		<h4 class="text-info">Role:<?php echo $usuario->role ?></h4>
	</div>

	<div class="list-group">
		<h4 class="text-info">Users:<?php echo $usuario->created_at ?></h4>
	</div>	

	<div class="list-group">
		<a id="backUsers"><span class="btn-default btn-sm glyphicon glyphicon-arrow-left">Back</span></a>
	</div>

</div>
