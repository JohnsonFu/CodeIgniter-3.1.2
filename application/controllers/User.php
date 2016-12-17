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
    $this->load->model('books_model');
    $this->load->helper('url_helper');
    $this->load->library('session');
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
            if($res!=null) {
                $data['userinfo']=$res;
                $data['booklist']=$this->books_model->get_books();
                $data['title'] = '个人信息';
                $_SESSION['info']=$data;
                $this->load->view('templates/header');
                $this->load->view('user/homepage');
                $this->load->view('templates/footer');
            }
            else
                $this->load->view('user/fail');
        }
    }

    public function selectbook(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('author', 'author', 'required');
        $this->form_validation->set_rules('price', 'price', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $data['title'] = 'login';
            $this->load->view('templates/header',$data);
            $this->load->view('user/login');
            $this->load->view('templates/footer');

        }
        else {
            $name=$this->input->post('name');
            $author=$this->input->post('author');
            $price=$this->input->post('price');
            $item=array(
                "name"=>$name,
                "author"=>$author,
                "price"=>$price,

            );
            if(isset($_SESSION['cart'])){
                $arr=$_SESSION['cart'];
                array_push($arr,$item);
                $_SESSION['cart']=$arr;
            }else{
                $arr=array();
                array_push($arr,$item);
                $_SESSION['cart']=$arr;
            }


            $this->load->view('templates/header');
            $this->load->view('user/homepage');
            $this->load->view('templates/footer');
        }
    }


}