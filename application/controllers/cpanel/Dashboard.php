<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index(){
		$this->admin->show('admin/home');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/cpanel/Dashboard.php */