<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('getmenu'));
		$this->load->database();
		$this->load->model('Users');
		$this->load->library(array('form_validation'));
	}

	public function index()
	{
		$data['menu']=main_menu();
		$this->load->view('registro',$data);
		$query = $this->db->get('usuario');
		//var_dump($query->result());
	}

	public function create(){
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$password_c = $this->input->post('password_confirm');
		
		$config  =  array ( 
			array ( 
					'field'  =>  'username', 
					'label'  =>  'Nombre de usuario', 
					'rule'  =>  'required|alpha_numeric' 
			), 
			array ( 
				'field'  =>  'email' , 
				'label'  =>  'Correo' , 
				'rule'  =>  'required|valid_email' , 
					'errores'  =>  array ( 
							'requerido'  =>  'El %s es invalido.' , 
					), 
			), 
		); 
	
		$this -> form_validation -> set_rules ( $config ); 

		if  ( $this -> form_validation -> run ()  ==  FALSE ) 
		{ 
			$data['menu']=main_menu();
			$this -> load -> view ( 'registro',$data ); 
		} 
		else 
		{ 
			$datos = array(
				'nombre_usuario' => $username,
				'correo' => $email,
				'contrasena' => $password,
			);
	
			$data['menu']=main_menu();
	
			if(!$this->Users->create($datos)){
				$data['msg']='Ocurrio un error al registrar..';
				$this->load->view('registro',$data);
			}
			$data['msg']='Se Registro Correctamente';
			$this->load->view('registro',$data);
		} 


		
	}

}
