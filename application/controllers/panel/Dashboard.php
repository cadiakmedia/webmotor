<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper(array('url'));
        $this->load->database();
        $this->load->library('datatables');

        $this->load->model('M_login');
        // $this->load->model('M_crud');
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
            'page_title'        => 'Panel',
            'url'               => 'panel/dashboard/get_data_artikel',
            'data_user'         => $Auth,
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
            'js'                => ['back/jsphp/dashboard.php',],
        ];
        $this->load->helper('url');
       
        $this->admin($data, 'back/konten/panel/dashboard.php');
    }
    // function get_data_artikel()
    // {
    //     $list = $this->M_artikel->get_datatables();
    //     // var_dump($list);
    //     // die;
    //     $data = array();
    //     $no = $_POST['start'];
    //     foreach ($list as $field) {
    //         $no++;
    //         $waktu=$field->created_at;
    //         $time = strtotime($waktu);
    //         $newformat = date('d-m-Y',$time);
    //         $jam =date('H:i' ,$time);
    //         $row = array();
    //         $row[] = $no;
    //         $row[] = $field->judul_artikel;
    //         $row[] = $field->nama_kategori;
    //         $row[] = $field->created_by. " pada tanggal ". $newformat." Pukul ".$jam;
    //         $aksi = "
    //         <div class='btn-group' role='group'>
    //             <button id='btnGroupDrop1' type='button' class='btn btn-light font-weight-bold dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
    //             <i class='fa fa-caret-down' aria-hidden='true'></i>

    //             </button>
    //             <div class='dropdown-menu' aria-labelledby='btnGroupDrop1'>
    //                 <a class='dropdown-item' href='dashboard/data_artikel_lengkap/$field->slug_artikel'><i class='fa fa-eye fa-fw'></i> Lihat</a>
    //                 <a class='dropdown-item' href='dashboard/edit_artikel/$field->slug_artikel'><i class='fa fa-edit fa-fw'></i>  Edit</a>
    //                 <a class='dropdown-item' href='dashboard/hapus_artikel/$field->id_artikel'><i class='fa fa-trash fa-fw' aria-hidden='true'></i>  Hapus</a>
    //             </div>
    //         </div>

    //         ";
    //         $row[] = $aksi;
 
    //         $data[] = $row;
    //     }
 
    //     $output = array(
    //         "draw" => $_POST['draw'],
    //         "recordsTotal" => $this->M_artikel->count_all(),
    //         "recordsFiltered" => $this->M_artikel->count_filtered(),
    //         "data" => $data,
    //     );
    //     //output dalam format JSON
    //     echo json_encode($output);
    // }
    // function data_artikel_lengkap()
    // {   
    //     $slug = $this->uri->segment(4);
    //     $tabel='artikel';
    //     $nama_slug ='slug_artikel';
    //     $data1 = $this->M_crud->get_data_by_slug($tabel,$nama_slug,$slug);
        
    //     $username = $this->session->userdata('username');
    //     $Auth = $this->M_login->login($username);
    //     if(!$Auth){
    //         redirect('gate/login');
    //     }
    //     $data = [
    //         'aksi'              => '',
    //         'sub_page_title'    => 'Artikel',
    //         'page_title'        => 'Panel',
    //         'data_artikel'      => $data1,
    //         'data_user'         =>$Auth,
    //         'breadcrumbs'       => [
    //             [
    //                 'href'  => '#',
    //                 'label' => 'Panel',
    //             ],
    //             [
    //                 'href'  => '#',
    //                 'label' => 'Dashboard',
    //             ]
    //         ],
    //         'reload'            => 'reload();',
    //         'css_lib'           => [
    //             ''
    //         ],
    //         'css_cdn'           => [
    //             'https://fonts.googleapis.com/icon?family=Material+Icons'
    //         ],
    //         'js_lib'            => [
    //             ''


    //         ],
    //         'js'                => ['back/jsphp/dashboard.php'],
    //     ];
        
    //     $this->load->helper('url');
         
    //     // $result = array_merge($data,$data1);
       
    //     $this->front($data ,'back/konten/panel/artikel.php');
    // }
    // function tambah_artikel()
    // {
    //     $data1 = $this->M_kategori->get_data_kategori();
        
    //     $username = $this->session->userdata('username');
    //     $Auth = $this->M_login->login($username);
    //     if(!$Auth){
    //         redirect('gate/login');
    //     }
    //     $data = [
    //         'aksi'              => '',
    //         'sub_page_title'    => 'Artikel',
    //         'page_title'        => 'Panel',
    //         'data_kategori'     =>$data1,
    //         'data_user'         =>$Auth,
    //         'breadcrumbs'       => [
    //             [
    //                 'href'  => '#',
    //                 'label' => 'Panel',
    //             ],
    //             [
    //                 'href'  => '#',
    //                 'label' => 'Dashboard',
    //             ]
    //         ],
    //         'reload'            => 'reload();',
    //         'css_lib'           => [
    //             ''
    //         ],
    //         'css_cdn'           => [
    //             'https://fonts.googleapis.com/icon?family=Material+Icons'
    //         ],
    //         'js_lib'            => [
    //             'source/lib/chart.js/Chart.bundle.min.js'


    //         ],
    //         'js'                => ['back/jsphp/dashboard.php'],
    //     ];
    //     $this->load->helper('url');
    //     $this->admin($data,'back/konten/panel/tambah_artikel.php');
    // }
    // function simpan_artikel()
    // {
    //     $config['upload_path']          = './public/foto';
    //     $config['allowed_types']        = 'gif|jpg|png';

    //     // $config['overwrite']			= true;
    //     $config['max_size']             = 3072; // 1MB
    //     // $config['max_width']            = 1024;
    //     // $config['max_height']           = 768;
        
    //     $this->load->library('upload', $config);
        
    //     if($this->upload->do_upload("foto_artikel")){
    //     // $data1 = array('upload_data' => $this->upload->data());
    //         $file= $this->upload->data('file_name');
    //     }else{
    //         echo $this->upload->display_errors();
    //     }
    
        
    //         $judul=$this->input->post('judul_artikel');
    //         $slug = url_title($judul, 'dash', true);
    //         $user =  $this->session->userdata('id_user');
         
    //         $data = [
    //             'judul_artikel' => $judul,
    //             'slug_artikel' => $slug,
    //             'created_by'=>$user,
    //             'konten_artikel'=>$this->input->post('konten_artikel'),
    //             'fk_id_kategori' => $this->input->post('fk_id_kategori'),
    //             'foto_artikel'=>$file,
    //         ];
        
    //         $tabel='artikel';
    //         $this->M_crud->create_data($tabel,$data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Sukses!</h5> Data Berhasil Ditambahkan!</div>');

    //         redirect('panel/dashboard');
    // }
    // function hapus_artikel()
    // {
    //     $id = $this->uri->segment(4);
    //     $tabel ='artikel';
    //     $nama_id ='id_artikel';
    //     $data1 = $this->M_crud->hapus_data_by_id($tabel,$nama_id,$id);
      
    //     $data = [
    //         'aksi'              => '',
    //         'sub_page_title'    => 'Artikel',
    //         'page_title'        => 'Panel',
    
    //         'breadcrumbs'       => [
    //             [
    //                 'href'  => '#',
    //                 'label' => 'Panel',
    //             ],
    //             [
    //                 'href'  => '#',
    //                 'label' => 'Dashboard',
    //             ]
    //         ],
    //         'reload'            => 'reload();',
    //         'css_lib'           => [
    //             ''
    //         ],
    //         'css_cdn'           => [
    //             'https://fonts.googleapis.com/icon?family=Material+Icons'
    //         ],
    //         'js_lib'            => [
    //             'source/lib/chart.js/Chart.bundle.min.js'


    //         ],
    //         'js'                => ['back/jsphp/dashboard.php'],
    //     ];
    //     $this->load->helper('url');
         
    //     // $result = array_merge($data,$data1);
    //     $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Sukses!</h5> Data Berhasil DiHapus!</div>');
    //     redirect('panel/dashboard');
    // }
    // function edit_artikel()
    // {
    //     $slug = $this->uri->segment(4);
    //     $tabel='artikel';
    //     $nama_slug='slug_artikel';
    //     $data1 = $this->M_crud->get_data_by_slug($tabel,$nama_slug,$slug);
    //     $data2 = $this->M_kategori->get_data_kategori();
        
    //     $username = $this->session->userdata('username');
    //     $Auth = $this->M_login->login($username);
    //     if(!$Auth){
    //         redirect('gate/login');
    //     }
    //     $data = [
    //         'aksi'              => '',
    //         'sub_page_title'    => 'Artikel',
    //         'page_title'        => 'Panel',
    //         'data_artikel'      => $data1,
    //         'data_kategori'     => $data2,
    //         'data_user'         =>$Auth,
    //         'breadcrumbs'       => [
    //             [
    //                 'href'  => '#',
    //                 'label' => 'Panel',
    //             ],
    //             [
    //                 'href'  => '#',
    //                 'label' => 'Dashboard',
    //             ]
    //         ],
    //         'reload'            => 'reload();',
    //         'css_lib'           => [
    //             ''
    //         ],
    //         'css_cdn'           => [
    //             'https://fonts.googleapis.com/icon?family=Material+Icons'
    //         ],
    //         'js_lib'            => [
    //             'source/lib/chart.js/Chart.bundle.min.js'


    //         ],
    //         'js'                => ['back/jsphp/dashboard.php'],
    //     ];
    //     $this->load->helper('url');
    //     $this->admin($data,'back/konten/panel/edit_artikel.php');
        
    // }
    // function simpan_edit_artikel()
    // {
    //     $id = $this->input->post('id_artikel');
    //     $timestamp = date("Y-m-d H:i:s");
    //     $config['upload_path']          = './public/foto';
    //     $config['allowed_types']        = 'gif|jpg|png';

    //     // $config['overwrite']			= true;
    //     $config['max_size']             = 3072; // 1MB
    //     // $config['max_width']            = 1024;
    //     // $config['max_height']           = 768;
        
    //     $this->load->library('upload', $config);
        
    //     if($this->upload->do_upload("foto_artikel")){
    //     // $data1 = array('upload_data' => $this->upload->data());
    //         $file= $this->upload->data('file_name');
    //         $judul=$this->input->post('judul_artikel');
    //         $slug = url_title($judul, 'dash', true);
    //         $user = $this->session->userdata('id_user');
    //         $data = [
    //             'judul_artikel' => $judul,
    //             'slug_artikel' => $slug,

    //             'konten_artikel'=>$this->input->post('konten_artikel'),
    //             'fk_id_kategori' => $this->input->post('fk_id_kategori'),
    //             'foto_artikel'=>$file,
    //             'updated_at'=>$timestamp,
    //             'updated_by'=>$user
    //         ];
    //     }else{
    //         $judul=$this->input->post('judul_artikel');
    //         $slug = url_title($judul, 'dash', true);
    //         $user = $this->session->userdata('id_user');
    //         $id_kategori=1;
    //         $data = [
    //             'judul_artikel' => $judul,
    //             'slug_artikel' => $slug,
 
    //             'konten_artikel'=>$this->input->post('konten_artikel'),
    //             'fk_id_kategori' => $this->input->post('fk_id_kategori'),
    //             'updated_at'=>$timestamp,
    //             'updated_by'=>$user
             
    //         ];
    //     }
    //         $tabel='artikel';
    //         $nama_id='id_artikel';
    //         $this->M_crud->edit_data_by_id($tabel,$data,$nama_id,$id);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-check"></i> Sukses!</h5> Data Berhasil Diedit!</div>');

    //         redirect('panel/dashboard');
    // }
    
}
