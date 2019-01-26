<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		// $data['user'] = $this->session->userdata('user');

		// $data[ 'logeo' ] = false;

		$data[ 'title' ] = 'login';
		$this->load->view('layouts/header',$data);	
		$this->load->view('login');
		$this->load->view('layouts/footer');
	}


	public function signIn()
	{
		$this->form_validation->set_rules('user', 'user', 'required|max_length[25]');
		$this->form_validation->set_rules('password', 'password', 'required|max_length[15]');
		// $this->form_validation->set_rules('role', 'Role', 'required|min_length[3]');  

		if ($this->form_validation->run() == FALSE){

			// para el form validation es mejor cargar vistas
			// por que si no, se pierde la validacion con los redirect			

			$data[ 'title' ] = 'login';
			$this->load->view('layouts/header',$data);		
			$this->load->view('login');
			$this->load->view('layouts/footer');

			// redirect(base_url());
			
		}else{

			// $data[ 'logeo' ] = true;

			$data[ 'title' ] = 'dashboard';
			$data[ 'site' ] = 'dashboard';
			$user = $this->input->post('user');
			$password = $this->input->post('password');
			// $role = $this->input->post('role');

			
			// $user = $this->security->xss_clean($user);
			// $password = $this->security->xss_clean($password);
			// $role = $this->security->xss_clean($role);


			// $this->session->set_userdata('user',$user);
			// $this->session->set_userdata('password',$password);


			// $this->session->set_userdata('role',$role);

			

			// $data['user'] = $this->session->userdata('user');
			

			// $datauser biene como un objeto
			 $dataUser = Usuarios::where('email',$user)->first();

			 // accedo al objeto a la contraseña en db
			 $dataUser->password;


			 // verifico que la contraseña ingresa por el usuario
			 // coincidad con el password en la base de datos 
			 // la cual tiene hash, para que esto funcione es
			 // necesario a ver usado password_hash

			 if (password_verify($password,$dataUser->password)) {
			
				// extraigo la data de la consulta,para establecer la info
				// de la session

				 $dataUser['email'];
				 $dataUser['nombre'];
				 $dataUser['role'];
				 $dataUser['created_at'];

			 // establesco la data para la session

			 $this->session->set_userdata('user', $dataUser['email']);
			 $this->session->set_userdata('nombre', $dataUser['nombre']);
			 $this->session->set_userdata('role', $dataUser['role']);
			 $this->session->set_userdata('created_at', $dataUser['created_at']);


			// le paso la data de la session y la guardo en un array 
			// para usar las variables en las vistas etc

			$data['user'] = $this->session->userdata('user');
			$data['nombre'] = $this->session->userdata('nombre');
			$data['role'] = $this->session->userdata('role');
			$data['created_at'] = $this->session->userdata('created_at');


			if ($dataUser['email'] && $dataUser['role']=== 'admin')
			{
				$this->load->view('layouts/header',$data);												
				$this->load->view('admin/dashboard');				
				$this->load->view('layouts/footer');

			} elseif ($dataUser['email'] && $dataUser['role']=== 'user'){

				$this->load->view('layouts/header',$data);									
				$this->load->view('users/dashboard');
				$this->load->view('layouts/footer');

				

			}else {

				$this->session->set_flashdata('userNoRegister', 'Por favor comprueba tu usuario y contraseña');
				// $data['user'] = $this->session->userdata('user');
				redirect(base_url());

				// $data['user'] = $this->session->userdata('user');

				// $data[ 'title' ] = 'login';
				// $this->load->view('layouts/header',$data);	
				// $this->load->view('login');
				// $this->load->view('layouts/footer');
			}	
				
			
			}else{


				$this->session->set_flashdata('passwordCheck', 'Contraseña invalida');

				// echo '<p class="bg-danger" >'.$password.'</p>';

				// $data['user'] = $this->session->userdata('user');
				redirect(base_url());

			}

			//  $dataUser['email'];
			//  $dataUser['nombre'];
			//  $dataUser['role'];
			//  $dataUser['created_at'];



			//  $this->session->set_userdata('user', $dataUser['email']);
			//  $this->session->set_userdata('nombre', $dataUser['nombre']);
			//  $this->session->set_userdata('role', $dataUser['role']);
			//  $this->session->set_userdata('created_at', $dataUser['created_at']);


			// $data['user'] = $this->session->userdata('user');
			// $data['nombre'] = $this->session->userdata('nombre');
			// $data['role'] = $this->session->userdata('role');
			// $data['created_at'] = $this->session->userdata('created_at');



			

			// $existsUserPass=$this->Login_Model->login($user ,$password,$role);

			// if ($dataUser['email'] && $dataUser['role']=== 'admin')
			// {
			// 	$this->load->view('layouts/header',$data);												
			// 	$this->load->view('dashboard');				
			// 	$this->load->view('layouts/footer');

			// } elseif ($dataUser['email'] && $dataUser['role']=== 'user'){

			// 	$this->load->view('layouts/header',$data);									
			// 	$this->load->view('dashboard');
			// 	$this->load->view('layouts/footer');

				

			// }else {

			// 	$this->session->set_flashdata('userNoRegister', 'Por favor comprueba tu usuario y contraseña');
			// 	// $data['user'] = $this->session->userdata('user');
			// 	redirect(base_url());

			// 	// $data['user'] = $this->session->userdata('user');

			// 	// $data[ 'title' ] = 'login';
			// 	// $this->load->view('layouts/header',$data);	
			// 	// $this->load->view('login');
			// 	// $this->load->view('layouts/footer');
			// }	


			
			

	}//end validation form


}


		public function test1(){


			// $data = Usuarios::where('email','admin@hotmail.com')->first();

			$data = Usuarios::where('email','admin@hotmail.com')->first();

			// User::whereRaw('age > ? and votes = 100', [25])->get()


			$db_pass = password_hash('123',PASSWORD_BCRYPT);

			$password = '123';			

			//obtener el tipo de una variabñe
			// echo gettype($data);


			// echo $data->password;

			if (password_verify($password, $db_pass)) {			

				echo "verificado";
			}else{

				echo "no verificado";
			}



		}



	public function signOut()	{       	
		
		
		// $this->session->userdata('user');
		
		// $this->session->unset_userdata('user');

		$this->session->userdata('role');
		
		$this->session->unset_userdata('role');
		
		// if ($this->session->userdata('role')!=="admin" || $this->session->userdata('role')!=="user") {

		// if ($this->session->userdata('user') !== TRUE) {

		if ($this->session->userdata('role') !== TRUE) {				

			$this->session->set_flashdata('closeSession', 'Has cerrado session');

			redirect(base_url());		

		}	

	}



	public function test(){

		 $data = Usuarios::where('email', 'admin@hotmail.com')->first();



		 // echo $data;

		 // print_r($data);

		 // obtener el typo de una variable

		echo gettype($data);

		echo $data['nombre'];

		echo $data['role'];
	}








}
