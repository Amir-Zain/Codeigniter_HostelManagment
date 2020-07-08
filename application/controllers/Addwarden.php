<?php
defined("BASEPATH")Or exit("NO direct script acces allowed");
class Addwarden extends CI_Controller
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
			$data['details']=$this->Insertmodel->view();
			$this->load->view('admin/addwarden',$data);
		}
	}
	public function insert()
	{
		$config['upload_path']='./upload/';
		$config['allowed_types']='gif|jpg|png|jpeg';
		$config['max_size']='';
		$config['max_width']='';
		$config['max_height']='';
		$this->load->library('upload',$config);

	$this->form_validation->set_rules('name','name','required');
	$this->form_validation->set_rules('username','username','required');
	$this->form_validation->set_rules('password','password','required');
	$this->form_validation->set_rules('birth','birth','required');
	$this->form_validation->set_rules('place','place','required');
	$this->form_validation->set_rules('sex','sex','required');
	if($this->form_validation->run()==false)
	{
		$data['details']=$this->Insertmodel->view();
		$this->load->view('admin/addwarden',$data);
	}
	else
	{
		if(!$this->upload->do_upload('image'))
		{
			$data['error']=$this->upload->display_errors();
			$this->load->view('admin/addwarden',$data);
		}
		else
		{
		$image=$this->upload->data('file_name');
	}

	$name=$this->input->post('name');
	$username=$this->input->post('username');
	$password=$this->input->post('password');
	$birth=$this->input->post('birth');
	$place=$this->input->post('place');
	$sex=$this->input->post('sex');
	$data=array('name'=>$name,'username'=>$username,'password'=>$password,'birth'=>$birth,'place'=>$place,'sex'=>$sex,'image'=>$image);
	$this->Insertmodel->insert($data);
	redirect('Addwarden');


}
	}
	public function delete($id)
	{
		$this->Insertmodel->delete($id);
		redirect('Addwarden');
	}


}
?>