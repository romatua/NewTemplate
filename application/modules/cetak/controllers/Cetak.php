<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cetak extends CI_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }

        $this->load->library("Pdf");
        $this->load->library("API_Gen");
        $this->load->model('M_cetak');
        $this->load->database();
        $this->load->helper('url');        
        $this->load->model('Grocery_crud_model');
    }

    public function index() {
        echo "<h1> Link Belum Tersedia!</h1>";
    }

    public function draft() {
        $this->API_Gen = new API_Gen();
        $id_gen = $this->uri->segment(3);
        $this->API_Gen->gen_draf('v_draft',$id_gen);
        echo '<script language="JavaScript">';
        echo 'window.self.close();';
        echo '</script>';
    }
    public function sertifikat() {
        error_reporting(0);
        $this->API_Gen = new API_Gen();
        $id_gen = $this->uri->segment(3);
        $this->API_Gen->gen_sertifikat('v_sertifikat',$id_gen);
        echo '<script language="JavaScript">';
        echo 'window.self.close();';
        echo '</script>';
        redirect(base_url('formapp/daftar_peserta'),'refresh');

    }
}

/* End of file cetak.php */
/* Location: ./application/controllers/c_test.php */
