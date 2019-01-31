<div class="row col-md-12 ">

	<div class="page-header">

		<p class="bg-danger" id="msgProjectDeleted">

			<?php if($this->session->flashdata('userDelete')): ?>

				<?php echo $this->session->flashdata('userDelete'); ?>

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
						<a class="view" href="<?php echo base_url("users/findUser/$data->id") ?>" ><span class="btn-primary btn-xs glyphicon glyphicon glyphicon-zoom-in" data-toggle="view" title="Ver" ></span></a>

						<a class="edit" href="<?php echo base_url("users/edit/$data->id") ?>"    ><span class="btn-success btn-xs glyphicon glyphicon glyphicon-pencil" data-toggle="edit" title="Editar"  ></span></a>

						<a id="deleteUser"  href="<?php echo base_url("users/delete/$data->id") ?>" ><span class="btn-danger btn-xs glyphicon glyphicon-trash" data-toggle="delete" title="Eliminar" onclick="deleteUser()"></span></a>
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


<!-- <script type="text/javascript">
	
	function deleteUser(evt){    
  	

    // swal({
    //   title: 'Estas seguro?',
    //   text: "Se eliminara el registro!",
    //   type: 'warning',
    //   showCancelButton: true,
    //   confirmButtonColor: "#3085d6",
    //   confirmButtonText: 'Aceptar',
    //   cancelButtonColor: '#d33'    
     
    // }).then((result) => {

    //  	console.log(result + "Usuario eliminado");
    
      
    // });

    swal({
      title: 'Estas seguro?',
      text: "Se eliminara el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      confirmButtonText: 'Aceptar',
      cancelButtonColor: '#d33'    
     
    })

    if (swal) {


    }else{

    	event.preventDefault();

    }







}


</script> -->

<script type="text/javascript">
	

	function test(evt){


// 	promise.then(function(result) {
//   console.log(result); // "Todo bien!"
// }, function(err) {
//   console.log(err); // Error: "Hubo un fallo"
// });

// event.preventDefault();


  swal({
      title: 'Estas seguro?',
      text: "Se eliminara el registro!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      confirmButtonText: 'Aceptar',
      cancelButtonColor: '#d33'    
     
    }).then(function(result) {

  //   	$('#deleteUser').click(function(event) {
  // 			window.location=BASE_URL+'users/delete';
		// });

		// ir();
		// window.location=BASE_URL+'users/delete';

  		console.log(result + "Usuario eliminado"); // Bien

  		console.log(result + "Usuario eliminado"); // Bien

  		console.log(typeof(result));
	
	}, function(err) {

		// event.preventDefault();
  		console.log(err + "Usuario no eliminado"); // Fallo


	});




}


// function ir(){

// 	$('#deleteUser').click(function(event) {
//   			window.location=BASE_URL+'users/delete';
// 		});

// }


</script>	                    

