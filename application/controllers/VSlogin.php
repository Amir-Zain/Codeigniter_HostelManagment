<?php
defined("BASEPATH")or exit("NO direct script acces allowed");
class VSlogin extends CI_Controller
{
	public function index()
	{
		$this->load->view('student/login');
		
	}
} 