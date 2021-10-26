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
        $tabel="em_website";
        $website = $this->M_crud->get_data($tabel);
        $tabel="em_link";
        $link = $this->M_crud->get_data_not_del($tabel);
        $tabel ='em_akad';
        $nama_slug="slug";
        $akad= $this->M_crud->get_data_by_slug($tabel,$nama_slug, $slug);
        foreach ($akad as $a){
            $id_akad = $a->id;
        }
     
        $tabel ='em_akad_foto';
        $nama_slug="id_akad";
        
        $foto_akad= $this->M_crud->get_data_by_slug($tabel,$nama_slug, $id_akad);
        $data = [
            'foto'=> $random,
            'meta'=>$meta,
            'website'=>$website,
            'link'=>$link,
            'akad'=>$akad,
            'foto_akad'=>$foto_akad
            
        ];
		$this->front($data,'front/konten/akad.php');
	}
}

