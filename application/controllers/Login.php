<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function loginpage(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE){
				$this->load->view('login');
			}else{				
				$t_username = $this->input->POST('username');
				$t_password = $this->input->POST('password');
				$this->reg_model->login($t_username,$t_password);
	
			}
		}
	}
