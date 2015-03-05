<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		#carga de librerias
		#carga de helpers
	}

	public function index()
	{
		$datos['nombre']="Juan Perez";

		$this->load->view('inicio',$datos);
	}

	public function eventos()
	{
		
		$this->load->view('eventos');
	}

	public function altaEventos()
	{

		echo "<pre>";
			print_r($_POST);
		echo "/<pre>";
	}

}