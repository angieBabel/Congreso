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
	}

	function borraPonente($id)
	{
		$this->m_congreso->borraPonente($id);
		$this->showPonentes();
	}


	function editarPonente($id)
	{
		$datos_ponente=$this->m_congreso->getPonente($id);
		$datos['ponente']=$datos_ponente[0];
		$this->load->view('editPonente',$datos);
	}

	function actualizaPonente()
	{

		$id=$this->input->post('id');

		$datos['nombre']= $this->input->post('nom');
		$datos['correo']=$this->input->post('correo');
		$datos['telefono']=$this->input->post('tel');
		$datos['domicilio']=$this->input->post('dom');

		$this->m_congreso->actPonente($datos,$id);
		$this->showPonentes();
	}

	function agregarConferencia(){
		$ponentes=$this->m_congreso->getPonentes();
		$evento=$this->m_congreso->getEvento();
		$datos['ponentes']=$ponentes;
		$datos['evento']=$evento[0];
/*		print_r($ponentes);
		print_r($evento);*/

		$this->load->view('conferencia',$datos);
	}

	function grabaConferencia(){

		$datos['nombre']= $this->input->post('nom');
		$datos['lugar']=$this->input->post('lugar');
		$datos['hora']=$this->input->post('hora');
		$datos['ponente_idponente']=$this->input->post('ponente');
		$datos['evento_idevento']=$this->input->post('idevento');
		//$datos['fecha']=$this->input->post('fecha');
		$datos['fecha']=date('Y-m-d',strtotime($datos['fecha']));

		$this->m_congreso->guardaConferencia($datos);


		$this->showConferencia();
	}

	function showConferencia(){
		$conferencias=$this->m_congreso->getConferencias();
		foreach ($conferencias as $key => $value) {
			/*$idPonente=$conferencia['ponente_idponente'];
			$conferencia['ponente']=$this->m_congreso->getNomPonente*/
		}
		$this->load->view('tabla_conferencias',array("datos"=>$conferencias));
	}

	function showTaller(){
		$this->load->view('taller');
	}

	function showParticipante(){
		$this->load->view('participante');
	}

	function showInstructor(){
		$this->load->view('instructor');
	}

}
