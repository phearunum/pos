<?php

class Category extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_Model','category');
    }
    public function index(){
        $data=$this->category->getAll();
        $cat=array(
            'cat'=>$data
        );
        $this->load->view('category',$cat);
    }

}