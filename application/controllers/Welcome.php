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

        $data = [

        ];
		$this->front($data,'front/konten/home.php');
	}
}
