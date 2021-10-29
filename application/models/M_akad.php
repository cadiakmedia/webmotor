<?php
 
class M_akad extends CI_Model {
 
    var $table = 'em_akad'; //nama tabel dari database
    var $column_order = array(null,null, 'judul','slug','konten',null); //field yang ada di table user
    var $column_search = array('judul','slug','konten'); //field yang diizin untuk pencarian 
    var $order = array('id' => 'desc'); // default order 
 
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
 
    private function _get_datatables_query()
    {
        $del=[
            'is_del' => '0',
   
            
        ];
        $select = array(
            '*',
            
         );

        $this->db->select($select);
        $this->db->from('em_akad');
        $this->db->where($del);
 
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

 
    public function data_foto($id)
    {
        $this->db->select('*');
        $this->db->from('em_foto');
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
    public function data_akad_and_foto()
    {
        $select = array(
            'em_akad.*',
      
            'em_foto_akad.foto'
        
          
        );
        $this->db->select('*');
        $this->db->from('em_akad');
        $this->db->join('em_akad_foto', 'em_aakad_foto.id_akad = em_akad.id','left');
        $query = $this->db->get();
        return $query->result();
    }
    

 
}