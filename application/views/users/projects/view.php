<!-- <h1>users</h1> -->


<!-- <div class="row">
	<div class="col-sm-4">.col-sm-4</div>
	<div class="col-sm-4">.col-sm-4</div>
	<div class="col-sm-4">.col-sm-4</div>
</div> -->


<!-- <br>
<br>
<br>
-->
<!--  <?php //if($this->session->flashdata('userDelete')): ?> -->

<?php if($userMacth): ?>


	<div class="row">

		<?php

		foreach ($projects as $data) {

			?>

			<!-- <div class="row"> -->

				<div class="panel panel-default col-md-4">
					<div class="panel-heading">Proyecto</div>

					<div class="panel-body">
						<div>Nombre: <?php echo $data->nombre ?> </div>
						<div>Presupuesto: <?php echo $data->presupuesto ?> </div>
						<div>Descripcion: <?php echo $data->descripcion ?> </div>
						<div>Fecha: <?php echo $data->created_at ?> </div>
						<div>Status: <?php echo $data->status ?> </div>

					</div>

				</div>

				<!-- </div> -->


				<?php

			}


			?>

		</div>


		<?php endif; ?> 