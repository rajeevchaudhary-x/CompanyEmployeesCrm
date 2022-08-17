<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {
    public function login(){

    if(isset($_POST['submit']))


    {
			$username= $this->input->post('username');

			$password= $this->input->post('password');

			$row= $this->Admins->adminLogin($username, $password);

			//print_r($row); die();

			if(count($row)==1)

			{
               foreach($row as $val)

					{

							$data= array('USERID' =>$val->id,

									'USERNAME' => $val->username,

									'logged_in' => true

									);

							$this->session->set_userdata($data);


					}
					redirect('welcome/home');
					

					

			}

			else

			{

				$this->session->set_flashdata('message','<div class="alert alert-danger">Invalid Username and Password.</div>');

				redirect('admin/login');
            	}
		}

		$this->load->view('admin/login');
        
	}

	public function logout(){
		$this->load->view('admin/logout');
	}
}
