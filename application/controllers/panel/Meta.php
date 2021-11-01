<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Meta extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper(array('form','url'));
        $this->load->database();
        $this->load->library('datatables');

        $this->load->model('M_login');
        $this->load->model('M_crud');
        $this->load->model('M_foto');
        $this->load->helper('form');
        $this->load->library('session');
    }
   

    public function index()
    {
   
        $username = $this->session->userdata('username');
        $Auth = $this->M_login->login($username);
        if(!$Auth){
            redirect('gate/login');
        }
        $tabel ='em_meta';
        $meta = $this->M_crud->get_data($tabel);
        $data = [
            'aksi'              => '',
            'sub_page_title'    => 'Dashboard',
            'page_title'        => 'Panel',
        
            'url1'               => 'panel/meta/input_edit',
            'data_user'         => $Auth,
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash(), 
            'meta'  => $meta,

            'breadcrumbs'       => [
                [
                    'href'  => '#',
                    'label' => 'Panel',
                ],
                [
                    'href'  => '#',
                    'label' => 'Dashboard',
                ]
            ],
            'reload'            => 'reload();',
            'css_lib'           => [
                'assets/dist/assets/plugins/custom/datatables/datatables.bundle.css'
            ],
            'css_cdn'           => [
                'https://fonts.googleapis.com/icon?family=Material+Icons',
                
                
            ],
            'js_lib'            => [
                'assets/dist/assets/plugins/custom/datatables/datatables.bundle.js','assets/dist/assets/js/pages/crud/datatables/basic/basic.js','assets/dist/assets/js/pages/crud/datatables/basic/basic.js'
                


            ],
            'js'                => ['back/jsphp/meta.php',],
        ];
        $this->load->helper('url');
       
        $this->admin($data, 'back/konten/panel/meta.php');
    }
  
    function input_edit(){

        $csrf_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();  
        $timestamp = date("Y-m-d H:i:s");

        $id = $this->input->post('id');
        $nama_id='id';
        $tabel='em_meta'; 

        $config['upload_path']          = './galery';
        $config['allowed_types']        = 'gif|jpg|png|pdf';

        // $config['overwrite']			= true;
        $config['max_size']             = 3072; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        
        $this->load->library('upload', $config);
        if($this->upload->do_upload("foto_edit")){  
            $data1 = array('upload_data' => $this->upload->data());

            $file_in= $data1['upload_data']['file_name'];
        
                $data= array (

                    'meta_foto'=>$file_in,
                    'meta_deskripsi'=> $this->input->post('meta_deskripsi'),
                    'meta_keyword'=> $this->input->post('meta_keyword'),
                    // 'updated_by'=>$id_user,
                    // 'updated_at'=>$timestamp
                );
          
                // $data= array (

                //     'judul'=> $this->input->post('judul_edit'),
                //     'updated_by'=>$id_user,
                //     'updated_at'=>$timestamp
                // );
         
        
            $update1 = $this->M_crud->edit_data_by_id($tabel,$data,$nama_id,$id);
            
            if($update1){
            $array = array(
                'success' => '<div class="alert alert-success">Data Baru berhasil di inputkan</div>',
                'token_emot'=>$this->security->get_csrf_hash(),
            );
                echo json_encode($array);
             };
     
        }else {
          
        
                // $data= array (

                //     'foto'=>$file_in,
                //     'judul'=> $this->input->post('judul_edit'),
                //     'updated_by'=>$id_user,
                //     'updated_at'=>$timestamp
                // );
          
                $data= array (

                    'meta_deskripsi'=> $this->input->post('meta_deskripsi'),
                    'meta_keyword'=> $this->input->post('meta_keyword'),
                );
         
        
            $update1 = $this->M_crud->edit_data_by_id($tabel,$data,$nama_id,$id);
            
            if($update1){
            $array = array(
                'success' => '<div class="alert alert-success">Data Baru berhasil di inputkan</div>',
                'token_emot'=>$this->security->get_csrf_hash(),
            );
                echo json_encode($array);
             };
        }
    }
    

      
}
