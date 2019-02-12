<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller {
    
    function __construct($config = 'rest') {
        parent::__construct($config);

        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
    
        $this->load->database();
        $this->load->helper('url');
        $this->load->library("Pdf");
        $this->load->library('email');
        $this->load->library("API_Gen");
        $this->load->library("Akulaku");
        $this->load->model('transaction_model');
    }
    
    function index_get() {
        redirect('auth/login');
    }

    function cek_post() {
        if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
            $outputmessage = array('RESPON' => 'Request method must be POST!');
            //throw new Exception('Request method must be POST!');
        }

        //Make sure that the content type of the POST request has been set to application/json
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
        if(strcasecmp($contentType, 'application/json') != 0){
            $outputmessage = array('RESPON' => 'Content type must be: application/json');
            //throw new Exception('Content type must be: application/json');
        }
        
        $content = trim(file_get_contents("php://input"));        
        $decoded = json_decode($content, true);
        // there may not be authentication information on this request

        if(!is_array($decoded)){
            $outputmessage = array('RESPON' => 'Received content contained invalid JSON!');
            //throw new Exception('Received content contained invalid JSON!');
        }else{
            var_dump("input username: ".$decoded['username']);
            foreach ($decoded['data'] as $row) {
                var_dump($row['custname']);
            }
//            $outputmessage = array(
//            'noref' =>$this->post('noref'),
//            'custname' =>$this->post('custname'),
//            'adrs' =>$this->post('adrs'),
//            'jobtitle' =>$this->post('jobtitle'),
//            'dob' =>$this->post('dob'),
//            'ktp' =>$this->post('ktp'),
//            'tsi' =>$this->post('tsi'),
//            'transdate' =>$this->post('transdate'),
//            'priod' =>$this->post('priod'),
//            'type' =>$this->post('type'),
//            'policyinsuranceno' =>$this->post('policyinsuranceno'),
//            'policyurl' =>$this->post('policyurl'),
//            'statuspolicy' =>$this->post('statuspolicy'),
//            'nobatch' =>$this->post('nobatch')
//            );
            $outputmessage = 'successs';
        }
        $this->response($outputmessage, REST_Controller::HTTP_CREATED);
    }

    function registerpeserta_post() {
//        ini_set('display_errors', 'On');
        $this->API_Gen = new API_Gen();
        $this->Akulaku = new Akulaku();
        //Make sure that it is a POST request.
        $outputmessage = array('RESPON' => 'OK');
        if (strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0) {
            $this->response([
                'status' => FALSE,
                'message' => 'Request method must be POST!'
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
        //Make sure that the content type of the POST request has been set to application/json
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
        if (strcasecmp($contentType, 'application/json') != 0) {
            $this->response([
                'status' => FALSE,
                'message' => 'Content type must be: application/json'
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
        //Receive the RAW post data.
        $content = trim(file_get_contents("php://input"));
        /*$content = {"username":"1","password":"1","noref": "19644870-0","custname": "ANNISA NANDA FITRIA","adrs": "JL. ABC ","jobtitle": "Pegawai Swasta","dob": "1996-11-22","ktp": "3672016211960003","premi":"","tsi": "3086000","transdate": "2018-06-16","enddate":"","priod": "365","type": "A","policyinsuranceno": "","policyurl": "","statuspolicy": "","nobatch": "1"};*/
        //Attempt to decode the incoming RAW post data from JSON.
        $decoded = json_decode($content, true);

        //If json_decode failed, the JSON is invalid.
        if (!is_array($decoded)) {
            $this->response([
                'status' => FALSE,
                'message' => 'Received content contained invalid JSON!'
                    ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if (isset($decoded['username']) && isset($decoded['password'])) {
                $uname = $decoded['username'];
                $pwd = $decoded['password'];
                $valid_logins = $this->config->item('rest_valid_logins');

                if (isset($valid_logins[$uname]) && $valid_logins[$uname] == $pwd) {
//                if(1 == 1) {
                    try {
                        $responsemessage = "";
                        $rowinserted = 0;
                        foreach ($decoded['data'] as $row) {                            
                            if($this->transaction_model->get_duplicaterefno($row['noref'])) {
                                $responsemessage .= $row['noref']." duplicate!.";
                            }  else {
                                $enddate = $this->Akulaku->endofmassa($row['priod'], $row['transdate']);
                                $premi = $this->Akulaku->getPremi($row['transdate'],$enddate,$row['tsi']);

                                $branch_id = $this->config->item('branch_id');
                                $kode_cob = $this->config->item('kode_cob');
                                $tahun_priod = date('Y', strtotime($row['transdate']));
                                $policyinsuranceno = $this->transaction_model->gen_polis($branch_id,$kode_cob,$tahun_priod);

                                $created_date = date('Y-m-d h:i:s');
                                $created_by = 'Administrator';

                                $object_data = array(
                                    'noref' =>$row['noref'],
                                    'custname' =>$row['custname'],
                                    'adrs' =>$row['adrs'],
                                    'jobtitle' =>$row['jobtitle'],
                                    'dob' =>$row['dob'],
                                    'ktp' =>$row['ktp'],
                                    'premi' => $premi,
                                    'tsi' =>$row['tsi'],
                                    'transdate' =>$row['transdate'],
                                    'enddate' => $enddate,
                                    'priod' =>$row['priod'],
                                    'type' =>$row['type'],
                                    'policyinsuranceno' =>$policyinsuranceno,
                                    'policyurl' =>$row['policyurl'],
                                    'statuspolicy' =>$row['statuspolicy'],
                                    'nobatch' =>$row['nobatch'],
                                    'created_date' =>$created_date,
                                    'created_by' =>$created_by
                                );
                                $id_gen = $this->transaction_model->insert_registerpeserta($object_data);
                                $status_generate = $this->API_Gen->gen_sertifikat('v_sertifikat',$id_gen);
                                $rowinserted++;
                            }
                        }
                        $responsemessage .=" ".$rowinserted." rows inserted.";
                        $this->response([
                            'status' => TRUE,
                            'message' => $responsemessage
                                ], REST_Controller::HTTP_OK);
                    } catch (Exception $e) {
                        $this->response([
                            'status' => FALSE,
                            'message' => 'Received content contained invalid JSON!'
                                ], REST_Controller::HTTP_BAD_REQUEST);
                    }
                } else {
                    $this->response([
                        'status' => FALSE,
                        'message' => 'Credential invalid!'
                            ], REST_Controller::HTTP_BAD_REQUEST);
                }
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'Credential undefined!'
                        ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }
    
}
?>