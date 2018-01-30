<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
        $st=$this->session->userdata('status');
        if ($st!=='login'){
            header('location:'.base_url().'welcome');
        }
    }
	public function index()
	{
		$data['content']='display';
        $this->load->view('home',$data);
	}

// side bar menu User *****************************************
	public function member()
    {
		$data['content']='member';
        $this->load->view('home',$data);
	}
	public function register()
    {
		$data['content']='register';
        $this->load->view('home',$data);
	}
	
// side bar menu Post *****************************************
public function allposts()
{
	$data['content']='allposts';
	$this->load->view('home',$data);
}
public function categories()
{
	$data['content']='categories';
	$this->load->view('home',$data);
}
public function addpost()
{
	$data['content']='addpost';
	$this->load->view('home',$data);
}

// side bar menu Media *****************************************
public function library()
{
	$data['content']='library';
	$this->load->view('home',$data);
}
public function addmedia()
{
	$data['content']='addmedia';
	$this->load->view('home',$data);
}

// side bar menu Page *****************************************
public function allpages()
{
	$data['content']='allpages';
	$this->load->view('home',$data);
}
public function addpage()
{
	$data['content']='addpage';
	$this->load->view('home',$data);
}

// side bar menu Comment *****************************************
public function allcomments()
{
	$data['content']='allcomments';
	$this->load->view('home',$data);
}
public function addcomment()
{
	$data['content']='addcomment';
	$this->load->view('home',$data);
}

// side bar menu Appearance *****************************************
public function appearance()
{
	$data['content']='appearance';
	$this->load->view('home',$data);
}
}
