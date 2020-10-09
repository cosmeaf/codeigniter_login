<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
	}

	private function logged_in(){
		if( ! $this->session->userdata('authenticated') !== TRUE){
			redirect('login');
		}
	}

	public function login(){
		$data['title'] = 'Login Page - Lexlam Eletronics Of Brazil';
		$data['users'] = $this->auth_model->doLogin();
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email[tbl_users.email]|valid_emails');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="error text-danger">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/login',$data);
		} else {
			$users = $this->auth_model->doLogin();
			//echo "<pre>";print_r($users);die();
			if ($users) {
				$userdata = array(
					'user_id' => $users->user_id,
					'email' => $users->email,
					'status' => $users->status,
					'rol_id' => $users->rol_id,
					'authenticated' => TRUE
				);
				$this->session->set_userdata($userdata);
				if($users->user_id === '1'){
					$this->session->set_flashdata('success','Bem vindo');
					redirect('dashboard');
				}elseif($users->user_id === '2'){
					$this->session->set_flashdata('success','Bem vindo');
					redirect('dashboard/staff');
				}else{
					$this->session->set_flashdata('success','Bem vindo');
					redirect('dashboard/author');
				}
			}else{
				echo $this->session->set_flashdata('danger','Username or Password is Wrong');
				redirect('login');
			}
		}
	}


	public function recovery(){
		$this->load->view('auth/recovery');
	}

	public function register(){
		$this->load->view('auth/register');
	}

	public function logout(){
		$data['title'] = 'Login Page - Lexlam Eletronics Of Brazil';
		$data['users'] = $this->auth_model->doLogin();
		$this->session->sess_destroy();
		redirect('login', $data);
	}



}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */