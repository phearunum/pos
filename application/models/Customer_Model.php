<?php
class Customer_Model extends  CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index(){
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $query = $this->db->get();
        $result = $query->result();
        $count = count($result);
        if(empty($count)){
            return false;
        }
        else{
            return $result;
        }
    }

    public function CreateCustomer($data=array()){

    }
}