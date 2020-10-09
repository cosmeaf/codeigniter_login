<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
	}

	private function logged_in(){
		if( ! $this->session->userdata('authenticated')){
			redirect('authlogin');
		}
	}

	public function login(){
		$data['title'] = 'Login Page - Lexlam Eletronics Of Brazil';
		$data['users'] = $this->auth_model->doLogin();
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$this->form_validation->set_error_delimiters('<div class="error text-danger">', '</div>');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/login',$data);
		} else {
			$users = $this->auth_model->doLogin();

			if($users){
				$userdata = array(
					'id' => $users->user_id,
					'email' => $users->email,
					'status' => $users->status,
					'rol_id' => $users->rol_id,
					'authenticated' => TRUE
				);

				$this->session->set_userdata($userdata);
				$this->session->set_flashdata('success', 'Bem Vindo');
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('danger', 'Invalid email or password');
				redirect('login', $data);
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
		$this->session->sess_destroy();
		redirect('auth/login');
	}



}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */