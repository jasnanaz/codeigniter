<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
    public function __construct(){
    parent :: __construct();
    }

    public function sendmail(){
        $this->load->view('email');
        $from_email="revathyrajappan98@gmail.com";
        $to_mail=$this->input->post('email');
        $this->email->from($from_email,'revathy');
        $this->email->to($to_mail);
        $this->email->subject('test');
        $this->email->message('hai');
        if($this->email->send()){
            $this->session->set_flashdata('email_sent','email success');
        }else{
                $this->session->set_flashdata('email_sent','error');
            }
        }
    }