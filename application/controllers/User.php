<?php

/**
 * Created by PhpStorm.
 * User: fulinhua
 * Date: 2016/12/17
 * Time: 16:51
 */
class User extends CI_Controller
{
public function __construct()
{
    parent::__construct();
    $this->load->model('user_model');
    $this->load->helper('url_helper');
}
    public function login(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', '用户名', 'required');
        $this->form_validation->set_rules('password', '密码', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $data['title'] = 'login';
            $this->load->view('templates/header',$data);
            $this->load->view('user/login');
            $this->load->view('templates/footer');

        }
        else
        {
            $res=$this->user_model->login();
            if($res==true)
            $this->load->view('user/success');
            else
                $this->load->view('user/fail');
        }
    }


}