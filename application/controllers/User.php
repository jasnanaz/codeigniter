<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function userloginpage(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE){
				$this->load->view('userlogin');
		}else{
			$t_username=$this->input->POST('username');
			$t_password=$this->input->POST('password');
			$this->reg_model->userlogin($t_username,$t_password);
		}
	} 
	public function userprofile(){
		$this->load->view('userprofile');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('user/userloginpage');
	}
	public function contactpage(){
		$this->load->view('contactadmin');
	}
	public function changepass(){
		$this->form_validation->set_rules('currentpassword', 'cureent_password', 'required');
		$this->form_validation->set_rules('newpassword', 'new_password', 'required');
		$this->form_validation->set_rules('confirmpassword', 'confirm_password', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->load->view('changepassword');
		}else{
			$currentpassword=$this->input->POST('currentpassword');
			$newpassword=$this->input->POST('newpassword');
			$confirmpassword=$this->input->POST('confirmpassword');
			$this->reg_model->userchangepass($currentpassword,$newpassword,$confirmpassword);
		}
	}
	
	public function edit(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('mobile', 'Phone', 'required');
		if ($this->form_validation->run() == FALSE){
			$this->db->SELECT('name,,email,mobile');
            $this->db->FROM('safran_revathy');
            $id=$this->session->id;
            $this->db->WHERE(array('id'=>$id));
            $query=$this->db->GET();
            $user=$query->row();
            $data['data']=$user;
          
            $this->load->view('editprofile',$data);
           
		}else{
			$name=$this->input->POST('name');
			$email=$this->input->POST('email');
			$mobile=$this->input->POST('mobile');
			$this->reg_model->editprofile($name,$email,$mobile);
		}
	}

	
}

