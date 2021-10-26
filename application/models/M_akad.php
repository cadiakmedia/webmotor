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
    
    
    // public function data_artikel()
    // {
    //     $del=[
    //         'a.is_del' => '0',
   
            
    //     ];
    //     $select = array(
    //         'a.*',
      
    //         'b.nama_kategori as nama_kategori',
    //         'b.id_kategori',
    //         'c.nama_user as nama_pengarang'
          
    //     );

    //     $this->db->select($select);
    //     $this->db->from('artikel a');
    //     $this->db->where($del);
    //     $this->db->join('kategori b', 'a.fk_id_kategori = b.id_kategori', 'left');
    //     $this->db->join('user c', 'a.created_by = c.id_user', 'left');
    //     $this->db->order_by('id_artikel', 'desc');
    //     $query = $this->db->get();
    //     return $query->result();
    // }  
    // public function data_artikel_beranda()
    // {
    //     $del=[
    //         'a.is_del' => '0',
   
            
    //     ];
    //     $select = array(
    //         'a.*',
      
    //         'b.nama_kategori as nama_kategori',
    //         'b.id_kategori',
    //         'c.nama_user as nama_pengarang'
          
    //     );

    //     $this->db->select($select);
    //     $this->db->from('artikel a');
    //     $this->db->where($del);
    //     $this->db->join('kategori b', 'a.fk_id_kategori = b.id_kategori', 'left');
    //     $this->db->join('user c', 'a.created_by = c.id_user', 'left');
    //     $this->db->order_by('id_artikel', 'desc');
    //     $this->db->limit('6');
    //     $query = $this->db->get();
    //     return $query->result();
    // }    
    // public function data_artikel_by_id($id)
    // {
    //     $del=[
    //         'a.is_del' => '0',
    //         'a.fk_id_kategori'=>$id
            
    //     ];
    //     $select = array(
    //         'a.*',
      
    //         'b.nama_kategori as nama_kategori',
    //         'b.id_kategori',
    //         'c.nama_user as nama_pengarang'
          
    //     );

    //     $this->db->select($select);
    //     $this->db->from('artikel a');
    //     $this->db->where($del);
    //     $this->db->join('kategori b', 'a.fk_id_kategori = b.id_kategori');
    //     $this->db->join('user c', 'a.created_by = c.id_user');
    //     $this->db->order_by('id_artikel', 'desc');
    //     $query = $this->db->get();
    //     return $query->result();
    // }  
    // function jumlah_data(){
	// 	return $this->db->get('artikel')->num_rows();
	// }
    // function jumlah_data_by_slug($slug){
    //     $this->db->where('slug_kategori',$slug);
    //     $this->db->join('kategori', 'fk_id_kategori = id_kategori');
	// 	return $this->db->get('artikel')->num_rows();
	// }
    // public function data_artikel_page($number,$offset)
    // {
    //     $del=[
    //         'a.is_del' => '0',
   
            
    //     ];
    //     $select = array(
    //         'a.*',
      
    //         'b.nama_kategori as nama_kategori',
    //         'b.id_kategori',
    //         'c.nama_user as nama_pengarang'
          
    //     );

    //     $this->db->select($select);
    //     $this->db->from('artikel a');
    //     $this->db->where($del);
    //     $this->db->join('kategori b', 'a.fk_id_kategori = b.id_kategori');
    //     $this->db->join('user c', 'a.created_by = c.id_user');
    //     $this->db->order_by('id_artikel', 'desc');
    //     $this->db->limit($number,$offset); 
    //     $query = $this->db->get();
    //     return $query->result();
    // } 
    // public function data_artikel_page_id($number,$offset,$slug_kategori)
    // {
    //     $del=[
    //         'a.is_del' => '0',
    //         'b.slug_kategori'=>$slug_kategori
            
    //     ];
    //     $select = array(
    //         'a.*',
      
    //         'b.nama_kategori as nama_kategori',
    //         'b.id_kategori',
    //         'b.slug_kategori',
    //         'c.nama_user as nama_pengarang'
            
    //     );

    //     $this->db->select($select);
    //     $this->db->from('artikel a');
    //     $this->db->where($del);
    //     $this->db->join('kategori b', 'a.fk_id_kategori = b.id_kategori', 'left');
    //     $this->db->join('user c', 'a.created_by = c.id_user', 'left');
    //     $this->db->order_by('id_artikel', 'desc');
    //     $this->db->limit($number,$offset); 
    //     $query = $this->db->get();
    //     return $query->result();
    // } 
    // function search($search){
    //     $this->db->select("*");
    //     $this->db->like($search);
    //     $this->db->from('artikel');
    //     $query = $this->db->get();
    //     return $query->result();
    // }
 
}