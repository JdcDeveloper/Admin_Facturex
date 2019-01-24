<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function area()
	{
		$data[ 'logeo' ] = true;
		
		$data[ 'title' ] = 'area';    

		$this->load->view('layouts/header',$data);

		$this->load->view('dashboard');
     
      	$this->load->view('layouts/footer'); 

	}
}
