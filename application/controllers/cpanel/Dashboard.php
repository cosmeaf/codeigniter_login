<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->logged_in();
	}

	private function logged_in() {
		if(! $this->session->userdata('authenticated')) {
			redirect('login');
		}
	}

	function index(){
    //Allowing akses to admin only
		if($this->session->userdata('rol_id')==='1'){
			$this->admin->show('admin/home');
		}else{
			echo "Access Denied";
		}

	}

	function staff(){
    //Allowing akses to staff only
		if($this->session->userdata('rol_id')==='2'){
			$this->admin->show('admin/home');
		}else{
			echo "Access Denied";
		}
	}

	function author(){
    //Allowing akses to author only
		if($this->session->userdata('rol_id')==='3'){
			$this->admin->show('admin/home');
		}else{
			echo "Access Denied";
		}
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/cpanel/Dashboard.php */