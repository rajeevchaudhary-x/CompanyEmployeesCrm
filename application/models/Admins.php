<?php
class Admins extends CI_Model
{
	public $admin= "admin";
	
	function adminLogin($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);	
		$data= $this->db->get("admin");
		return $data->result();		
	}
	
	function selectAdmin()
	{
		$data= $this->db->get('admin');
		return $data->result();
	}
	
	function selectAdminData($id)
	{
		$this->db->where('id',$id);
		$data= $this->db->get('admin');
		return $data->result();
	}
	
	function checkadminemail($email)
	{
		$this->db->where('emailid', $email);
		$data= $this->db->get("admin");
		return $data->result();		
	}
	
	function updatetoken($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update('admin',$data);
	}
	
	function selectAdminForgotkey($arg)
	{
		$this->db->where('forgot_key', $arg);
		$data= $this->db->get('admin');
		return $data->result();
	}
	
	function updateAdminDetails($data)
	{
		return $this->db->update('admin',$data);
	}
	
	function updateAdmin($id,$data)
	{
		$this->db->where('id', $id);
		return $this->db->update('admin',$data);
	}

	function checkLoggedIn() {
		if(isset($_SESSION['USERNAME'])) {
			return true;
		}
		else{
			redirect('admin/login');
		}
		exit;
	} 
	
}

?>
<!-- if (session('logged_in') == true) { -->