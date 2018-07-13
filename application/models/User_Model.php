<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_Model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function userLogin($acc,$pwd){
      $sql="select * from tbl_User WHERE t_Accountname='$acc' AND t_Password='$pwd'";
      $query=$this->db->query($sql);
      if($query->num_rows()==1){
          return true;
      }else{
       return false;
      }
    }
    public function get_userById($id){
        $sql="select * from tbl_User WHERE t_Accountname='$id' ";
        $query=$this->db->query($sql);
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
    }
    public function get_userId($id){
        $sql="select * from tbl_User WHERE t_UerID='$id' ";
        $query=$this->db->query($sql);
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }
    }
    public function getAllUser(){
        $this->db->select('*');
        $this->db->from('tbl_user');
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
    public function deleteUser($pro=array()){
        $this->db->where($pro);
        $del=$this->db->delete('tbl_user');
        return $del;
    }
    public function updateUser($pro=array(),$where=array(),$pId){
        $update=$this->db->update('tbl_user',$pro, $where);

        $data=$this->get_userId($pId);
        if($update){
            return $data;
        }
    }
    public function saveUser($pro=array()){
        //Insert Data Query
        $this->db->insert('tbl_user',$pro);
        $id = $this->db->insert_id();
        $data=$this->get_userId($id);
        return $data;
    }




}
