<?php
defined("BASEPATH")or exit("NO direct script acces allowed");
class VAlogin extends CI_Controller
{
	public function index()
	{
		$this->load->view('admin/login');
		
	}
} 