<?php
defined("BASEPATH")or exit("No direct script acces allowed");
class Slogincontrol extends CI_Controller
{
	public function index()
	{
		$this->Sloginmodel->start_session();
		if(!$this->Sloginmodel->is_loggedin())
		{
			$this->load->view('warden/login');
		}
		else
		{
			$this->load->view('warden/login');
		}
	}
	public function login()
	{
		$this->form_validation->set_rules('addmission','addmission','required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('warden/login');
		}
		else
		{
			$addmission=$this->input->post('addmission');
		
			if($this->Sloginmodel->login($addmission))
			{
				$id=$this->Sloginmodel->id;
				if($id>0)
				{
					$this->session->set_userdata('id',$id);
					$this->session->set_userdata('addmission',$addmission);
					
					$this->Sloginmodel->start_session();
					redirect('Shomecontrol');
				}
			}
			else
			{
				$data['error']='invalid addmission';
				$this->load->view('student/login');
			}
		}
	}
public function logout()
	{
		$this->Sloginmodel->logout();
		redirect('VSlogin');
	}
}
?>