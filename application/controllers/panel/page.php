<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends MY_Controller
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
        $this->load->model('M_page');
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

        $data = [
            'aksi'              => '',
            'sub_page_title'    => 'Dashboard',
            'page_title'        => 'Page',
            'url'               => 'panel/page/get_data_page',
            'url1'               => 'panel/page/input_page',
            'url2'               => 'panel/page/input_page_edit',
            'data_user'         => $Auth,
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash(), 

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
            'js'                => ['back/jsphp/page.php',],
        ];
        $this->load->helper('url');
       
        $this->admin($data, 'back/konten/panel/page.php');
    }
    public function tambah()
    {
   
        $username = $this->session->userdata('username');
        $Auth = $this->M_login->login($username);
        if(!$Auth){
            redirect('gate/login');
        }

        $data = [
            'aksi'              => '',
            'sub_page_title'    => 'Dashboard',
            'page_title'        => 'Page',
            'url'               => 'panel/page/get_data_page',
            'url1'               => 'panel/page/input_page',
            'url2'               => 'panel/page/input_page_edit',
            'data_user'         => $Auth,
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash(), 

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
            'js'                => ['back/jsphp/page.php',],
        ];
        $this->load->helper('url');
       
        $this->admin($data, 'back/konten/panel/tambah_page.php');
    }
    public function edit()
    {
   
        $username = $this->session->userdata('username');
        $Auth = $this->M_login->login($username);
        if(!$Auth){
            redirect('gate/login');
        }
        $id = $this->uri->segment(4);
        $tabel="em_page";
        $nama_id="id";

        $data_page = $this->M_crud->get_data_by_id($tabel,$nama_id,$id);
        $data = [
            'aksi'              => '',
            'sub_page_title'    => 'Dashboard',
            'page_title'        => 'Page',
            'url'               => 'panel/page/get_data_page',
            'url1'               => 'panel/page/input_page',
            'url2'               => 'panel/page/input_page_edit',
            'data_user'         => $Auth,
            'data_page'         => $data_page,
            'csrf_name' => $this->security->get_csrf_token_name(),
            'csrf_hash' => $this->security->get_csrf_hash(), 

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
            'js'                => ['back/jsphp/page.php',],
        ];
        $this->load->helper('url');
       
        $this->admin($data, 'back/konten/panel/edit_page.php');
    }
    function get_data_page()
    {
        $csrf_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();  
        $list = $this->M_page->get_datatables();
        // var_dump($list);
        // die;
        $data = array();
        $no = $_POST['start'];
        $tabel="user";
        $user = $this->M_crud->get_data_user($tabel);
        foreach ($list as $field) {
            $waktu=$field->created_at;
            $time = strtotime($waktu);
            $newformat = date('d-m-Y',$time);
            $jam =date('H:i' ,$time);
            $no++;
            foreach($user as $u){
                if($field->created_by == $u->id_user ) {
                    $pembuat = $u->nama_user;
                      } }
            $row = array();
            $row[] = $no;
            $row[] = $field->judul;
            $row[] = $field->slug;
            $row[] = $pembuat. " pada tanggal ". $newformat." Pukul ".$jam;
            $aksi = '<span style="overflow: visible; position: relative; width: 125px;">
          
            <a href="'.base_url() .'page/'.$field->slug.'" id="view"  class="btn btn-sm btn-clean btn-icon mr-2" title="view details">
            <span class="svg-icon svg-icon-md">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <rect x="0" y="0" width="24" height="24"/>
                <path d="M3,12 C3,12 5.45454545,6 12,6 C16.9090909,6 21,12 21,12 C21,12 16.9090909,18 12,18 C5.45454545,18 3,12 3,12 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                <path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" opacity="0.3"/>
            </g>                                
                </svg>	                            
            </span>							
        </a>      
            <a href="'. base_url() .'panel/page/edit/'.$field->id.' " id="edit"   class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
                <span class="svg-icon svg-icon-md">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">	                                        
                            <rect x="0" y="0" width="24" height="24"></rect>	                                        
                            <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>	                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>	                                    
                        </g>	                                
                    </svg>	                            
                </span>							
            </a>							
            <a onClick="hapus('.$field->id.');" class="btn btn-sm btn-clean btn-icon" title="Delete">	                            
                <span class="svg-icon svg-icon-md">	                                
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">	                                    
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">	                                        
                            <rect x="0" y="0" width="24" height="24"></rect>	                                        
                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>	                                        
                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>	                                    
                    </g>	                                
                </svg>	                            
            </span>							
        </a>
        

        </span>';
            $row[] = $aksi;
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_page->count_all(),
            "recordsFiltered" => $this->M_page->count_filtered(),
            "data" => $data,
            "" . $this->security->get_csrf_token_name() . "" => $this->security->get_csrf_hash()
        );
        //output dalam format JSON
        $output[$csrf_name] = $csrf_hash; 
        //output to json format
        echo json_encode($output);
    }

    function input_page(){

        $csrf_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();  
        $timestamp = date("Y-m-d H:i:s");
        $id_user = $this->session->userdata('id_user');
        $nama_id='id';
        $tabel='em_page'; 

        $config['upload_path']          = './galery';
        $config['allowed_types']        = 'gif|jpg|png|pdf';

        // $config['overwrite']			= true;
        $config['max_size']             = 3072; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        
        $this->load->library('upload', $config);
        if($this->upload->do_upload("foto")){
            $data1 = array('upload_data' => $this->upload->data());
    
    
        
            $file_in= $data1['upload_data']['file_name'];
            $judul = $this->input->post('judul');
            $slug =url_title($judul, 'dash', true);
            $data= array (

                'featur_image'=>$file_in,
                'judul'=> $judul,
                'slug'=>  $slug,
                'konten'=> $this->input->post('konten'),
                'created_by'=>$id_user
            );
       
            $update1 = $this->M_crud->create_data($tabel,$data);
            if($update1){
            $array = array(
                'success' => '<div class="alert alert-success">Data Baru berhasil di inputkan</div>',
                'token_emot'=>$this->security->get_csrf_hash(),
            );
                echo json_encode($array);
             };
     
        }else{
            $array = array(
                'error' => '<div class="alert alert-success">Data di inputkan Kurang</div>',
                'token_emot'=>$this->security->get_csrf_hash(),
            );
                echo json_encode($array);
             };
        
    }
    public function hapus()
    {   
        $csrf_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();  
        $timestamp = date("Y-m-d H:i:s");
        $id_user = $this->session->userdata('id');
        $id = $this->uri->segment(4);
        $nama_id='id';
        $tabel='em_page'; 

            $data= array (
                'is_del' =>1,
                'updated_at'=>$timestamp,
                'updated_by'=>$id_user,
            );

      
            
            $update1 = $this->M_crud->edit_data_by_id($tabel,$data,$nama_id,$id);
            if($update1){
            $array = array(
                'success' => '<div class="alert alert-success">Data Toko Baru berhasil di inputkan</div>',
                'token_emot'=>$this->security->get_csrf_hash(),
            );
                echo json_encode($array);
             };
     
    }
   
    public function get_id_page()
    {
        // id yang telah diparsing pada ajax ajaxcrud.php data{id:id}
        
        $id = $this->input->post('id');
		$tabel="em_page";
        $nama_id="id";

        $data = $this->M_crud->get_data_by_id($tabel,$nama_id,$id);
       
        $output = array(

            "data" => $data,
            "" . $this->security->get_csrf_token_name() . "" => $this->security->get_csrf_hash()
        );
        //output to json format
        echo json_encode($output);
		
    }
    function input_page_edit(){

        $csrf_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();  
        $timestamp = date("Y-m-d H:i:s");
     
        $id_user = $this->session->userdata('id');
        $nama_id='id';
        $tabel='em_page'; 

        $config['upload_path']          = './galery';
        $config['allowed_types']        = 'gif|jpg|png|pdf';

        // $config['overwrite']			= true;
        $config['max_size']             = 3072; // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $slug =url_title($judul, 'dash', true);
        $this->load->library('upload', $config);
        if($this->upload->do_upload("foto")){
            $data1 = array('upload_data' => $this->upload->data());

            $file_in= $data1['upload_data']['file_name'];
        
                $data= array (

                    'featur_image'=>$file_in,
                    'judul'=> $judul,
                  
                    'konten'=> $this->input->post('konten'),
                    'updated_by'=>$id_user,
                    'updated_at'=>$timestamp
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

                    'judul'=> $judul,
                   
                    'konten'=> $this->input->post('konten'),
                    'updated_by'=>$id_user,
                    'updated_at'=>$timestamp
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
