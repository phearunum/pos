<?php

class  Admin extends CI_Controller{
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
      $this->load->view('admin/home');
    }
    public  function login(){
        $this->load->view('admin/login');
    }
    public function doLogin(){
        header('Content-Type', 'application/json');
        $_POST = json_decode(trim(file_get_contents('php://input'), 'r'), true);
        $data=array(
            't_Accountname'=>$_GET['acc'],
            't_Password'=>$_GET['pwd'],
        );
        $check=$this->admin->AdminLogin($data);
        if($check!=false){
            foreach ($check as $adm){
                $admin=array(
                    'id'=>$adm->t_UerID,
                    'Acc'=>$adm->t_Accountname
                );
            }
            $this->session->set_userdata('log',$admin);
            $encode_data = json_encode($check);
            echo $encode_data;

        }else{ return false;}


    }

    public function pro_list(){
        $pro=$this->product-> getProduct();
        $data=array(
            'pro'=>$pro
        );
        $this->load->view('admin/list_product',$data);
    }
    public function pro_add(){
        $cat=$this->category->getAll();
        $data=array(
            'cat'=>$cat
        );
        $this->load->view('admin/add_product',$data);
    }

    public function update_pro($data){

        $pro=$this->product->getProductById($data);
        $cat=$this->category->getAll();
        $data=array(
            'cat'=>$cat,
            'pro'=>$pro
        );
        $this->load->view('admin/update_pro',$data);

    }

    public function delPro(){
        header('Content-Type', 'application/json');
        $_POST = json_decode(trim(file_get_contents('php://input'), 'r'), true);
        $data=array(
          't_proID'=>$_GET['proId']
        );
        $del=$this->product->deleteProduct($data);
        $encode_data = json_encode($del);
        echo $encode_data;
    }
    public function updateProduct(){
        header('Content-Type', 'application/json');
        $_POST = json_decode(trim(file_get_contents('php://input'), 'r'), true);
        $data=array(

            't_catID'=>$_GET['t_catID'],
            't_proBarcode'=>$_GET['t_proBarcode'],
            't_proName'=>$_GET['t_proName'],
            't_proQTY'=>$_GET['t_proQTY'],
            't_proPrice'=>$_GET['t_proPrice'],
            //'t_proDisable'=>'0'
        );
        $where=array(
            't_proID'=>$_GET['t_proID']
        );
        $update=$this->product->updateProduct($data,$where,$_GET['t_proID']);
        $encode_data = json_encode($update);
        echo $encode_data;
    }
    public function InsertProduct(){

        header('Content-Type', 'application/json');
        $_POST = json_decode(trim(file_get_contents('php://input'), 'r'), true);
        $data=array(
            't_catID'=>$_GET['t_catID'],
            't_proBarcode'=>$_GET['t_proBarcode'],
            't_proName'=>$_GET['t_proName'],
            't_proQTY'=>$_GET['t_proQTY'],
            't_proQtyAlert'=>$_GET['t_proQtyAlert'],
            't_proCost'=>$_GET['t_proCost'],
            't_proTax'=>$_GET['t_proTax'],
            't_proPrice'=>$_GET['t_proPrice'],
            't_proDisable'=>'0',
            't_proDes'=>$_GET['t_proDes'],
        );
        $insert=$this->product->saveProduct($data);
        $encode_data = json_encode($insert);
        echo $encode_data;

    }
     public function list_cat(){
         $cat=$this->category->getAll();
         $data=array(
             'cat'=>$cat
         );
        $this->load->view('admin/list_category',$data);
     }
     public function delcategory(){
         header('Content-Type', 'application/json');
         $_POST = json_decode(trim(file_get_contents('php://input'), 'r'), true);
         $data=array(
             't_catID'=>$_GET['catId']
         );
         $del=$this->category->deleteCategory($data);
         $encode_data = json_encode($del);
         echo $encode_data;
     }

     public function add_cat(){
         header('Content-Type', 'application/json');
         $_POST = json_decode(trim(file_get_contents('php://input'), 'r'), true);
         $data=array(
             't_catName'=>$_GET['t_catName']
         );
         $del=$this->category->saveCategory($data);
         $encode_data = json_encode($del);
         echo $encode_data;
     }
     public function update_cate(){
         $cat=$this->category->getAll();
         $data=array(
             'cat'=>$cat
         );
        $this->load->view('admin/list_category',$data);
     }

     public function updateCategory(){
         header('Content-Type', 'application/json');
         $_POST = json_decode(trim(file_get_contents('php://input'), 'r'), true);
         $data=array(
             't_catName'=>$_GET['t_catName']
         );
         $where=array(
             't_catID'=>$_GET['t_catID']
         );
         $insert=$this->category->updateCategory($data,$where);
         $encode_data = json_encode($insert);
         echo $encode_data;
     }

    public function user_list(){
        $user=$this->user->getAllUser();
        $data=array(
            'user'=>$user
        );
        $this->load->view('admin/user_list',$data);
    }
    public function del_user(){
        header('Content-Type', 'application/json');
        $_POST = json_decode(trim(file_get_contents('php://input'), 'r'), true);
        $data=array(
            't_UerID'=>$_GET['userId']
        );
        $del=$this->user->deleteUser($data);
        $encode_data = json_encode($del);
        echo $encode_data;
    }
    public function update_user($userId){
        $user=$this->user->get_userId($userId);
        $data=array(
            'user'=>$user
        );
        $this->load->view('admin/update_user',$data);
    }
    public function upateUser(){
        header('Content-Type', 'application/json');
        $_POST = json_decode(trim(file_get_contents('php://input'), 'r'), true);
        $data=array(

            't_Username'=>$_GET['t_Username'],
            't_Accountname'=>$_GET['t_Accountname'],
            't_Sex'=>$_GET['t_Sex'],
            'u_date'=>$_GET['u_date'],
            'u_month'=>$_GET['u_month'],
            'u_year'=>$_GET['u_year'],

        );
        $where=array(
            't_UerID'=>$_GET['t_UerID']
        );
        $update=$this->user->updateUser($data,$where,$_GET['t_UerID']);
        $encode_data = json_encode($update);
        echo $encode_data;
        
    }
    public function add_user(){
        $this->load->view('admin/add_user');
    }
    public function adduser(){
        header('Content-Type', 'application/json');
        $_POST = json_decode(trim(file_get_contents('php://input'), 'r'), true);
        $data=array(
            't_Username'=>$_GET['t_Username'],
            't_Accountname'=>$_GET['t_Accountname'],
            't_Sex'=>$_GET['t_Sex'],
            'u_date'=>$_GET['u_date'],
            'u_month'=>$_GET['u_month'],
            'u_year'=>$_GET['u_year'],
            't_Remark'=>'1'

        );
        $del=$this->user->saveUser($data);
        $encode_data = json_encode($del);
        echo $encode_data;
    }









}










