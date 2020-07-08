<?php
defined('BASEPATH')OR exit('NO direct script acces allowed');
class Whomecontrol extends CI_Controller
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
				$this->load->view('warden/home');
			}
		
	}
}
?>