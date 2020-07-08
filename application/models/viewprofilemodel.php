<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Viewprofilemodel extends CI_Model{

	public function view()
	{
		
         $my_session_id=$this->session->userdata('addmission');

		$this->db->select('*');
		$this->db->where('addmission',$my_session_id);
		$query=$this->db->get('addstudent_tb');
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
	public function view1()
	{
		
         $my_session_id=$this->session->userdata('addmission');

		$this->db->select('*');
		$this->db->where('addmission',$my_session_id);
		$query=$this->db->get('addstudent_tb');
		//Print_r($this->db->last_query());exit;
		return $query->result(); 
	}
}

?>