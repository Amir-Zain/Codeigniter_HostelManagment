<?php
defined('BASEPATH')or exit("No direct script acces allowed");
class Addfood extends CI_Controller
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
			
			$this->load->view('warden/addfood');
		}
	}
	public function insert()
	{
		$this->form_validation->set_rules('day','day','required');
		$this->form_validation->set_rules('breakfast','breakfast','required');
		$this->form_validation->set_rules('btime','btime','required');
		$this->form_validation->set_rules('lunch','lunch','required');
		$this->form_validation->set_rules('ltime','ltime','required');
		$this->form_validation->set_rules('dinner','dinner','required');
		$this->form_validation->set_rules('dtime','dtime','required');
		if($this->form_validation->run()==false)
		{
			
			$this->load->view('warden/addfood');
		}
		else
		{
			$day=$this->input->post('day');
			$breakfast=$this->input->post('breakfast');
			$btime=$this->input->post('btime');
			$lunch=$this->input->post('lunch');
			$ltime=$this->input->post('ltime');
			$dinner=$this->input->post('dinner');
			$dtime=$this->input->post('dtime');
			$data=array('day'=>$day,'breakfast'=>$breakfast,'btime'=>$btime,'lunch'=>$lunch,'ltime'=>$ltime,'dinner'=>$dinner,'dtime'=>$dtime);
			$this->Insertfood->insert($data);
			redirect('Addfood');
		}

	}
}