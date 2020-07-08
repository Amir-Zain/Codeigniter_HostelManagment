<?php
defined("BASEPATH")or exit("NO direct script acces allowed");
class ViewScomplaints extends CI_Controller
{
	public function index()
	{
		$data['details']=$this->InsertScomplaints->view();
		$this->load->view('warden/viewscomplaints',$data);
		
	}
} 