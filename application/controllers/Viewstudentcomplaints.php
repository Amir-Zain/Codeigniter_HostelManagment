<?php
defined("BASEPATH")or exit("NO direct script acces allowed");
class Viewstudentcomplaints extends CI_Controller
{
	public function index()
	{
		$data['details']=$this->InsertScomplaints->view1();
		$this->load->view('admin/viewstudentcomplaints',$data);
		
	}
	public function delete($id)
	{
		$this->InsertScomplaints->delete($id);
		redirect('Viewstudentcomplaints');
	}
	public function edit($id)
	{
		$data['details']=$this->InsertScomplaints->view1();
		$data['editdetails']=$this->InsertScomplaints->edit($id);
		$this->load->view('admin/reply',$data);
	}
	public function update($id)
	{
		$this->form_validation->set_rules('status','status','required');
		
		if($this->form_validation->run()==false)
		{
			$data['details']=$this->InsertScomplaints->view1();
			$this->load->view('admin/viewstudentcomplaints',$data);

		}
		else{
			
			$status=$this->input->post('status');
			$data=array('status'=>$status);
			$this->InsertScomplaints->update($data,$id);
			redirect('Viewstudentcomplaints');
			


		}
	}
} 