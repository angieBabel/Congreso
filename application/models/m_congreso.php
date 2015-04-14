<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_congreso extends CI_Model{
	function __construct(){
		parent::__construct();
	}

	function AgregaCongreso($datos){

		$this->db->insert('evento',$datos);

	}

	function AgregaPonente($datos){

		$this->db->insert('ponente',$datos);

	}
	function getPonentes(){
		$query=$this->db->get('ponente');
		return $query->result_array();
	}

	function borraPonente($id)
	{
		$this->db->where('idponente',$id);
		$this->db->delete('ponente');
	}

	function getPonente($id){
		$this->db->where('idponente',$id);
		$query=$this->db->get('ponente');
		return $query->result_array();
	}

	function actPonente($datos,$id){
		$this->db->where('idponente',$id);
		$this->db->update('ponente',$datos);
	}

	function getEvento(){
		$this->db->order_by('idevento','desc');
		$this->db->limit(1);
		$query=$this->db->get('evento');


		return $query->result_array();

	}

	function guardaConferencia($datos){
		$this->db->insert('conferencia',$datos);
	}

	function getConferencias(){
		//$this->db->where('idconferencia',$id);
		$query=$this->db->get('conferencia');
		return $query->result_array();
	}

	function getTaller(){
		//$this->db->where('idconferencia',$id);
		$query=$this->db->get('taller');
		return $query->result_array();
	}

}
