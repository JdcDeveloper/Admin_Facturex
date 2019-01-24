<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		// $data['user'] = $this->session->userdata('user');

		$data[ 'logeo' ] = false;

		$data[ 'title' ] = 'login';
		$this->load->view('layouts/header',$data);	
		$this->load->view('login');
		$this->load->view('layouts/footer');
	}


	public function initSession()
	{
		$this->form_validation->set_rules('user', 'user', 'required|max_length[25]');
		$this->form_validation->set_rules('password', 'password', 'required|max_length[10]');
		// $this->form_validation->set_rules('role', 'Role', 'required|min_length[3]');  

		if ($this->form_validation->run() == FALSE){

			
			$data[ 'logeo' ] = true;

			$data[ 'title' ] = 'login';
			$this->load->view('layouts/header',$data);		
			$this->load->view('login');
			$this->load->view('layouts/footer');
			
		}else{

			$data[ 'logeo' ] = true;

			$data[ 'title' ] = 'dashboard';
			$user = $this->input->post('user');
			$password = $this->input->post('password');
			// $role = $this->input->post('role');

			
			// $user = $this->security->xss_clean($user);
			// $password = $this->security->xss_clean($password);
			// $role = $this->security->xss_clean($role);


			$this->session->set_userdata('user',$user);
			$this->session->set_userdata('password',$password);
			// $this->session->set_userdata('role',$role);

			

			$data['user'] = $this->session->userdata('user');
			


			 $userCheck = Usuarios::where('email',$user)->first();



			

			// $existsUserPass=$this->Login_Model->login($user ,$password,$role);

			if ($userCheck &&  $userCheck !== null)
			{
				$this->load->view('layouts/header',$data);												
				$this->load->view('dashboard');				
				$this->load->view('layouts/footer');

			} elseif ($userCheck && $userCheck !== null){

				$this->load->view('layouts/header',$data);									
				$this->load->view('dashboard');
				$this->load->view('layouts/footer');

				

			}else {

				// $this->session->set_flashdata('userNoRegister', 'Please check your username and password');
				// $data['user'] = $this->session->userdata('user');
				redirect(base_url());

				// $data['user'] = $this->session->userdata('user');

				// $data[ 'title' ] = 'login';
				// $this->load->view('layouts/header',$data);	
				// $this->load->view('login');
				// $this->load->view('layouts/footer');
			}	


			
			

	}//end validation form

}


	public function test(){

		 $data = Usuarios::where('email', 'admin@hotmail.com')->first();



		 echo $data;
	}








}
