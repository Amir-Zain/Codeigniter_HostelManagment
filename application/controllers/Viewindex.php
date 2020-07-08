<?php
defined("BASEPATH")or exit("No direct script acces allowed");
class Viewindex extends CI_Controller
{
	public function index()
	{
		$this->load->view('admin/index');
	}
}