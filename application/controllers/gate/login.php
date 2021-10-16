<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper(array('url'));
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->library('user_agent');
        $this->load->library('session');
        $this->load->model('M_login');
    }
   

    public function index()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->login('back/gate/login.php');
        } else {
            // jika validasinya sukse
            $this->_login();
        }
        
    }
    function _login(){
       
        $username =$this->input->post('username');
        
        $password = $this->security->xss_clean($this->input->post('password', TRUE));
 
      
        $hash_cost_log2 = 8;
        $hash_portable = FALSE;
        $hasher = new PasswordHash($hash_cost_log2, $hash_portable);
        $password_cross="password_db";  

        $data_user=$this->M_login->login($username);
        $is_block='0';
        if($data_user){
            foreach ($data_user as $field) {
            $password_cross = $field->password;
            $is_block =$field->is_block;
            $id =$field->id_user;
            
            }
        }
        if($is_block == '1'){
            //jika akun di blok
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">akun anda diblocks silahkan hubungi admin!</div>');
            redirect('gate/login');
        }

        $cek_password   = $hasher->CheckPassword($password, $password_cross);
        $ip = $this->input->ip_address();
        $agent = $this->agent->browser().' '.$this->agent->version();
       
        $data_log = [
            'username'=> $username,
            'ip' =>$ip,
            'user_agent'=>$agent
            ,
        ];

          if($cek_password ){
            //trueee
            $status = [
                'status'=>'1',
                
            ];
            $id_user =['id_user'=>$id];
            $user_log= array_merge($data_log,$status);
            $log=$this->M_login->log($user_log);

            $userdata= array_merge($user_log,$id_user);
            // var_dump($userdata);
            // die;
            $this->session->set_userdata($userdata);
            redirect('panel/dashboard');
          }else{
              //falseee
           
            $status = [
                'status'=>'0',
            ];
            $user_log= array_merge($data_log,$status);
            $last3_log = $this->M_login->last_log($user_log['ip'],$user_log['username']);
            $hitung =0;
            $limit=3;
            foreach ($last3_log as $field1) {
                
                if($field1->status == "0"){
                   $hitung++; 
                   $limit--;
                }
             }
            
            if($hitung == 3)
            {
                $block = $this->M_login->block($user_log['username']);
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">Salah input 3 kali akun anda diblocks silahkan hubungi admin!</div>');
                $this->login('back/gate/login.php');
            }else{
                $log=$this->M_login->log($user_log);
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">Username atau Password Salah! Sisa limit login '. $limit .'</div>');
                $limit=0;
                $this->login('back/gate/login.php');
            }
          }
              
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout</div>');
        redirect('gate/login');
    }
  
    public function lupa()
    {
        $this->form_validation->set_rules('password1', 'new password', 'required');
        $this->form_validation->set_rules('password2', 'confirm password', 'required|matches[password1]');
        if ($this->form_validation->run() == false) {
            $this->login('back/gate/login.php');
        } else {
            // jika validasinya sukse
            $hash_cost_log2 = 8;
            $hash_portable = FALSE;
            $hasher = new PasswordHash($hash_cost_log2, $hash_portable);
            
            
            $pass = $this->security->xss_clean($this->input->post('password1', TRUE));
            $username=$this->input->post('username');
            $password   = $hasher->HashPassword($pass);
            $data = [
                'password'=>$password
            ];
            // var_dump($data,$username,$nama_user,$pass);
            // die;
            $ganti_pass=$this->M_login->ganti_pass($data,$username);
       
            if($ganti_pass == true){
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Pasword berhasil di ubah silahkan login!</div>');
                redirect('gate/login');
            }elseif($ganti_pass == false){
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Nama user dan username tidak ditemukan</div>');
                redirect('gate/login');
            }
        }

           
        
        
    }

  
    
}
