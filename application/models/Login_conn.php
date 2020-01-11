<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_conn extends CI_Model {
    public function verification($value)
    {
        $query = $this->db->get_where('login_data', array('user_id'=>$value['uname']), 1); 
        return  $query->row();
    }
    public function input($value)
    {
        $data = array(
            'train_no' => $value['tno'],
            'date' => $value['date'],
            'from_f' => $value['from'],
            'to_t' => $value['to'],
            'dep' => $value['dept'],
            'arrival' => $value['arrt'],
            'object' => $value['ojj'],
            'km' => $value['kms'],
            'remark' => $value['remark']
    );
    
    $this->db->insert('surendra', $data);
    }
    public function rview()
    {
        $query = $this->db->order_by('id', 'DESC')
                            ->limit(5)
                            ->get('surendra');
        return $query->result();    
    }
    public function delete($id)
    {
        $this->db->delete('surendra', array('id' => $id));
    }
    public function signup($data)
    {
        $this->db->insert('login_data', $data);
    }
    public function sview()
    {
        $query=$this->db->order_by('id','DESC')
                        ->limit(5)
                        ->get('login_data');
        return $query->result();
    }
    public function delete1($id)
    {
        $this->db->delete('login_data',array('id' => $id));
    }
    public function acquiring($value3)
    {
        $query = $this->db->query("SELECT * FROM `surendra` WHERE `date`>='$value3[dfrom]' AND `date`<='$value3[dto]'");
        return $query->result();
        
    }
    public function distance($value4)
    {
        $data1=array(
            'station'=>$value4['stat'],
            'km'=>$value4['kmm']
        );
        if(isset($value4['stat']))
        {
            if(isset($value4['kmm'])){
        $this->db->insert('distance',$data1);}}
    }
}
?>
