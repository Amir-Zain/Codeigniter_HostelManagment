<?php
defined('BASEPATH')OR exit('NO direct script acces allowed');
class Ahomecontrol extends CI_Controller
{
	public function index()
	{
		$this->Aloginmodel->start_session();
		if(!$this->Aloginmodel->is_loggedin())
		{
			$this->load->view('admin/login');
		}
			else
			{
				$this->load->view('admin/home');
			}
		
	}
}
?>