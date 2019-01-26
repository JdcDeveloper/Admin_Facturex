<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Users extends CI_Controller {

	// private $user =	 $this->session->userdata('user');
	// private $nombre = $this->session->userdata('nombre');
	// private $role =	$this->session->userdata('role');
	// private $fecha = $this->session->userdata('created_at');


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		// $data['user'] = $this->session->userdata('user');
		// $data['nombre'] = $this->session->userdata('nombre');
		// $data['role'] = $this->session->userdata('role');
		// $data['created_at'] = $this->session->userdata('created_at');
	}

	public function view()
	{
		// $data[ 'logeo' ] = true;

		$data['user'] = $this->session->userdata('user');
		$data['nombre'] = $this->session->userdata('nombre');
		$data['role'] = $this->session->userdata('role');
		$data['created_at'] = $this->session->userdata('created_at');

		
		

		$data['title'] = 'view';

		$data['site'] = 'Users';   

		$data['usuarios'] = Usuarios::all();     

		$this->load->view('layouts/header',$data);

		$this->load->view('admin/users');

		$this->load->view('layouts/footer'); 

	}

	public function add()
	{
		// $data[ 'logeo' ] = true;

		$data['user'] = $this->session->userdata('user');
		$data['nombre'] = $this->session->userdata('nombre');
		$data['role'] = $this->session->userdata('role');
		$data['created_at'] = $this->session->userdata('created_at');

		$data['title'] = 'add';

		$data['site'] = 'Users';   		  

		$this->load->view('layouts/header',$data);

		$this->load->view('admin/add');

		$this->load->view('layouts/footer'); 


		// if (isset($_POST['submit'])) { 

		// $usuarios = new Usuarios; 

		// $data=array(
		// 	'id' => null,
		// 	'nombre' => $this->input->post('nombre'),
		// 	'email' => $this->input->post('email'),
		// 	'password' =>  $password = password_hash($this->input->post('password'),PASSWORD_BCRYPT),
		// 	'imagen' => 'user.png',
		// 	'role' => $this->input->post('role'),
		// 	'fecha' => $this->input->post('fecha')				
		// );

		// $usuarios->id = '4';


		// funciona este ejemplo

		// $usuarios->nombre = 'carlos mandrique';
		// $usuarios->email = 'carlos@hotmail.com';
		// $usuarios->password = '123';
		// $usuarios->imagen = 'user.png';
		// $usuarios->role = 'usuario';
		// $usuarios->fecha = '01/01/2019';

		// $usuarios->nombre = $request->input('nombre');
		// $usuarios->email = $request->input('email');
		// $usuarios->password = md5($request->input('password'));  
  //       $usuarios->imagen = 'user.png';
  //       $usuarios->role = 'user';
        // $usuarios->role = $request->input('role');


		// $usuarios->save();     

		// }else{


			// redirect(base_url());
		// }



	}



	public function register(){

		$data['user'] = $this->session->userdata('user');
		$data['nombre'] = $this->session->userdata('nombre');
		$data['role'] = $this->session->userdata('role');
		$data['created_at'] = $this->session->userdata('created_at');



		// $data[ 'logeo' ] = true;

		// if (isset($_POST['submit'])) { 

		// instancio un objeto usuario de clase usuarios del modelo

		$usuario = new Usuarios; 


		// funciona este ejemplo

		// $usuarios->nombre = 'carlos mandrique';
		// $usuarios->email = 'carlos@hotmail.com';
		// $usuarios->password = '123';
		// $usuarios->imagen = 'user.png';
		// $usuarios->role = 'usuario';
		// $usuarios->fecha = '01/01/2019';


		$usuario->nombre = $this->input->post('nombre');
		$usuario->email = $this->input->post('email');
		// $usuario->password = md5($this->input->post('password'));
		$usuario->password = password_hash($this->input->post('password'),PASSWORD_BCRYPT);
        $usuario->imagen = 'user.png';
        $usuario->role = $this->input->post('role');	


		$usuario->save();     

		// }else{


			// redirect(base_url());
		// }



	}

	public function getSession(){

		print_r($data['user'] = $this->session->userdata('user'));

		// $data['user'] = $this->session->userdata('user');
		// $data['nombre'] = $this->session->userdata('nombre');
		// $data['role'] = $this->session->userdata('role');
		// $data['created_at'] = $this->session->userdata('created_at');

		// echo $data['user'] = $this->session->userdata('user');
		// echo $data['nombre'] = $this->session->userdata('nombre');
		// $data['role'] = $this->session->userdata('role');
		// $data['created_at'] = $this->session->userdata('created_at');

		// echo "funcionq";

	}


	public function test(){

		$this->getSession();

	}



	public function prueba(){

		$result = Usuarios::all(); 

		echo json_encode($result);

	}     

}
