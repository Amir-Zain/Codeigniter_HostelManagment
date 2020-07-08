<?php
defined("BASEPATH")or exit("NO direct script acces allowed");
class Viewfood extends CI_Controller
{
	public function index()
	{
		$data['details']=$this->Viewprofilemodel->view();
		$data['details1']=$this->Insertfood->view1();
		//print_r($data); exit();
		$this->load->view('student/viewfood',$data);
		
	}
	

	
} 
?>