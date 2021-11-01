<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	
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
        $tabel ='em_foto';
        $foto = $this->M_crud->get_data_not_del_status($tabel);
        $random = Rand(0, count($foto) - 1);
        $tabel="em_meta";
        $meta = $this->M_crud->get_data($tabel);
        $tabel="em_website";
        $website = $this->M_crud->get_data($tabel);
        $tabel="em_link";
        $link = $this->M_crud->get_data_not_del($tabel);
        $foto_random = (array) $foto[$random];
        $meta_array = (array) $meta[0];
        $website_array = (array) $website[0];
        $data = [
            'foto_random'=> $foto_random,
            'meta_array'=>$meta_array,
            'website_array'=>$website_array,
            'link'=>$link
        ];
		$this->front($data,'front/konten/home.php');
	}
}
