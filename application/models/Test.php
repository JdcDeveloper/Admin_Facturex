<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Model {
	
	public function users()
	{
		// concateno por el case sensitive de postgres
		$sql = "SELECT nombre,email from "."jonathan.".'"Usuarios"' ;

		$query = $this->db->query($sql);
				
		return $query;

		
	}


	


}