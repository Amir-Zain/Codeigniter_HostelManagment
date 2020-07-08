<?php
defined("BASEPATH")or exit("NO direct script acces allowed");
class Viewwardencomplaints extends CI_Controller
{
	public function index()
	{
		$data['details']=$this->InsertWcomplaints->view();
		$this->load->view('admin/viewwardencomplaints',$data);
		
	}
	public function delete($id)
	{
		$this->InsertWcomplaints->delete($id);
		redirect('Viewwardencomplaints');
	}
} 