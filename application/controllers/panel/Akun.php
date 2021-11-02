<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper(array('url'));
        $this->load->database();
        $this->load->library('datatables');
        $this->load->library('form_validation');
        $this->load->model('M_login');
        $this->load->model('M_akun');
        $this->load->model('M_crud');
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
            'sub_page_title'    => 'Akun',
            'page_title'        => 'Panel',
            'url'               => 'panel/akun/get_data_akun',
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
                    'label' => 'Akun',
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
            'js'                => ['back/jsphp/akun.php'],
        ];
        $this->load->helper('url');

        $this->admin($data, 'back/konten/panel/akun.php');
    }
    function get_data_akun()
    {
        $list = $this->M_akun->get_datatables();
        $data = array();
        $no = $_POST['start'];
        $tabel="user";
        $user = $this->M_crud->get_data_user($tabel);
        foreach ($list as $field) {
            $waktu=$field->created_at;
            $time = strtotime($waktu);
            $newformat = date('d-m-Y',$time);
            $jam =date('H:i' ,$time);
            foreach($user as $u){
                if($field->created_by == $u->id_user ) {
                    $pembuat = $u->nama_user;
                   
                      }else if($field->created_by == 0 ){
                        $pembuat = "0";
                      }
                    }
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->nama_user;
            $row[] = $field->username;
            $row[] = "$pembuat pada tanggal ". $newformat." Pukul ".$jam;
            
            if($field->is_block== '0'){ 
                
                $row[] = "
                <span class='switch switch-icon'>
                  <label>
                   <input type='checkbox' checked='checked' id='block' name='block' value='$field->id_user' onclick='return block()';/>
                   <span></span>
                  </label>
                 </span>";
           
                }else{
                $row[] = "  
                <span class='switch switch-icon'>
                  <label>
                   <input type='checkbox' id='block'  name='block' value='$field->id_user' onclick='return block()'  />
                   
                   <span></span>
                  </label>
                 </span>";
                };
            $aksi = '<span style="overflow: visible; position: relative; width: 125px;">
          
                
            <a id="edit"  data-toggle="modal" data-id='.$field->id_user.' class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
                <span class="svg-icon svg-icon-md">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">	                                        
                            <rect x="0" y="0" width="24" height="24"></rect>	                                        
                            <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>	                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>	                                    
                        </g>	                                
                    </svg>	                            
                </span>							
            </a>							
            <a onClick="hapus_akun('.$field->id_user.');" class="btn btn-sm btn-clean btn-icon" title="Delete">	                            
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
            "recordsTotal" => $this->M_akun->count_all(),
            "recordsFiltered" => $this->M_akun->count_filtered(),
            "" . $this->security->get_csrf_token_name() . "" => $this->security->get_csrf_hash(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
 
    
    public function get_id_akun()
    {
        // id yang telah diparsing pada ajax ajaxcrud.php data{id:id}
        
        $id = $this->input->post('id');
		$tabel="user";
        $nama_id="id_user";

        $data = $this->M_crud->get_data_by_id($tabel,$nama_id,$id);
  
        $output = array(

            "data" => $data,
            "" . $this->security->get_csrf_token_name() . "" => $this->security->get_csrf_hash()
        );
        //output to json format
        echo json_encode($output);
		
    }
    function input_edit_akun(){

        $csrf_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();  
        
          $this->form_validation->set_rules('nama_user', 'Nama', 'required');
          $this->form_validation->set_rules('username', 'Username', 'required');
         
         
          if ($this->form_validation->run() == FALSE){
  
              $array = array(
                  'error'   => true,
                  'error1' => validation_errors(),
                  'token'=>$this->security->get_csrf_hash(),
  
                 );
             
              echo json_encode($array);
  
          }else{
        $timestamp = date("Y-m-d H:i:s");
        $id_user_log = $this->session->userdata('id_user');
        $nama_user = $this->input->post('nama_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password1 = $this->input->post('password1');
        $id = $this->uri->segment(4);

        if(isset($password) && $password == $password1){
            $pass = $this->security->xss_clean($this->input->post('password', TRUE));
            $hash_cost_log2 = 8;
            $hash_portable = FALSE;
            $hasher = new PasswordHash($hash_cost_log2, $hash_portable);
            $password_in   = $hasher->HashPassword($pass);
            $data= array (
                'nama_user'=> $nama_user,
                'username'=> $username,
                'password'=>$password_in,
                'updated_by'=>$id_user_log,
                'updated_at' =>$timestamp
            );
            }else{
            $data= array (
                'nama_user'=> $nama_user,
                'username'=> $username,
                'updated_by'=>$id_user_log,
                'updated_at' =>$timestamp
            );

            }
        
        $tabel='user';
        $nama_id = "id_user";
        $this->M_crud->edit_data_by_id($tabel,$data,$nama_id,$id);
      

        $array = array(
            'success' => '<div class="alert alert-success">Data Baru berhasil di inputkan</div>',
            'token_emot'=>$this->security->get_csrf_hash(),
        );
            echo json_encode($array);
                        
            
        }
    }
    function input_akun(){

        $csrf_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();  
        
          $this->form_validation->set_rules('nama_user', 'Nama', 'required');
          $this->form_validation->set_rules('username', 'Username', 'required');
          $this->form_validation->set_rules('password', 'new password', 'required');
          $this->form_validation->set_rules('password1', 'confirm password', 'required|matches[password]');
         
         
          if ($this->form_validation->run() == FALSE){
  
              $array = array(
                  'error'   => true,
                  'error1' => validation_errors(),
                  'token'=>$this->security->get_csrf_hash(),
  
                 );
             
              echo json_encode($array);
  
          }else{
        $timestamp = date("Y-m-d H:i:s");
        $id_user_log = $this->session->userdata('id_user');
        $nama_user = $this->input->post('nama_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $password1 = $this->input->post('password1');
        $id = $this->uri->segment(4);

     
            $pass = $this->security->xss_clean($this->input->post('password', TRUE));
            $hash_cost_log2 = 8;
            $hash_portable = FALSE;
            $hasher = new PasswordHash($hash_cost_log2, $hash_portable);
            $password_in   = $hasher->HashPassword($pass);
            $data= array (
                'nama_user'=> $nama_user,
                'username'=> $username,
                'password'=>$password_in,
                'created_by'=>$id_user_log
            );
            
        
        $tabel='user';
        $nama_id = "id_user";
        $this->M_crud->create_data($tabel,$data);
      

        $array = array(
            'success' => '<div class="alert alert-success">Data Baru berhasil di inputkan</div>',
            'token_emot'=>$this->security->get_csrf_hash(),
        );
            echo json_encode($array);
                        
            
        }
    }
    public function hapus_akun()
    {   
        $csrf_name = $this->security->get_csrf_token_name();
        $csrf_hash = $this->security->get_csrf_hash();  
        $timestamp = date("Y-m-d H:i:s");
        $id_user = $this->session->userdata('id');
        $id = $this->uri->segment(4);

            $tabel = 'user';
            $nama_id='id_user';
            if($id == 1){
                $update1 =false;
            }else{
                $update1 = $this->M_crud->hard_del($tabel,$nama_id,$id);
            }
          
         
            if($update1){
            $array = array(
                'success' => 'true',
                'token_emot'=>$this->security->get_csrf_hash(),
            );
                echo json_encode($array);
            
            } else{
                $array = array(
                    'error' => 'true',
                    'token_emot'=>$this->security->get_csrf_hash(),
                );
                    echo json_encode($array);
             }  ;
     
    }
   
 
   
 
    public function block()
    {
        $id = $this->uri->segment(4);
        $block =$this->M_akun->block($id);
        redirect('panel/akun');

    }
    public function unblock()
    {
        $id = $this->uri->segment(4);
        $block =$this->M_akun->unblock($id);
        redirect('panel/akun');

    }  public function check_username_exists_klien($username){
        $this->form_validation->set_message('check_username_exists', 'Username Sudah didaftarkan. Silahkan gunakan Nomor lain');
        if($this->M_login->check_username_exists_klien($username)){
            return true;
        } else {
            return false;
        }
    }

}