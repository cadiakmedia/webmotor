<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akad extends MY_Controller {
	
	public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper(array('url'));
        $this->load->database();

        $this->load->library('session');
    }

	public function index()
	{
        $this->load->model('M_crud');
        $slug = $this->uri->segment(2);
        $tabel ='em_foto';
        $foto = $this->M_crud->get_data_not_del_status($tabel);
        $random = $foto[Rand(0, count($foto) - 1)];
        $tabel="em_meta";
        $meta = $this->M_crud->get_data($tabel);
        $tabel="user";
        $user = $this->M_crud->get_data_user($tabel);
        $tabel="em_website";
        $website = $this->M_crud->get_data($tabel);
        $tabel="em_link";
        $link = $this->M_crud->get_data_not_del($tabel);
        $tabel ='em_akad';
        $nama_slug="slug";

        if(!isset($slug)){
            
            $akad= $this->M_crud->get_data($tabel);
            
            $tabel='em_akad_foto';
            $foto_akad = $this->M_crud->get_data($tabel);
               
        
            $meta_array = (array) $meta[0];
            $website_array = (array) $website[0];
           
          
            $data = [
                'foto'=> $random,
                'meta_array'=>$meta_array,
                'user'=>$user,
                'website_array'=>$website_array,
                'link'=>$link,
                'akad'=>$akad,
                'foto_akad'=>$foto_akad,
              
                
            ];
            $this->front($data,'front/konten/menu_akad.php');

        }else{

        $akad= $this->M_crud->get_data_by_slug($tabel,$nama_slug, $slug);
        foreach ($akad as $a){
            $id_akad = $a->id;
        }
        $pop = "clicked";
        $pop_akad= $this->M_crud->get_data_pop($tabel,$pop);
       
       
     
        $tabel ='em_akad_foto';
        $nama_slug="id_akad";
        
        $all_foto_akad= $this->M_crud->get_data($tabel);
        $foto_akad= $this->M_crud->get_data_by_slug($tabel,$nama_slug, $id_akad);
        $tabel ='em_akad';
        $nama_slug="id";
      
        $add_clicked= $this->M_crud->edit_data_by_id_click($tabel,$nama_slug, $id_akad);

        $meta_array = (array) $meta[0];
        $website_array = (array) $website[0];
        $akad_array = (array) $akad[0];
        $data = [

            'meta_array'=>$meta_array,
            'user'=>$user,
            'website_array'=>$website_array,
            'link'=>$link,
            'akad_array'=>$akad_array,
            'pop_akad'=>$pop_akad,
            'foto_akad'=>$foto_akad,
            'all_foto_akad'=>$all_foto_akad
            
        ];
		$this->front($data,'front/konten/akad.php');
        }
	}
}

