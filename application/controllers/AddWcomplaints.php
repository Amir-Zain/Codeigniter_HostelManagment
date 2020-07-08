<?php
defined("BASEPATH")Or exit("NO direct script acces allowed");
class AddWcomplaints extends CI_Controller
{
	public function index()
	{
		$this->Wloginmodel->start_session();
		if(!$this->Wloginmodel->is_loggedin())
		{
			$this->load->view('warden/login');
		}
		else
		{
			$data['details']=$this->InsertWcomplaints->view();
			$this->load->view('warden/addWcomplaints',$data);
		}
	}
	public function insert()
	{
		

		$this->form_validation->set_rules('name','name','required');
		
		$this->form_validation->set_rules('addmission','addmission','required');
		$this->form_validation->set_rules('datex','datex','required');
		$this->form_validation->set_rules('complaint','complaint','required');
		
		
		if($this->form_validation->run()==false)
		{
			$data['details']=$this->InsertWcomplaints->view();
			$this->load->view('warden/addWcomplaints',$data);
		}
		else
		{
			
			$name=$this->input->post('name');
			
			$addmission=$this->input->post('addmission');
			$datex=$this->input->post('datex');
			$complaint=$this->input->post('complaint');
			
			
			$data=array('name'=>$name,'datex'=>$datex,'addmission'=>$addmission,'complaint'=>$complaint);
			$this->InsertWcomplaints->insert($data);
			redirect('AddWcomplaints');
		}


	}
	
	
}
?>