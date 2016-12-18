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

    public function deletebook(){
        $name=$this->input->post('name');
        $arr=$_SESSION['cart'];
        for($i=0;$i<count($arr);$i++){
            if($arr[$i]['name']==$name){
                if($arr[$i]['qty']!=1) {
                    $arr[$i]['qty']=$arr[$i]['qty']-1;
                }else{
                    array_splice($arr, $i, 1);
                }
            }

        }
        $_SESSION['cart']=$arr;
    }

    public function selectbook(){
        $name=$this->input->post('name');
        $author=$this->input->post('author');
        $price=$this->input->post('price');
        $item=array(
            "name"=>$name,
            "author"=>$author,
            "price"=>$price,
            "qty"=>'1'
        );
        if(isset($_SESSION['cart'])){
            $arr=$_SESSION['cart'];
            $isexist=false;
            for($i=0;$i<count($arr);$i++){
                if($arr[$i]['name']==$item['name']){
                    $item['qty']=$arr[$i]['qty']+1;
                    $arr[$i]=$item;
                    $isexist=true;
                }

            }
            if(!$isexist){
                array_push($arr,$item);
            }
            $_SESSION['cart']=$arr;
        }else{
            $arr=array();
            array_push($arr,$item);
            $_SESSION['cart']=$arr;
        }
    }

}