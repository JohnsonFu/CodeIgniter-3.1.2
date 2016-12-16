<?php

/**
 * Created by PhpStorm.
 * User: fulinhua
 * Date: 2016/12/16
 * Time: 08:55
 */
class Books extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('books_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['books'] = $this->books_model->get_books();
        $data['title'] = 'Books archive';

        $this->load->view('templates/header', $data);
        $this->load->view('books/index', $data);
        $this->load->view('templates/footer');
    }
    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Create a book item';

        $this->form_validation->set_rules('name', '书名', 'required');
        $this->form_validation->set_rules('author', '作者', 'required');
        $this->form_validation->set_rules('price', '价格', 'required');
        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('books/create');
            $this->load->view('templates/footer');

        }
        else
        {
            $this->books_model->set_book();
            $this->load->view('books/success');
        }
    }


}