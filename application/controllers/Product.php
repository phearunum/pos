<?php

class Product extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_Model','admin');
        $this->load->model('Product_Model','product');
        $this->load->model('Category_Model','category');
        $this->load->model('User_Model','user');
        // Load form helper library
        $this->load->helper('form');
        // Load form validation library
        $this->load->library('form_validation');
        // Load session library
        $this->load->library('session');
        $this->request = json_decode(trim(file_get_contents('php://input'), 'r'), true);
        header('Content-Type', 'application/json');
        $_POST = json_decode(trim(file_get_contents('php://input'), 'r'), true);
    }
    public  function index(){
        if($_GET['cat']){
            $pro=$this->product->getProductByCatId($_GET['cat']);
        }else{
            $pro=$this->product-> getProduct();
        }
        $data=array(
            'pro'=>$pro
        );
        $this->load->view('Main',$data);
    }

    public function getProductDetial(){

    }
}