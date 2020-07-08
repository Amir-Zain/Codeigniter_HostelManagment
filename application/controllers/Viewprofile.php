<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Viewprofile extends CI_Controller{

	public function index() 
	{
		$this->Sloginmodel->start_session();
		if(!$this->Sloginmodel->is_loggedin())
		{
			$this->load->view('student/login');
		}
		else
		{
			$data['details']=$this->Viewprofilemodel->view();
		//print_r($data); exit();
		$this->load->view('student/viewprofile',$data);
		}
	}

	public function view()

	{

		$data['details']=$this->Viewprofilemodel->view();
		$this->load->view('student/viewprofile',$data);
	}
	


	
}
 

?>
