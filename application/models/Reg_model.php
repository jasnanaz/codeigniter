<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reg_model extends CI_model{
	public function __construct(){
	parent :: __construct();
}
public function register(){
	$data = array(
		'name'=>$this->input->POST('name'),
		'email'=>$this->input->POST('email'),
		'mobile'=>$this->input->POST('mobile'),
		'username'=>$this->input->POST('username'), 
		'password'=>$this->input->POST('password')          
	);
	$this->db->insert('safran_revathy',$data);
	return $this->db->insert_id();
}
public function login($t_username,$t_password){
	$this->db->SELECT('*');
	$this->db->FROM('admin_revathy');
	$this->db->WHERE(array('username'=>$t_username));
	$query=$this->db->get();
	$user=$query->row();
		if($user){
			if($t_username==$user->username && $t_password==$user->password){
				$data['data']=$user->username;
				$this->load->view('dashboard',$data);
			}else{
				$data['data']='Password is incorrect';
				$this->load->view('login',$data);
			}
			}else{
				$data['data']='user not exist';
				$this->load->view('login',$data);
			}
		}
public function userlogin($t_username,$t_password){
	$this->db->SELECT('*');
	$this->db->FROM('safran_revathy');
	$this->db->WHERE(array('username'=>$t_username));
	$query=$this->db->get();
	$user=$query->row();

	if($user){
		if($t_username==$user->username && $t_password==$user->password){
			$session_data=array(
				'id'=>$user->id,
				'name'=>$user->name,
				'email'=>$user->email,
				'mobile'=>$user->mobile,
				'username'=>$user->username,
				'password'=>$user->password
			);
			$this->session->set_userdata($session_data);
			$this->load->view('userprofile');
			// echo 'login successfully';
		}else{
			$data['data']='password is incorrect';
			$this->load->view('userlogin',$data);
		}
		}else{
			$data['data']='user not exist';
			$this->load->view('userlogin',$data);

		}
	}
	public function userchangepass($currentpassword,$newpassword,$confirmpassword){
		$this->db->SELECT('password');
		$this->db->FROM('safran_revathy');
		$id=$this->session->id;
		$this->db->WHERE(array('id'=>$id));
		$query=$this->db->GET();
		$user=$query->row();
		if($user){
			if($currentpassword==$user->password){
				$data=array(
					'password'=>$newpassword
				);
				$this->db->set($data);
				$this->db->WHERE(array('id'=>$id));
				$this->db->UPDATE('safran_revathy');
				echo 'password changed';
			}else{
				echo 'invalid password';
			}
		}
	}
	public function editprofile($name,$email,$mobile){
		$this->db->SELECT('name,email,mobile');
		$this->db->FROM('safran_revathy');
		$id=$this->session->id;
		$this->db->WHERE(array('id'=>$id));
		$query=$this->db->GET();
		$user=$query->row();
		$data=array(
			'name'=>$name,
			'email'=>$email,
			'mobile'=>$mobile
		);
		$this->db->set($data);
		$this->db->WHERE(array('id'=>$id));
		$this->db->UPDATE('safran_revathy');
		echo 'updated successfully';
	}

}
