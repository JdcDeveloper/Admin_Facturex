<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function area()
	{
		
		$data['user'] = $this->session->userdata('user');
		$data['nombre'] = $this->session->userdata('nombre');
		$data['role'] = $this->session->userdata('role');
		$data['created_at'] = $this->session->userdata('created_at');
		
		$data['title'] = 'area';

		$data['site'] = 'Dashboard';
		

		if ($this->session->userdata('role')==="admin") {


			$this->load->view('layouts/header',$data);
			$this->load->view('admin/dashboard');
			$this->load->view('layouts/footer');


		}elseif ($this->session->userdata('role')==="user") {
			
			$this->load->view('layouts/header',$data);
			$this->load->view('users/dashboard');
			$this->load->view('layouts/footer');

		}else{

			redirect(base_url());
		} 

	}








}
