<?php
 
class M_login extends CI_Model {
 
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    public function login($username)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username',$username);
        $query = $this->db->get();
        return $query->result();
    }
    public function log($data)
    {
        $query= $this->db->insert('user_log',$data);
        if($query){
            return true;
            return $query;
        }else{
            return false;
        }
    }
    public function last_log($ip,$username)
    {
        $this->db->where('username',$username);
        $this->db->where('ip',$ip);
        $this->db->order_by('id', 'desc');
        $this->db->limit(3); 
        $query = $this->db->get('user_log');
        return $query->result();
        
      
    }

    public function block($username)
    {
        $set=[
            'is_block'=>'1'
        ];
        $this->db->where('username',$username);
		return $this->db->update('user',$set );
        
    }
    public function ganti_pass($data,$username)
    {
       
        $this->db->where('username',$username);
		$this->db->update('user',$data );
        if($this->db->affected_rows() >0){
            return true; //add your code here
          }else{
            return false; //add your your code here
          }
    }

    public function checkusername_exists_klien($username){
        $query = $this->db->get_where('user', array('usename' => $username));
        if(empty($query->row_array())){
        return true;
        } else {
        return false;
        }
    }
 
}