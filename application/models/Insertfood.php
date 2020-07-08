<?php
defined('BASEPATH')or exit("No direct script acces allowed");
class Insertfood extends CI_Model
{
	public function insert($insert)
	{
		$this->db->insert('addfood_tb',$insert);
	}
	public function view1()
	{
		$this->db->select('*')->from('addfood_tb');
		$query=$this->db->get();
		return $query->result();
	}
}