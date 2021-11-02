<?php
 
class M_statistik extends CI_Model {
    
    public function jumlah_pengunjung($tabel,$bulan)
    {
        $query=$this->db->from($tabel)
              ->WHERE('MONTH(time) ='.$bulan) 
            ->count_all_results() ;
            
            return $query;
    }
    public function insert_log($tabel,$data){
        $query= $this->db->insert($tabel,$data);
        if($query){
           
            return $query;
        }else{
            return $query;
        }
    }
    public function jumlah_kunjungan($tabel)
    {   
        $this->db->select('*');
        $this->db->from($tabel);
        $query = $this->db->get();
        return $query->num_rows();
    }
    // public function setujui_pesanan($tabel,$bulan)
    // {
    //     $query=$this->db->from($tabel)
    //     ->WHERE('MONTH(created_at) ='.$bulan)
    //     ->WHERE("(status_pengajuan = '10' || status_pengajuan = '11'|| status_pengajuan = '12' ||  status_pengajuan = '4')")
    //     ->count_all_results() ;
    //     return $query;
            
    // }
    // public function proses_admin($tabel){
    //     $query=$this->db->from($tabel)
    //     ->WHERE("status_pengajuan = '0'")
    //     ->OR_WHERE("status_pengajuan = '1'") 
    //     ->OR_WHERE("status_pengajuan = '2'")
    //     ->OR_WHERE("status_pengajuan = '3'")
          
    //     ->count_all_results() ;
    //     return $query;
    // }

}