<?php
defined("BASEPATH")or exit("No direct script acces allowed");
class InsertScomplaints extends CI_Model
{
	public function insert($insert)
	{
		$this->db->insert('studentcomplaints_tb',$insert);
	}
	public function view1()
	{
		

		$this->db->select('*')->from('studentcomplaints_tb');
		$query=$this->db->get();
		return $query->result();
	}
	public function view()
	{


		$my_session_id=$this->session->userdata('addmission');

		$this->db->select('*');
		$this->db->where('addmission',$my_session_id);
		$query=$this->db->get('studentcomplaints_tb');
		//Print_r($this->db->last_query());exit;
		return $query->result();
	}
	
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('studentcomplaints_tb');
	}
	public function edit($id)
	{
		$this->db->select('*')->from('studentcomplaints_tb');
		$this->db->where('id',$id);
		$query=$this->db->get();
		return $query->row();
	}
	public function update($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('studentcomplaints_tb',$data);
	}
}
?>