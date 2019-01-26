<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {


	public function index()
	{
		
		echo "Api Rest";

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



	public function roles()
	{		

		$data = Roles::all();

		echo json_encode($data);   
	}






}
