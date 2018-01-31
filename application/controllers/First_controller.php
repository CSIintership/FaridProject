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
		$data['content']='user/member';
        $this->load->view('home',$data);
	}
	public function register()
    {
		$data['content']='user/register';
        $this->load->view('home',$data);
	}

// side bar menu User *****************************************
	public function groupadmin()
	{
		$data['content']='usergroup/groupadmin';
		$this->load->view('home',$data);
	}
	public function groupuser()
	{
		$data['content']='usergroup/groupuser';
		$this->load->view('home',$data);
	}
	
// side bar menu Post *****************************************
public function allposts()
{
	$data['content']='post/allposts';
	$this->load->view('home',$data);
}
public function categories()
{
	$data['content']='post/categories';
	$this->load->view('home',$data);
}
public function addpost()
{
	$data['content']='post/addpost';
	$this->load->view('home',$data);
}

// side bar menu Media *****************************************
public function library()
{
	$data['content']='media/library';
	$this->load->view('home',$data);
}
public function addmedia()
{
	$data['content']='media/addmedia';
	$this->load->view('home',$data);
}

// side bar menu Page *****************************************
public function allpages()
{
	$data['content']='page/allpages';
	$this->load->view('home',$data);
}
public function addpage()
{
	$data['content']='page/addpage';
	$this->load->view('home',$data);
}

// side bar menu Comment *****************************************
public function allcomments()
{
	$data['content']='comment/allcomments';
	$this->load->view('home',$data);
}
public function addcomment()
{
	$data['content']='comment/addcomment';
	$this->load->view('home',$data);
}

// side bar menu Appearance *****************************************
public function appearance()
{
	$data['content']='appearance';
	$this->load->view('home',$data);
}
}
