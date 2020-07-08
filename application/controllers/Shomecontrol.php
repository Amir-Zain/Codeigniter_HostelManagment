<?php
defined('BASEPATH')OR exit('NO direct script acces allowed');
class Shomecontrol extends CI_Controller
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
				$this->load->view('student/home',$data);
			}
		
	}
}
?>