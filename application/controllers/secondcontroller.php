<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class secondcontroller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $st=$this->session->userdata('status');
        if ($st!=='login'){
            header('location:'.base_url().'welcome');
        }
    }
    public function index()
	{
        $data['show']=$this->mymodel->select('table_first');
        $data['side']='tampilan/side';
        $data['content']='tampilan/tampiladmin';
        $this->load->view('tampilan/main',$data);
    }
    public function add()
    {
        $data['side']='tampilan/side';
        $data['content']='tampilan/add_v';
        $this->load->view('tampilan/main',$data);
    }
    public function addfunction()
    {
        $data['name']=$this->input->post('idname');
        $data['address']=$this->input->post('idaddress');
        $this->mymodel->insert('table_first',$data);
        header('location:'.base_url().'index.php/secondcontroller');
    }
    public function update()
    {
        $id=$this->uri->segment(3);
        $data['dataupdate']=$this->db->query("SELECT * FROM table_first WHERE no='$id'");
        $data['side']='tampilan/side';
        $data['content']='tampilan/update_v';
        $this->load->view('tampilan/main',$data);
    }
    public function updatefunction()
    {
        $id=$this->input->post('id');
		$where=array('no'=>$id);
		$data['name']=$this->input->post('idname');
		$data['address']=$this->input->post('idaddress');
		$this->mymodel->update('table_first',$data,$where);
		header('location:'.base_url().'index.php/secondcontroller');
    }
    public function deletedata()
	{
		$id=$this->uri->segment(3);
		$delete=array('no'=>$id);
		$this->mymodel->delete('table_first',$delete);
		header('location:'.base_url().'index.php/secondcontroller');
	}
}