<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function test($id, $hola = "no se"){
		//NOTA
		//http://localhost/proyectonuevo/index.php/Welcome/test/1/hola
		//http://localhost/proyectonuevo/index.php/CONTROLADOR/METODO/--> de aqui para adelante parametros para enviar
		echo $id;
		echo $hola;
	}

}
