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
	public function vistas(){
		$data['titulo']='Desde la vista';
		$data['lista']=array('negro','azul','blanco');
		$this->load->view('vistas',$data);
		$this->load->view('footer');
	}

}
