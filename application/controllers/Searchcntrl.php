
<?php
defined('BASEPATH')Or exit('No direct script acces allowed');
class Searchcntrl extends CI_Controller
{
	public function index()
	{
		$this->Aloginmodel->start_session();
		if(!$this->Aloginmodel->is_loggedin())
		{
			$this->load->view('admim/login');
		}
		else
		{
			$data['details']=$this->Insertstudent->view();
			$this->load->view('admin/search',$data);
		}
	}
	function fetch()
	{
		$output='';
		$query='';
		$this->load->model('Searchmodel');
		if($this->input->post('query'))
		{
			$query=$this->input->post('query');
		}
		$data=$this->Searchmodel->fetch_data($query);
		$output.='
 	 	<div class="table-responsive">
 	 	  <table class="table table-bordered table-striped">
 	 	  <tr>
 	 	  <td>gg</td>
 	 	  <th>Name</th>
 	 	  <th>Father Name</th>
 	 	  <th>Admission Number</th>
 	 	  <th>Date Of Birth</th>
 	 	  <th>Place</th>
 	 	  <th>Sex</th>
 	 	  <th>Address</th>
 	 	  <th>Image</th>
 	 	  </tr>
 	 	  ';
 	 	  if (count($data)>0) 
 	 	  {
 	 	  	foreach($data as $row)
 	 	  	{
 	 	  		$output.='
 	 	  		<tr>
 	 	  		<td>'.$row->id.'</td>
 	 	  		<td>'.$row->name.'</td>
 	 	  		<td>'.$row->fname.'</td>
 	 	  		<td>'.$row->addmission.'</td>
 	 	  		<td>'.$row->birth.'</td>
 	 	  		<td>'.$row->place.'</td>
 	 	  		<td>'.$row->sex.'</td>
 	 	  		<td>'.$row->address.'</td>
 	 	  		
 	 	  	    
  	 	  		</tr>
 	 	  		';
  	 	  	}
 	 	  }
 	 	  else
 	 	  {
 	 	  	$output.='<tr>
 	 	  	  <td colspan="5">No Data Found</td>
 	 	  	</tr>';
 	 	  }
 	 	  $output.='</table>';
 	 	  echo $output;
	}
}
?>