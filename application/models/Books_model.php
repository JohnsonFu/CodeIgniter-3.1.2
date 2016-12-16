<?php
/**
 * Created by PhpStorm.
 * User: fulinhua
 * Date: 2016/12/16
 * Time: 08:44
 */
class Books_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    public function get_books()
    {
        $query = $this->db->get('booklist');
            return $query->result_array();
    }
    public function set_book(){
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'dash', TRUE);

        $data = array(
            'name' => $this->input->post('name'),
            //'slug' => '-',
            'author' => $this->input->post('author'),
           // 'slug' => '-',
            'price' => $this->input->post('price')
        );

        return $this->db->insert('booklist', $data);
    }
}