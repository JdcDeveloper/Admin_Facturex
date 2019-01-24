<?php
defined('BASEPATH') OR exit('No direct script access allowed');


// para usar el modelo orm
// use App\Usuarios;

// use Illuminate\Http\Request;

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
		$usuario->password = md5($this->input->post('password'));  
        $usuario->imagen = 'user.png';
        $usuario->role = $this->input->post('role');	


		$usuario->save();     

		// }else{


			// redirect(base_url());
		// }



	}



	public function prueba(){

		$result = Usuarios::all(); 

		echo json_encode($result);

	}     

}
