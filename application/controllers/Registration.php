<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	
	public function index(){
		$this->load->view('home'); 
	}
	public function home(){
		$this->load->view('home');
	}
	public function contact(){
		$this->load->view('contact');
	}
	public function about(){
		$this->load->view('about');
	}
	public function reg_page(){

		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('mobile', 'Phone', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE){
					$this->load->view('registration');
					
                }
                else{
					$this->reg_model->register();
					echo "success";
					
                }
		
	}
}
	
