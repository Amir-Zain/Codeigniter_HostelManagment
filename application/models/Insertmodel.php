<?php
defined("BASEPATH")or exit("No direct script acces allowed");
class Insertmodel extends CI_Model
{
	public function insert($insert)
	{
		$this->db->insert('addwarden_tb',$insert);
	}
	public function view()
	{
		$this->db->select('*')->from('addwarden_tb');
		$query=$this->db->get();
		return $query->result();
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('addwarden_tb');
	}
	
}