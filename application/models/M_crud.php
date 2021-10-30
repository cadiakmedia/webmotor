<?php
 
class M_crud extends CI_Model {
 

 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_data($tabel)
    {
        
        $this->db->select('*');
        $this->db->from($tabel);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_data_user($tabel)
    {
        
        $this->db->select('id_user,nama_user');
        $this->db->from($tabel);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_data_not_del_status($tabel)
    {
        
        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->where('is_del', '0');
        $this->db->where('status', '1');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_data_not_del($tabel)
    {
        
        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->where('is_del', '0');
        $query = $this->db->get();
        return $query->result();
    }
 
    public function get_data_by_slug($tabel,$nama_slug, $slug)
    {
        
        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->where($nama_slug, $slug);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_data_pop($tabel,$pop)
    {
        
        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->order_by($pop,"desc");
        $this->db->limit(3, 0);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function get_data_by_id($tabel,$nama_id, $id)
    {
        
        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->where($nama_id, $id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function get_data_by_id_array($tabel,$nama_id, $id)
    {
        
        $this->db->select('*');
        $this->db->from($tabel);
        $this->db->where($nama_id, $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function create_data($tabel,$data){
        $query= $this->db->insert($tabel,$data);
        if($query){
            return true;
            return $query;
        }else{
            return false;
        }
    }
    
    public function hapus_data_by_id($tabel,$nama_id,$id)
    {
        $del=[
            "is_del" => '1'
        ];
        $this->db->where($nama_id,$id);
        return $this->db->update($tabel,$del);
    }
    
    public function hard_del($tabel,$nama_id,$id)
    {
        $this->db->where($nama_id,$id);
        return $this->db->delete($tabel);
    }
    public function edit_data_by_id($tabel,$data,$nama_id,$id){
        $this->db->where($nama_id,$id);
		return $this->db->update($tabel,$data);
    }
    public function edit_data_by_id_click($tabel,$nama_id,$id){
        $this->db->where($nama_id, $id);
        $this->db->set('clicked', 'clicked+1', FALSE);
        $this->db->update($tabel);
    }
    public function edit_data_by_id_2($tabel,$data,$nama_id1,$nama_id2,$id1,$id2){
        $this->db->where($nama_id1,$id1);
        $this->db->where($nama_id2,$id2);
		return $this->db->update($tabel,$data);
    }
    
    
}