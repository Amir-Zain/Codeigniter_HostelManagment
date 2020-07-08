<?php
defined("BASEPATH")or exit("No direct script acces allowed");
class Wlogincontrol extends CI_Controller
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
			$this->load->view('warden/login');
		}
	}
	public function login()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run()==false)
		{
			$this->load->view('warden/login');
		}
		else
		{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			if($this->Wloginmodel->login($username,$password))
			{
				$id=$this->Wloginmodel->id;
				if($id>0)
				{
					$this->session->set_userdata('id',$id);
					$this->session->set_userdata('username',$username);
					$this->session->set_userdata('password',$password);
					$this->Aloginmodel->start_session();
					redirect('Whomecontrol');
				}
			}
			else
			{
				$data['error']='invalid username/password';
				$this->load->view('warden/login');
			}
		}
	}
	public function logout()
	{
		$this->Wloginmodel->logout();
		redirect('VWlogin');
	}
}
?>