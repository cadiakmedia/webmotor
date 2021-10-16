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
        $foto = $this->M_crud->get_data_not_del($tabel);
        $random = $foto[Rand(0, count($foto) - 1)];
     
        $data = [
            'foto'=> $random,
        ];
		$this->front($data,'front/konten/home.php');
	}
}
