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
}