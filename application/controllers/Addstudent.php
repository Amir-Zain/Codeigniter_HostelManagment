<?php
defined("BASEPATH")Or exit("NO direct script acces allowed");
class Addstudent extends CI_Controller
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
			$data['details']=$this->Insertstudent->view();
			$this->load->view('warden/addstudent',$data);
		}
	}
	public function insert()
	{
		$config['upload_path']='./upload/';
		$config['allowed_types']='gif|png|jpg';
		$config['max_size']='';
		$config['max_width']='';
		$config['max_hieght']='';
		$this->load->library('upload',$config);

		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('fname','fname','required');
		$this->form_validation->set_rules('addmission','addmission','required');
		$this->form_validation->set_rules('birth','birth','required');
		$this->form_validation->set_rules('place','place','required');
		$this->form_validation->set_rules('sex','sex','required');
		$this->form_validation->set_rules('address','address','required');
		if($this->form_validation->run()==false)
		{
			$data['details']=$this->Insertstudent->view();
			$this->load->view('warden/addstudent',$data);
		}
		else
		{
			if(!$this->upload->do_upload('image'))
			{
				$data['error']=$this->upload->display_errors();
				$this->load->view('warden/addstudent',$data);
			}
			else
			{
				$image=$this->upload->data('file_name');
			}
			$name=$this->input->post('name');
			$fname=$this->input->post('fname');
			$addmission=$this->input->post('addmission');
			$birth=$this->input->post('birth');
			$place=$this->input->post('place');
			$sex=$this->input->post('sex');
			$address=$this->input->post('address');
			$data=array('name'=>$name,'fname'=>$fname,'addmission'=>$addmission,'birth'=>$birth,'place'=>$place,'sex'=>$sex,'address'=>$address,'image'=>$image);
			$this->Insertstudent->insert($data);
			redirect('Addstudent');
		}


	}
	public function delete($id)
	{
		$this->Insertstudent->delete($id);
		redirect('Addstudent');
	}
}
?>