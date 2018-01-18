<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logincontroller extends CI_Controller {

    public function loginaction()
    {        
        $u=$this->input->post('username');
        $p=$this->input->post('password');
        $this->mymodel->login($u,$p);
    }
    public function logout()
    {
        $this->session->sess_destroy();
        header('location:'.base_url().'welcome');
    }
}