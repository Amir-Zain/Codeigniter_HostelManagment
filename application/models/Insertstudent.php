<?php
defined("BASEPATH")or exit("No direct script acces allowed");
class Insertstudent extends CI_Model
{
	public function insert($insert)
	{
		$this->db->insert('addstudent_tb',$insert);
	}
	public function view()
	{
		$this->db->select('*')->from('addstudent_tb');
		$query=$this->db->get();
		return $query->result();
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('addstudent_tb');
	}
}
?>