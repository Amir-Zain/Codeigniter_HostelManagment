<?php
defined("BASEPATH")or exit("NO direct script acces allowed");
class VWlogin extends CI_Controller
{
	public function index()
	{
		$this->load->view('warden/login');
		
	}
} 