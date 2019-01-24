<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function area()
	{
		// $data[ 'logeo' ] = true;
		$data['user'] = $this->session->userdata('user');
		$data['nombre'] = $this->session->userdata('nombre');
		$data['role'] = $this->session->userdata('role');
		$data['created_at'] = $this->session->userdata('created_at');
		
		$data['title'] = 'area';

		$data['site'] = 'Dashboard';       

		$this->load->view('layouts/header',$data);

		$this->load->view('dashboard');

		$this->load->view('layouts/footer'); 

	}


	public function chartData(){

		
		$users = Usuarios::get()->count('email');
		$admin = Usuarios::where('role','admin')->get()->count(); 
		$user = Usuarios::where('role','user')->get()->count();  
		

		$data = array(
			'usersRegister' => $users,
			'admin' => $admin,
			'user' => $user			
		);		



		echo json_encode($data);

	}




	public function totalGeneral(){
		

		$data = Usuarios::get()->count('email'); 

		echo json_encode($data);

	}



	public function totalAdmins(){		


		$data = Usuarios::where('role','admin')->get()->count(); 

		echo json_encode($data);

	}


	public function totalUsers(){		


		$data = Usuarios::where('role','user')->get()->count(); 

		echo json_encode($data);

	}






}
