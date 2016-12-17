<?php

/**
 * Created by PhpStorm.
 * User: fulinhua
 * Date: 2016/12/17
 * Time: 15:52
 */
class user_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function login(){

        $username=$this->input->post('username');
        $password=$this->input->post('password');
       $result= $this->db->query("select * from tb_user where username='$username' and password='$password'")->result_array();
        if(count($result)>0){
            return $result[0];
        }else{
            return null;
        }
    }

}