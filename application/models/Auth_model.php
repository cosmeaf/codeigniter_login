<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

	protected $users = 'tbl_users';	

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}



	function doLogin(){
		$email = $this->security->xss_clean($this->input->post('email'));
		$password = $this->security->xss_clean($this->input->post('password'));
		
		$this->db->where('email', $email);
		$this->db->where('password', sha1($password));
		$this->db->where('status', 1);
		$query = $this->db->get($this->users);

		if($query->num_rows() == 1) {
			return $query->row();
		}

		return false;
	}
}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */