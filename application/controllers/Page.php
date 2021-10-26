<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {
	
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
        $tabel ='em_page';
        $nama_slug="slug";
        $page = $this->M_crud->get_data_by_slug($tabel,$nama_slug, $slug);
        $data = [
            'foto'=> $random,
            'meta'=>$meta,
            'website'=>$website,
            'link'=>$link,
            'page'=>$page
            
        ];
		$this->front($data,'front/konten/page.php');
	}
}

