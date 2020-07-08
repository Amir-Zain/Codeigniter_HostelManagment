<?php
defined("BASEPATH")or exit("No Direct script acces allowed");
class Searchmodel extends  CI_Model
{
	function fetch_data($query)
	{
		$this->db->select('*');
		$this->db->from('addstudent_tb');
		if($query !='')
		{
			$this->db->like('id',$query);
			$this->db->or_like('name',$query);
			$this->db->or_like('fname',$query);
			$this->db->or_like('addmission',$query);
			$this->db->or_like('birth',$query);
			$this->db->or_like('place',$query);
			$this->db->or_like('sex',$query);
			$this->db->or_like('address',$query);
			$this->db->or_like('image',$query);
		}
		$this->db->order_by('id','ASC');
		$query=$this->db->get();
		return $query->result();
	}
}
?> 