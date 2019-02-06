<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Formapp extends MX_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('custom_grocery_crud');
        $this->load->library('Gc_dependent_select');
        $this->load->model('Grocery_crud_model');
    }

#end __construct
    
    public function _callback_webpage_url($value, $row) {
        $id = $row->id_peserta;
        $cb = "<input type='checkbox' name='custom_checkbox' value='" . $id . "' />";
        return $cb;
    }  

    public function daftar_peserta() {
        $crud = new grocery_CRUD;
        $user = $this->ion_auth->user()->row();
        $state = $crud->getState();
        
        $crud->set_table('m_peserta')
            ->order_by('id_peserta', 'desc')
                ;

//        $crud->columns('noref','custname','adrs','jobtitle','dob','ktp','premi','tsi','transdate','enddate','priod','type','policyinsuranceno','policyurl','statuspolicy','nobatch');
        $crud->columns('noref');
        $crud->fields('noref','custname','adrs','jobtitle','dob','ktp','premi','tsi','transdate','enddate','priod','type','policyinsuranceno','policyurl','statuspolicy','nobatch');
        $crud->set_read_fields('noref','custname','adrs','jobtitle','dob','ktp','premi','tsi','transdate','enddate','priod','type','policyinsuranceno','policyurl','statuspolicy','nobatch','created_date','created_by');

        $crud
        ->display_as('noref','NOREF')
        ->display_as('custname','CUSTNAME')
        ->display_as('adrs','ADRS')
        ->display_as('jobtitle','JOBTITLE')
        ->display_as('dob','DATEOFBIRTH')
        ->display_as('ktp','KTP')
        ->display_as('premi','PREMI')
        ->display_as('tsi','TSI')
        ->display_as('transdate','TRANSDATE')
        ->display_as('enddate','ENDDATE')
        ->display_as('priod','PRIOD')
        ->display_as('type','TYPE')
        ->display_as('policyinsuranceno','POLICYINSURANCENO')
        ->display_as('policyurl','POLICYURL')
        ->display_as('statuspolicy','STATUSPOLICY')
        ->display_as('nobatch','NOBATCH');

        $crud->callback_column('noref', function ($value) {
            return "<span style=\"width:100%;text-align:right;display:block;\"><a href=" . site_url('dokumen/certificate/').$value.".pdf target='_blank'>".$value."</a></span>";
        });
        $crud->callback_column('ktp', function($value) {
                $strnik = substr_replace($value, '-', 6, 0);
                return $strnik;
            });
        $url_callback_print = function($primary_key, $row) {
            return "javascript:window.open('" . base_url('cetak/sertifikat') . '/' . $primary_key . "')";
        };
        $crud->add_action('Generate PDF', '', 'cetak/sertifikat', 'target fa fa-cogs', $url_callback_print);

        // $crud->add_action('Cetak e-Polis', '', 'cetak/sertifikat', 'fa fa-file-pdf-o target');

        $crud->unset_add();
//        $crud->unset_delete();      
        $crud->unset_print();
        $output = $crud->render();

        $data = array();
        $data['title'] = "DAFTAR PESERTA";
        $output->data = $data;

        $view = 'formapp_ultra';
        $this->_master_output($view, $output);
    }

    function _master_output($view, $output = null) {
        $this->load->view('standar/header_gc_ultra', $output);
        $this->load->view('standar/sidebar_ultra');
        $this->load->view('standar/top_navigation_ultra');
        $this->load->view($view, $output);
        $this->load->view('standar/footer');
    }

}
