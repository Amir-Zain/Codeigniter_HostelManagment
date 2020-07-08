<?php
defined("BASEPATH")Or exit("NO direct script acces allowed");
class AddScomplaints extends CI_Controller
{
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
			$data['details1']=$this->InsertScomplaints->view();
			$this->load->view('student/addScomplaints',$data);
		}
	}
	public function insert()
	{
		

		$this->form_validation->set_rules('name','name','required');
		
		$this->form_validation->set_rules('addmission','addmission','required');
		$this->form_validation->set_rules('datex','datex','required');
		$this->form_validation->set_rules('complaint','complaint','required');
		$this->form_validation->set_rules('status','status','required');
		
		if($this->form_validation->run()==false)
		{
			$data['details']=$this->InsertScomplaints->view();
			$this->load->view('student/addScomplaints',$data);
		}
		else
		{
			
			$name=$this->input->post('name');
			
			$addmission=$this->input->post('addmission');
			$datex=$this->input->post('datex');
			$complaint=$this->input->post('complaint');
			$status=$this->input->post('status');
			
			$data=array('name'=>$name,'datex'=>$datex,'addmission'=>$addmission,'complaint'=>$complaint,'status'=>$status);
			$this->InsertScomplaints->insert($data);
			redirect('AddScomplaints');
		}


	}
	
}
?>