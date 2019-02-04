<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }

        $this->load->database();
        $this->load->helper('url');
        //$this->load->library('grocery_CRUD');
        $this->load->library('custom_grocery_crud');
        $this->load->Model('M_dashboard');
    }
	
	//================ Start Agen======================================================================================================
    public function index() {
		
        $userid = $this->ion_auth->get_user_id();
        $user = $this->ion_auth->user()->row();
                
        $data = array();
        $data['data_summary'] = $this->M_dashboard->get_datasummary();

        $this->load->view('standar/header_ultra');
        $this->load->view('standar/sidebar_ultra');
        $this->load->view('standar/top_navigation_ultra');
        $this->load->view('dashboard_ultra' , array('data' => $data));
        $this->load->view('standar/footer_ultra');
    }
	

}
