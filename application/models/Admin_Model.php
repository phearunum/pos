<?php
 class Admin_Model extends CI_Model{
     public function __construct()
     {
         parent::__construct();
         $this->load->database();
     }

     public function AdminLogin($data=array()){
        $this->db->select('*');
        $query = $this->db->get_where('tbl_user',$data);
        $result = $query->result();
        $count = count($result);
        if(empty($count)){
            return false;
        }
        else{
            return $result;
        }
     }
     public function GetAdmin($Id){
         $array = array('t_UerID' => $Id);
         $this->db->where($array);
         $this->db->select('*');
         $query = $this->db->get_where('tbl_user',$array);
         $result = $query->result_array();
         $count = count($result);
         if(empty($count)){
             return false;
         }
         else{
             return $result;
         }
     }

 }















