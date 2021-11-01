<?php defined('BASEPATH') or exit('No direct script access allowed');


class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper(array('url'));
        $this->load->database();
        $this->load->library('datatables');

    }


    public function admin($data = [], $view = null)
    {

        $theme = 'metronic';
      
        $this->load->view('back/layout/' . $theme . '/head', $data);

        //$this->load->view('back/layout/navbar', $data);
        $this->load->view('back/layout/' . $theme . '/sidemenu', $data);
        $this->load->view('back/layout/' . $theme . '/header', $data);
        $this->load->view('back/layout/' . $theme . '/pembuka', $data);

        if ($view) {
            $this->load->view($view);
      
        }
        $this->load->view('back/layout/' . $theme . '/penutup', $data);
        $this->load->view('back/layout/' . $theme . '/footer', $data);
        
    }

    public function front($data = [], $view = null)
    {
        $this->load->view('front/layout/header', $data);

        // //$this->load->view('back/layout/navbar', $data);
        // $this->load->view('front/layout/sidemenu', $data);
        // $this->load->view('front/layout/head', $data);
        // $this->load->view('front/layout/pembuka', $data);

        if ($view) {
            $this->load->view($view);
        }
        // $this->load->view('front/layout/penutup', $data);
        $this->load->view('front/layout/footer', $data);
    }
    public function login( $view = null)
    {
       
        if ($view) {
            $this->load->view($view);
        }
        
  
    }
}
