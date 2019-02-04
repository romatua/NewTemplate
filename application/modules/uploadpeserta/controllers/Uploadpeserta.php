<?php

error_reporting(0);
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Uploadpeserta extends MX_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }

        $this->load->helper(array('form', 'url'));
        $this->load->library('excel');
        $this->load->helper('file');
        $this->load->database();
        $this->load->library('custom_grocery_crud');
        $this->load->library('API_Gen');
        $this->load->model('Transaction_model');
    }

    public function index() {
        $this->_master_output('uploadpeserta_ultra', array('error' => ''));
    }

    public function do_upload() {
        $config['upload_path'] = './assets/tmp-upload/data/';
        $config['allowed_types'] = 'xls|xlsx|csv';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
            $this->_master_output('uploadpeserta_ultra', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $upload_data = $this->upload->data();

            $file = $upload_data['full_path'];
            $upload_msg = $this->upload_data_validasi($file);
            $data['upload_msg'] = $upload_msg;

            $this->_master_output('uploadpeserta_sukses', $data);

            //Setelah selesai hapus fileupload
            $file = $upload_data['file_name'];
            $path = './assets/tmp-upload/data/' . $file;
            unlink($path);
        }
    }

    public function upload_data_validasi($fullpath) {
        //$data = new stdClass();
        $this->API_Gen = new API_Gen();

        $msg_response = '';
        ini_set('memory_limit', '-1');
        $inputFileName = $fullpath;
        try {
            $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        } catch (Exception $e) {
            die('Error loading file :' . $e->getMessage());
        }
        $worksheet = $objPHPExcel->getSheet(0);
        $highestRow = $worksheet->getHighestRow();
        $highestColumn = $worksheet->getHighestColumn();
        $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
        $numRows = count($worksheet);
        $row_insert_count = 0;
        $row_updated_count = 0;
        $row_start = 2; // mulai dari baris ke 2
        $baris = array();

        for ($row = $row_start; $row <= $highestRow; ++$row) {
            $val_data = array();
            $valid_row = true;

            for ($col = 0; $col < $highestColumnIndex; ++$col) {
                $cell = $worksheet->getCellByColumnAndRow($col, $row);
                if ($col == 0) {
                    continue;
                }
                if ($col == 1) {
                    $val_data['noref'] = $cell->getValue();
                }
                if ($col == 2) {
                    $val_data['custname'] = $cell->getValue();
                }
                if ($col == 3) {
                    $val_data['adrs'] = $cell->getValue();
                }
                if ($col == 4) {
                    $val_data['jobtitle'] = $cell->getValue();
                }
                if ($col == 5) {
                    $val_data['dob'] = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($cell->getValue()));
                }
                if ($col == 6) {
                    $val_data['ktp'] = $cell->getValue();
                }
                if ($col == 7) {
                    $val_data['premi'] = $cell->getValue();
                }
                if ($col == 8) {
                    $val_data['tsi'] = $cell->getValue();
                }
                if ($col == 9) {
                    $val_data['transdate'] = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($cell->getValue()));
                }
                if ($col == 10) {
                    $val_data['enddate'] = date('Y-m-d', PHPExcel_Shared_Date::ExcelToPHP($cell->getValue()));
                }
                if ($col == 11) {
                    $val_data['priod'] = $cell->getValue();
                }
                if ($col == 12) {
                    $val_data['type'] = $cell->getValue();
                }
                if ($col == 13) {
                    $val_data['policyinsuranceno'] = $cell->getValue();
                }
                if ($col == 14) {
                    $val_data['policyurl'] = $cell->getValue();
                }
                if ($col == 15) {
                    $val_data['statuspolicy'] = $cell->getValue();
                }
                if ($col == 16) {
                    $val_data['nobatch'] = $cell->getValue();
                }
            }

            $branch_id = $this->config->item('branch_id');
            $kode_cob = $this->config->item('kode_cob');
            $tahun_priod = date('Y', strtotime($val_data['transdate']));
            $policyinsuranceno = $this->Transaction_model->gen_polis($branch_id,$kode_cob,$tahun_priod);

            //print_r($policyinsuranceno);die();
            $val_data['policyinsuranceno'] = $policyinsuranceno;

            $val_data['enddate'] = $this->endofmassa($val_data['priod'], $val_data['transdate']);
            $val_data['premi'] = $this->getPremi($val_data['transdate'],$val_data['enddate'],$val_data['tsi']);
            $user = $this->ion_auth->user()->row();
            $val_data['created_date'] = date('Y-m-d h:i:s');
            $val_data['created_by'] = $user->first_name . ' ' . $user->last_name;
            
            $val_data = array_filter($val_data, 'strlen');
            $this->db->insert('m_peserta', $val_data);
            $id_gen = $this->db->insert_id();
            $row_insert_count++;

            $this->API_Gen->gen_sertifikat('v_sertifikat',$id_gen);
        }
        $msg_response = $msg_response . 'Total data masuk : ' . $row_insert_count . '<br /> '
        . 'Proses data gagal : ' . $row_updated_count . '';
        return $msg_response;
    }

    function endofmassa($offset, $tglmulai) {
        return date('Y-m-d', strtotime("+$offset days", strtotime($tglmulai)));
    }
    function getPremi($start, $end, $tsi) {
        $start1 = date_create($start);
        $end1 = date_create($end);
        $diff = date_diff($start1,$end1);
        $year = $diff->format("%y");
        $month = $diff->format("%m");
        $day = $diff->format("%d");
        if ($day > 0) {
            $month += 1;
        }
        if ($month < 3 && $year == 0) {
            $per = 0.015;
        }elseif ($month > 2 && $month < 6 && $year == 0) {
            $per = 0.02;
        }elseif ($month > 5 && $month < 9 && $year == 0) {
            $per = 0.025;
        }elseif ($month > 8 || $year >= 0){
            $per = 0.03;
        }
        return $tsi * $per;
    }

    function _master_output($view, $output = null) {
        $this->load->view('standar/header_ultra');
        $this->load->view('standar/sidebar_ultra');
        $this->load->view('standar/top_navigation_ultra');
        $this->load->view($view, $output);
        $this->load->view('standar/footer_ultra');
    }

}