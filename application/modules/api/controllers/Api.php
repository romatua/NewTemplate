<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
//require APPPATH . '/libraries/BniEnc.php';
use Restserver\Libraries\REST_Controller;

class Api extends REST_Controller {
    
    function __construct($config = 'rest') {
        parent::__construct($config);
    
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('transaction_model');
        $this->load->model('m_wsbpdbali');
        $this->load->model('m_rate');
        $this->load->library("Pdf");
        $this->load->library('email');
    }
    
    function index_get() {
        redirect('auth/login');
    }
    
    function h2hgetakadbytgl_post() {                
        //Make sure that it is a POST request.
        if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
            $outputmessage = array('RESPON' => 'Request method must be POST!');
//            throw new Exception('Request method must be POST!');
        }

        //Make sure that the content type of the POST request has been set to application/json
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
        if(strcasecmp($contentType, 'application/json') != 0){
            $outputmessage = array('RESPON' => 'Content type must be: application/json');
//            throw new Exception('Content type must be: application/json');
        }

        //Receive the RAW post data.
        $content = trim(file_get_contents("php://input"));
        $decoded = json_decode($content, true);
        if(!is_array($decoded)){
            $outputmessage = array('RESPON' => 'Received content contained invalid JSON!');
//            throw new Exception('Received content contained invalid JSON!');
        } else {
            if (isset($decoded['tgl_akad'])) {
                ini_set('memory_limit', '-1');
                ini_set('max_execution_time', '-1');
                ini_set('max_input_time', '3600');
                $param = new stdClass();
                $param->Username = "jasindo";
                $param->Password = "dc4391f6b6b77bd45afd0f0102395e37";
    //            $param->Tanggal = "2016-11-07";
                $param->Tanggal = $decoded['tgl_akad'];
                //$this->input->post('tgl_akad');
    //            var_dump($this->input->post('tgl_akad'));
                $json_data = json_encode($param);
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "http://192.168.168.109:9200/jasindo/AkadDebiturs/GetAkadByTgl");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($json_data)
                ));
                $response = curl_exec($ch);
                $jsonresponse = json_decode($response, TRUE);
                $outputmessage = $jsonresponse;
                curl_close($ch);
            }
        }
        $this->response($outputmessage);
    }
    
    function h2hgetakadbytglbykckcp_post() {                
        //Make sure that it is a POST request.
        if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
            $outputmessage = array('RESPON' => 'Request method must be POST!');
//            throw new Exception('Request method must be POST!');
        }

        //Make sure that the content type of the POST request has been set to application/json
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
        if(strcasecmp($contentType, 'application/json') != 0){
            $outputmessage = array('RESPON' => 'Content type must be: application/json');
//            throw new Exception('Content type must be: application/json');
        }

        //Receive the RAW post data.
        $content = trim(file_get_contents("php://input"));
        $decoded = json_decode($content, true);
        if(!is_array($decoded)){
            $outputmessage = array('RESPON' => 'Received content contained invalid JSON!');
//            throw new Exception('Received content contained invalid JSON!');
        } else {
            if (isset($decoded['tgl_akad'])) {
                ini_set('memory_limit', '-1');
                ini_set('max_execution_time', '-1');
                ini_set('max_input_time', '3600');
                $param = new stdClass();
                $param->Username = "jasindo";
                $param->Password = "dc4391f6b6b77bd45afd0f0102395e37";
    //            $param->Tanggal = "2016-11-07";
                $param->Tanggal = $decoded['tgl_akad'];
                $param->Cabang = $decoded['kckcp'];
                //$this->input->post('tgl_akad');
    //            var_dump($this->input->post('tgl_akad'));
                $json_data = json_encode($param);
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "http://192.168.168.109:9200/jasindo/AkadDebiturs/GetAkadByCbg");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($json_data)
                ));
                $response = curl_exec($ch);
                $jsonresponse = json_decode($response, TRUE);
                $outputmessage = $jsonresponse;
                curl_close($ch);
            }
        }
        $this->response($outputmessage);
    }
    
    function h2hgetakadbyNorek_post() {                
        //Make sure that it is a POST request.
        if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
            $outputmessage = array('RESPON' => 'Request method must be POST!');
//            throw new Exception('Request method must be POST!');
        }

        //Make sure that the content type of the POST request has been set to application/json
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
        if(strcasecmp($contentType, 'application/json') != 0){
            $outputmessage = array('RESPON' => 'Content type must be: application/json');
//            throw new Exception('Content type must be: application/json');
        }

        //Receive the RAW post data.
        $content = trim(file_get_contents("php://input"));
        $decoded = json_decode($content, true);
        if(!is_array($decoded)){
            $outputmessage = array('RESPON' => 'Received content contained invalid JSON!');
//            throw new Exception('Received content contained invalid JSON!');
        } else {
            if (isset($decoded['tgl_akad'])) {
                ini_set('memory_limit', '-1');
                ini_set('max_execution_time', '-1');
                ini_set('max_input_time', '3600');
                $param = new stdClass();
                $param->Username = "jasindo";
                $param->Password = "dc4391f6b6b77bd45afd0f0102395e37";
    //            $param->Tanggal = "2016-11-07";
                $param->Tanggal = $decoded['tgl_akad'];
                $param->Cabang = $decoded['kckcp'];
                //$this->input->post('tgl_akad');
    //            var_dump($this->input->post('tgl_akad'));
                $json_data = json_encode($param);
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "http://192.168.168.109:9200/jasindo/AkadDebiturs/GetAkadByCbg");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($json_data)
                ));
                $response = curl_exec($ch);
                $jsonresponse = json_decode($response, TRUE);
                $outputmessage = $jsonresponse;
                curl_close($ch);
            }
        }
        $this->response($outputmessage);
    }
    
    function testh2hgetakadbytgl_get() {                
        
                ini_set('memory_limit', '-1');
                ini_set('max_execution_time', '-1');
                ini_set('max_input_time', '3600');
                $param = new stdClass();
                $param->Username = "jasindo";
                $param->Password = "dc4391f6b6b77bd45afd0f0102395e37";
                $param->Tanggal = "2016-11-07";
                $param->tgl_akad = "2016-11-07";
//                $param->Tanggal = $decoded['tgl_akad'];
                //$this->input->post('tgl_akad');
    //            var_dump($this->input->post('tgl_akad'));
                $json_data = json_encode($param);
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "http://192.168.54.109/bpdbali/api/h2hgetakadbytgl");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($json_data)
                ));
                $response = curl_exec($ch);
                var_dump($response);
                $jsonresponse = json_decode($response, TRUE);
                $outputmessage = $jsonresponse;
                curl_close($ch);
                var_dump($outputmessage);
            
    }
    
    function h2hgetpesertabpdbali_get(){
        //validasi
        $this->db->truncate('ws_bpdbali'); 
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', '-1');
        ini_set('max_input_time', '3600');

        $diff = -7;
        $outputmessage = '';
        $executed = 0;
        $error = '';
        $msg = '';
        while ($diff <= 0) {
            $strdate = date('Y-m-d', strtotime("".$diff." day"));
            $diff++;
            try {
                $param = new stdClass();
                $param->tgl_akad = $strdate;
                $json_data = json_encode($param);
                $ch = curl_init();
        //            curl_setopt($ch, CURLOPT_URL, "http://192.168.168.109:9200/jasindo/AkadDebiturs/GetAkadByTgl");
                curl_setopt($ch, CURLOPT_URL, "http://192.168.54.109/bpdbali/api/h2hgetakadbytgl");
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($json_data)
                ));
                $response = curl_exec($ch);
//                var_dump($response);
                $jsonresponse = json_decode($response, TRUE);
                curl_close($ch);
                //if ($result['http_code']!='200')
            } catch (Exception $e) {
                $diff = 1;
                $outputmessage .= $e->getMessage()."\n";
            }
            
            if(isset($jsonresponse['Error'])) {
                if($jsonresponse['Error']==false) {
                    $statuserror = ($jsonresponse['Error']==false)?'FALSE':'TRUE';
                    $debitur = array();
                    $msg .= '($strdate) Error: '.$statuserror.' | Message: '.$jsonresponse['Message'].'.<br> ';
                    foreach ($jsonresponse['Result'] as $row) {
                        $debitur['nomor_rekening'] = $row['nomor_rekening'];
                        $debitur['nomor_PK'] = $row['nomor_pk'];
                        $debitur['tanggal_PK'] = $row['tanggal_pk'];
                        $debitur['masa_asuransi'] = $row['masa_asuransi'];
                        $debitur['nilai_pertanggungan'] = $row['nilai_pertanggungan'];
                        $masa = ceil($row['masa_asuransi']/12);
                        $tarif = $this->tp_ajk(($masa < '0' ? '0' : $masa), $row['jenis_kredit']);
                        $debitur['tarif_premi'] = $tarif;
                        $debitur['premi'] = ($debitur['nilai_pertanggungan'] * $tarif) / 1000;
                        //$debitur['premi'] = $row['premi'];
                        $debitur['alamat_agunan'] = $row['alamat_agunan'];
                        $debitur['id_jeniskredit'] = $row['jenis_kredit'];
                        $debitur['kc_kcp'] = $row['kc_kcp'];
                        $debitur['nik'] = $row['nik'];
                        $debitur['nama_peserta'] = $row['nama_peserta'];
                        $debitur['tgl_lahir'] = $row['tanggal_lahir'];
                        $debitur['id_jeniskelamin'] = $row['jenis_kelamin'];
                        $debitur['alamat_peserta'] = $row['alamat_peserta'];
                        $debitur['pekerjaan'] = $row['pekerjaan'];
                        $debitur['status'] = is_null($tarif)?'rate tidak ditemukan!':'';

                        $this->db->insert('ws_bpdbali', $debitur);

                        ////get insert id kelompok
                        $id_bpan = $this->db->insert_id();
                        $executed++;
                    }
                }
            }

        }
        $this->m_wsbpdbali->deleteexistingcalonpeserta();
        $insertmsg = $this->m_wsbpdbali->insertdebitur($executed);
        $outputmessage .= "Hasil proses integrasi: <br>".$msg.'<br>'.$insertmsg.'<br>';
        $this->response($outputmessage);
        
    }
    
    function testh2hgetpesertabpdbali_get() {
        $diff = -5;
        
        while ($diff <= 0) {
            $diff++;
            $strdate = date('Y-m-d', strtotime("".$diff." day"));
            echo $strdate;
        }
    }
    
    function tp_ajk($masa, $ijk) {
        $resultdata = $this->m_rate->ajk($masa, $ijk);
        return $resultdata[0]['tarif_masa_' . $masa];
    }
    
}
?>