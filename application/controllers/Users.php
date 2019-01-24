<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function view()
	{

		$data[ 'title' ] = 'view';

		$data['usuarios'] = Usuarios::all();     

		$this->load->view('layouts/header',$data);

		$this->load->view('users');

		$this->load->view('layouts/footer'); 

	}

	public function add()
	{


		$data[ 'title' ] = 'add';		  

		$this->load->view('layouts/header',$data);

		$this->load->view('add_users');

		$this->load->view('layouts/footer'); 


		// if (isset($_POST['submit'])) {  

			$data=array(
				'id' => null,
				'nombre' => $this->input->post('nombre'),
				'email' => $this->input->post('email'),
				'password' =>  $password = password_hash($this->input->post('password'),PASSWORD_BCRYPT),
				'imagen' => 'user.png',
				'role' => $this->input->post('role'),
				'fecha' => $this->input->post('fecha')				
			);

		// }else{


			// redirect(base_url());
		// }



	}



	public function prueba(){

		$result = Usuarios::all(); 

		echo json_encode($result);

	}     

}
