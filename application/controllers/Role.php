<?php
defined('BASEPATH') OR exit('No direct script access allowed');




// no colocar el mismo nombre de controlador y modelo tabla 
// para evitar problemas, no lo reconoce

class Role extends CI_Controller {

	
	public function index()
	{		

		$data = Roles::all();

		echo json_encode($data);   
	}




}
