<?php


class Order_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getOrderDetail_ByInvID($invId){
        $sql="select * from tbl_invoicedetail as dt
              INNER JOIN tbl_invoive as inv 
              ON dt.t_InvID=inv.t_InvID
              INNER JOIN tbl_product as p 
              ON dt.t_proID=p.t_proID
              WHERE inv.t_InvID='$invId' ";
        $query=$this->db->query($sql);
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }



    public function createCustomer($data=array()){
        $this->db->insert('tbl_customer',$data);
        $id = $this->db->insert_id();
        //$data=$this->getOrderDetail_ByInvID($id);
        return $id;

    }


    public function getInv($inv){
       $sql="SELECT *
                FROM tbl_invoive
                WHERE t_UserID = '$inv'
                AND status = 'order'";
                $query=$this->db->query($sql);
                if($query->num_rows()>0){
                    return $query->result();
                }else{
                    return false;
                }
    }

    public function createInvoice($data=array()){
        $this->db->insert('tbl_invoive',$data);
        $id = $this->db->insert_id();
        $data=$this->getOrderDetail_ByInvID($id);
        return $data;
    }

    public function getAllOrderIn_Temp_Order(){
        $sql="select * from order_temp as temp
              INNER JOIN tbl_product as p 
              ON temp.temp_proID=p.t_proID
             ";
        $query=$this->db->query($sql);
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function order($data=array()){


        $this->db->insert('tbl_invoicedetail',$data);
        $id = $this->db->insert_id();
        $data=$this->getOrderDetail_ByInvID('7');
        return $data;
    }
    public function Temp_order($data=array()){
        foreach ($data as $d ){
            $proId[]=$d['temp_proID'];
        }

        echo $proId;
        exit();
        $sql="select * from order_temp where temp_proID='$proId'";
        $query=$this->db->query($sql);
        if($query->num_rows()>0){
            $sql="update order_temp set temp_Qty=2  WHERE temp_proID='32'";
            $query=$this->db->query($sql);
            //$update=$this->db->update('order_temp','temp_Qty=>2','temp_proID=>32');
        }else{
            $this->db->insert('order_temp',$data);
            $id = $this->db->insert_id();
        }
        $data=$this->getAllOrderIn_Temp_Order();
        return $data;
    }
     public function Temp_Oreder_Total(){

         $this->db->select('SUM(temp_Price) as total');
         $this->db->from('order_temp');
         $advance = $this->db->get();
         if ($advance->num_rows() > 0) {
             return $advance->row();
         } else {
             return FALSE;
         }
     }


    public function delOrder($data=array()){
        $this->db->where($data);
        $del=$this->db->delete('order_temp');
        return $del;
    }

    public function getTopInvoice(){
       $sql="SELECT * FROM tbl_invoive ORDER BY t_InvID DESC Limit 1";
        $query=$this->db->query($sql);
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }



}





















