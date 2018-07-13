<?php

class Product_Model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getProduct(){
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.t_catID = tbl_product.t_catID');
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
    public function getProductById($proID){
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.t_catID = tbl_product.t_catID');
        $this->db->where(' tbl_product.t_proID',$proID);
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
    public function deleteProduct($pro=array()){
        $this->db->where($pro);
        $del=$this->db->delete('tbl_product');
        return $del;
    }
    public function updateProduct($pro=array(),$where=array(),$pId){

        $update=$this->db->update('tbl_product',$pro, $where);

        $data=$this->getProductById($pId);
        if($update){
           return $data;
        }
    }
    public function saveProduct($pro=array()){
        //Insert Data Query
        $this->db->insert('tbl_product',$pro);
        $id = $this->db->insert_id();
        $data=$this->getProductById($id);
        return $data;
    }
    public function getProductByCatId($catID){
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->join('tbl_category', 'tbl_category.t_catID = tbl_product.t_catID');
        $this->db->where(' tbl_product.t_catID',$catID);
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

    public function getProductDetail($invID){
        $this->db->select('*');
        $this->db->from('tbl_invoive');
        $this->db->join('tbl_invoicedetail', 'tbl_invoicedetail.t_InvID = tbl_invoive.t_InvID');
        $this->db->join('tbl_product', 'tbl_product.t_proID = tbl_invoicedetail.t_proID');
        $this->db->where(' tbl_invoive.t_InvID',$invID);
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












}
