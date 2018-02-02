<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model extends CI_Model {
    public function select($table)
    {
        return $this->db->get($table);
    }
    public function selectwhere($table,$data)
    {
        return $this->db->get_where($table,$data);
    }
    function delete($table,$data)
    {
        $this->db->delete($table,$data);
    }
    function update($table,$data,$key)
    {
        $this->db->update($table,$data,$key);
    }
    function insert($table,$data)
    {
        $this->db->insert($table,$data);
    }
    public function login($u,$p)
    {
        $username=$u;
        $password=md5($p);
        $login=$this->db->get_where('table_login', array ('username'=>$username,'password'=>$password));
        if (count($login->result())>0) {
            foreach ($login->result() as $key) {
            $sess['status']='login';
            $sess['name']=$key->name;
            $sess['username']=$key->username;
            $this->session->set_userdata($sess);     
        }
        header('location:'.base_url().'First_controller');
    }else {
        header('location:'.base_url().'Welcome');
    }
}
}