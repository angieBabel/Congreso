<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Prueba extends CI_Controller {
	
	function __construct(){
		parent::__construct();

		$this->load->model('m_congreso');
	}


	public function eventos()
	{
		
		$this->load->view('eventos');
	}

	public function altaEventos()
	{

		$datos['nombre']= $this->input->post('nom');
		$datos['fecha']=$this->input->post('fecha');
		$datos['lugar']=$this->input->post('lugar');
		$datos['hora']=$this->input->post('hora');
		$datos['costo']=$this->input->post('costo');

		$this->m_congreso->AgregaCongreso($datos);
		$this->eventos();
		/*echo "<pre>";
			print_r($_POST);
		echo "/<pre>";*/
	}

		public function ponentes()
	{
		
		$this->load->view('ponentes');
	}

	public function showPonentes()
	{
		$ponentes=$this->m_congreso->getPonentes();
		$this->load->view('tabla_ponentes',array("datos"=>$ponentes));
		

	}

	public function altaPonentes()
	{
		$this->form_validation->set_message('required','El campo <b>%s</b> es requerido');
		$this->form_validation->set_message('valid_email','No es un correo valido');

		$this->form_validation->set_rules('nom','Nombre','required');
		$this->form_validation->set_rules('correo','Correo','required|valid_email');

		if($this->form_validation->run()==FALSE){
			$this->load->view('ponentes');
		}
		else
		{

			$datos['nombre']= $this->input->post('nom');
			$datos['correo']=$this->input->post('correo');
			$datos['telefono']=$this->input->post('tel');
			$datos['domicilio']=$this->input->post('dom');

			$this->m_congreso->AgregaPonente($datos);
			/*datos['mensaje']='Alta de ponente exitosa';
			$datos['ruta']='index.php/prueba/ponentes';
			$this->load->view('mensaje',$datos);*/

			$this->showPonentes();
			//$this->load->view('ponentes');
		}


		
		/*$this->ponentes();
		$this->load->view->('ponentes');
		/*echo "<pre>";
			print_r($_POST);
		echo "/<pre>";*/
	}

}