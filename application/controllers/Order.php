<?php


class Order extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->Model('User_Model','user');
        $this->load->Model('Category_Model','category');
        $this->load->model('Product_Model','product');
        $this->load->model('Customer_Model','customer');
        $this->load->model('Order_Model','order');
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library(array('session'));
    }
     public function createInvoice($id){

     }

     public function createUser(){
         $data=array(
             't_cusName'=>$this->input->post('t_cusName'),
             'cus_Type'=>$this->input->post('cus_Type'),
             't_cusEmail'=>$this->input->post('t_cusEmail'),
             't_cusActive'=>'1'
         );
         $create=$this->order->createCustomer($data);
         $inv=array(
            't_UserID'=>$create
         );

         $createInv=$this->order->createInvoice($inv);

     }
      public function delOrder(){
          header('Content-Type', 'application/json');
          $_POST = json_decode(trim(file_get_contents('php://input'), 'r'), true);
          $data=array(
              'temp_proID'=>$_GET['delId']
          );
          var_dump($data);
          $del=$this->order->delOrder($data);
          $encode_data = json_encode($del);
          echo $encode_data;
      }
}