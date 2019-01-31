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

	public function findUser($id){


		$data['user'] = $this->session->userdata('user');
		$data['nombre'] = $this->session->userdata('nombre');
		$data['role'] = $this->session->userdata('role');
		$data['created_at'] = $this->session->userdata('created_at');

		$data['title'] = 'view';

		$data['site'] = 'Users';   

		// findOrFail nos da un error mas especifico al no encontrar registros,
    	// como un codigo 404 por ejemplo
		$usuario['usuario'] = Usuarios::findOrFail($id);

		 // echo $usuario;


		$this->load->view('layouts/header',$data);

		$this->load->view('admin/view',$usuario);

		$this->load->view('layouts/footer');


	}

	public function edit($id){


		$data['user'] = $this->session->userdata('user');
		$data['nombre'] = $this->session->userdata('nombre');
		$data['role'] = $this->session->userdata('role');
		$data['created_at'] = $this->session->userdata('created_at');

		$data['title'] = 'edit';
		$data['site'] = 'Users';


		$this->form_validation->set_rules('nombre', 'nombre', 'required|max_length[25]');
		$this->form_validation->set_rules('email', 'Email', 'required|max_length[25]|valid_email');	 
		$this->form_validation->set_rules('role', 'Role', 'required|min_length[3]');


		if ($this->form_validation->run() == FALSE){       

			//el id del usuario y mostramos la data en la vista
			$usuario['usuario'] = Usuarios::find($id);	


			$this->load->view('layouts/header',$data);
			$this->load->view('admin/edit',$usuario);
			$this->load->view('layouts/footer');

		}else{


			if (isset($_POST['submit'])) {

				$nombre = $this->input->post('nombre');
				$email = $this->input->post('email');		        
				$role = $this->input->post('role');


				//le pasamos el id del usuario
				// que queremos editar
				$usuario = Usuarios::find($id);

				$usuario->nombre = $nombre;
				$usuario->email = $email;
				$usuario->role = $role;

				$usuario->save();


				// si el usuario se actualizado ejecutamos
				if($usuario->save()) {

					$this->session->set_flashdata('userEdited', 'Usuario editado');
					redirect(base_url("users/view")); 


				} 

				redirect(base_url("users/view"));


			} 


		}


	}



	public function delete($id){

		$userDelete = Usuarios::where('id', $id)->delete();



		if($userDelete) {

			$this->session->set_flashdata('userDelete', 'Usuario eliminado');
			redirect(base_url("users/view")); 


		}    


	}

	public function profile()
	{

		// if ($this->session->userdata('user') && $this->session->userdata('role')==="admin") {
		$data['user'] = $this->session->userdata('user');
		$data['nombre'] = $this->session->userdata('nombre');
		$data['role'] = $this->session->userdata('role');
		$data['created_at'] = $this->session->userdata('created_at');

		$data['title'] = 'profile';
		$data['site'] = 'Users';



		$this->load->view('layouts/header',$data);					
		$this->load->view('profile');
		$this->load->view('layouts/footer');

		// }else{

			// redirect(base_url());

		// }

	}


	public function loadImg()	{


		$userSession = $this->session->userdata('user');




		$config['upload_path'] = "./uploads/files";        
		$config['allowed_types'] = "gif|jpg|jpeg|png";
		$config['max_size'] = "50000";
		$config['max_width'] = "2000";
		$config['max_height'] = "2000";

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('img')) {

			$data['uploadError'] = $this->upload->display_errors();          


			if($this->upload->display_errors()) {


				$this->session->set_flashdata('uploadFailed', 'Fallo la carga');
				redirect(base_url("users/profile"));	

			} 
			return;
		}


		$file_info= $this->upload->data();

		$this->createThumbnails($file_info['file_name']); 


		if (isset($_POST['submit'])) {

			$img=$file_info['file_name'];

			$dataUser = Usuarios::where('email',$userSession)
			->update(array('imagen' => $img));
			        					

			// $this->Login_Model->loadImg($img);


			redirect(base_url("users/profile"));


		} 

	}


	// funcion para crear tumbnails
	function createThumbnails($filename){

		$config['image_library'] = 'gd2';
		$config['source_image'] = 'uploads/files/'.$filename;
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['new_image']='uploads/thumbnails';
        $config['thumb_marker']='';//capture_thumb.png
        $config['width'] = 50;
        $config['height'] = 50;
        $this->load->library('image_lib', $config); 
        $this->image_lib->resize();
    }




	// public function getSession(){

	// 	print_r($data['user'] = $this->session->userdata('user'));

	// 	// $data['user'] = $this->session->userdata('user');
	// 	// $data['nombre'] = $this->session->userdata('nombre');
	// 	// $data['role'] = $this->session->userdata('role');
	// 	// $data['created_at'] = $this->session->userdata('created_at');

	// 	// echo $data['user'] = $this->session->userdata('user');
	// 	// echo $data['nombre'] = $this->session->userdata('nombre');
	// 	// $data['role'] = $this->session->userdata('role');
	// 	// $data['created_at'] = $this->session->userdata('created_at');

	// 	// echo "funcionq";

	// }


	// public function test(){

	// 	$this->getSession();

	// }





}
