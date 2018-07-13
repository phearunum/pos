<?php
class Category_Model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function getAll(){
        $sql="select * from tbl_category";
        $query=$this->db->query($sql);
        if($query){
            return $query->result();
        }else{
            return false;
        }
    }
    public function getAllbyId($catId){
        $sql="select * from tbl_category where t_catID='$catId'";
        $query=$this->db->query($sql);
        if($query){
            return $query->result();
        }else{
            return false;
        }
    }
    public function deleteCategory($pro=array()){
        $this->db->where($pro);
        $del=$this->db->delete('tbl_category');
        return $del;
    }


    public function updateCategory($pro=array(),$where=array()){
        $this->db->update('tbl_category',$pro, $where);
    }
    public function saveCategory($pro=array()){
        //Insert Data Query
        $this->db->insert('tbl_category',$pro);
        $id = $this->db->insert_id();
        $data=$this->getAllbyId($id);
        return $data;
    }

}