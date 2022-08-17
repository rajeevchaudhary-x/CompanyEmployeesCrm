<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function home(){
	$this->Admins->checkLoggedIn();
  $this->load->view('crmhome');
}
	// show all data function 
	public function index(){
		$this->Admins->checkLoggedIn();
		$data['emp']=$this->Crud->get_data('employees');
		$this->load->view('Employees/crm.php',$data);

	}


	// edit employeee upadte  data here 
    public function editemployye(){
		$this->Admins->checkLoggedIn();
		$args = func_get_args();
        $this->load->library('form_validation');
		$this->form_validation->set_rules('firstname','firstname','trim|required|min_length[4]|max_length[20]'); 
		$this->form_validation->set_rules('lastname','lastname','trim|required|min_length[4]|max_length[20]'); 
		$this->form_validation->set_rules('email','Email','required|valid_email'); 
		$this->form_validation->set_rules('phone','phone','required|numeric|exact_length[10]'); 
		$this->form_validation->set_rules('compname','compname','trim|required|min_length[4]|max_length[20]'); 
		if ($this->form_validation->run() == TRUE) 
		{ 
			
          
		if(isset($_POST['submit'])){
			
			$data['company_name']=$this->input->post('compname');
			$data['first_name']=$this->input->post('firstname');
			$data['last_name']=$this->input->post('lastname');
			$data['email']=$this->input->post('email');
			$data['phone']=$this->input->post('phone');
			$data['DateOFJoining']= $this->input->post('dateofjoin');
            $result = $this->Crud->update('employees',$args[0],$data);			
			if($result===TRUE){
				echo "<script>alert('upadted sucessfully');</script>";
				header("Location: http://localhost/CompanyEmployeesCrm/");
			}
			else{
				echo "<script>alert('not inserted sucessfully');</script>";
			}
			}
		}



		$data['alldata'] =$this->Crud->fetchdatabyid($args[0],"employees");
		$this->load->view('Employees/editemployee',$data);
	}


 // insert employee data here 
	public function addnewemployee(){
		$this->Admins->checkLoggedIn();
		$this->load->library('form_validation');
		$this->form_validation->set_rules('firstname','firstname','trim|required|min_length[4]|max_length[20]'); 
		$this->form_validation->set_rules('lastname','lastname','trim|required|min_length[4]|max_length[20]'); 
		$this->form_validation->set_rules('email','Email','required|valid_email'); 
		$this->form_validation->set_rules('phone','phone','required|numeric|exact_length[10]'); 
		$this->form_validation->set_rules('compname','compname','trim|required|min_length[4]|max_length[20]'); 
		if ($this->form_validation->run() == TRUE) 
		{ 
			
          
		if(isset($_POST['submit'])){
			$this->Admins->checkLoggedIn();
			$data['company_name']=$this->input->post('compname');
			$data['first_name']=$this->input->post('firstname');
			$data['last_name']=$this->input->post('lastname');
			$data['email']=$this->input->post('email');
			$data['phone']=$this->input->post('phone');
			$data['DateOFJoining']= $this->input->post('dateofjoin');
            $result = $this->Crud->insert('employees',$data);			
			if($result===TRUE){
				echo "<script>alert('inserted sucessfully');</script>";
				header("Location: http://localhost/CompanyEmployeesCrm/");
			}
			else{
				echo "<script>alert('not inserted sucessfully');</script>";
			}
			}
		}


		$this->load->view('Employees/addnewemployee.php');
	}
 public function deletemp(){
	$this->Admins->checkLoggedIn();
	$args = func_get_args();
	$delete = $this->Crud->delete('employees',$args[0]);
	if($delete){
		
         header("Location: http://localhost/CompanyEmployeesCrm/");
	}
	else{
		echo "<script>alert('something went wrong');script>";
				
	}
 }






 // add a comapny companies 

 public function addcomp(){
	$this->Admins->checkLoggedIn();
	if(isset($_POST['ins'])){
        $config['upload_path']="./uploads/";
		$config['allowed_types']="png|jpeg|jpg|gif";
		$this->load->library("upload",$config);
		$res=$this->upload->do_upload("logo");
		if($res){
	  $dataemp['logo']=$this->upload->data("file_name");
      $dataemp['name']=$this->input->post('name');
      $dataemp['email']=$this->input->post('email');
	  $fcomp = $this->Crud->insert("companies",$dataemp);
	  if($fcomp){
	  header("Location: http://localhost/CompanyEmployeesCrm/index.php/showcomp");
	  }
	  else{
		echo "<script>alert('something went wrong');script>";
	  }
	}
	else{
		$dataemp['name']=$this->input->post('name');
		$dataemp['email']=$this->input->post('email');
		$f2 = $this->Crud->insert("companies",$dataemp);
		if($f2){
		header("Location: http://localhost/CompanyEmployeesCrm/index.php/showcomp");
		}
		else{
			echo "<script>alert('something went wrong');script>";
		}
		
	}
}
$this->load->view('company/addcomp');


}

// show all  company records 
public function showallcomp(){
	$this->Admins->checkLoggedIn();
	$data['compdat']=$this->Crud->get_data('companies');
	$this->load->view('company/showallcomp',$data);

	
}
//// edit company records 
public function editcompany(){
	$this->Admins->checkLoggedIn();
	$args = func_get_args();
	if(isset($_POST['up'])){
        $config['upload_path']="./uploads/";
		$config['allowed_types']="png|jpeg|jpg|gif";
		$this->load->library("upload",$config);
		$res=$this->upload->do_upload("logo");
		if($res){
	  $dataemp['logo']=$this->upload->data("file_name");
      $dataemp['name']=$this->input->post('name');
      $dataemp['email']=$this->input->post('email');
	  $fe = $this->Crud->update("companies",$args[0],$dataemp);
	  if($fe){
		header("Location: http://localhost/CompanyEmployeesCrm/index.php/showcomp");
	  }
	  else{
		echo "<script>alert('something went wrong');script>";
	  }
	}
	else{
		$dataemp['name']=$this->input->post('name');
		$dataemp['email']=$this->input->post('email');
		$fe2= $this->Crud->update("companies",$args[0],$dataemp);
		if($fe2){
			header("Location: http://localhost/CompanyEmployeesCrm/index.php/showcomp");
		}
		else{
			header("Location: http://localhost/CompanyEmployeesCrm/index.php/showcomp");
		}
	}
}
	$edit['compdata']=$this->Crud->fetchdatabyid($args[0],'companies');
	$this->load->view('company/editcomp',$edit);
}

}