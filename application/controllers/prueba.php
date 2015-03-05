<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		%this->load->model('m_congreso');
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


		$nom= $this->input->post('nom');
		$fecha=$this->input->post('fecha');
		$lugar=$this->input->post('lugar');
		$hora=$this->input->post('hora');
		$costo=$this->input->post('costo');

		$fecha =
		/*echo "<pre>";
			print_r($_POST);
		echo "/<pre>";*/
	}

}