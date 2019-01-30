<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class API_Gen {

    protected $CI;

    // We'll use a constructor, as you can't directly call a function
    // from a property definition.
    public function __construct() {
        // Assign the CodeIgniter super-object
        $this->CI = & get_instance();
        $this->CI->load->library("Pdf");
        $this->CI->load->model('M_cetak');
        $this->CI->load->helper('url');
        $this->CI->load->database();
    }

    public function gen_sertifikat($view,$id) {
        ini_set('memory_limit', '1024M');
        $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Api Admin');
        $pdf->SetTitle('e-Polis Peserta');
        $pdf->SetSubject('e-Polis Peserta');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        $pdf->SetHeaderData("", "", "", "", array(0, 64, 0), array(255,255,255));
        $pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetMargins(PDF_MARGIN_LEFT, '18px', PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        //$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
            require_once(dirname(__FILE__) . '/lang/eng.php');
            $pdf->setLanguageArray($l);
        }
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('dejavusans', '', 8, '', true);
        $pdf->AddPage();
        
        $data2['data'] = $this->CI->M_cetak->get_peserta($id);
        foreach ($data2 as $row) {
            foreach ($row as $rows) {
            $data['nomor_polis']        = $rows['nomor_polis'];
            $data['noref']              = $rows['noref'];
            $data['custname']           = $rows['custname'];
            $data['adrs']               = $rows['adrs'];
            $data['jobtitle']           = $rows['jobtitle'];
            $data['dob']                = $rows['dob'];
            $data['ktp']                = $rows['ktp'];
            $data['premi']              = $rows['premi'];
            $data['tsi']                = $rows['tsi'];
            $data['transdate']          = $rows['transdate'];
            $data['enddate']            = $rows['enddate'];
            $data['priod']              = $rows['priod'];
            $data['type']               = $rows['type'];
            $data['policyinsuranceno']  = $rows['policyinsuranceno'];
            $data['policyurl']          = $rows['policyurl'];
            $data['statuspolicy']       = $rows['statuspolicy'];
            $data['nobatch']            = $rows['nobatch'];

            }
        }

        $html = $this->CI->load->view($view, $data, true);
        $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
        $pdf->lastPage();
        ob_clean();

        $output = 'dokumen/certificate/'.$data['noref'].'.pdf';
        $policyurl = base_url($output);
        $pdf->Output("$output", 'F');
        $this->CI->M_cetak->is_sertifikat_generated($id, $policyurl);
    }

    function gen_draft($view, $id) {
        ini_set('memory_limit', '1024M');
        $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Api Admin');
        $pdf->SetTitle('Draft Peserta');
        $pdf->SetSubject('Draft Peserta');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        $pdf->SetHeaderData("", "", "", "", array(0, 64, 0), array(255,255,255));
        $pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        $pdf->SetMargins(PDF_MARGIN_LEFT, '18px', PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        //$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
        if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
            require_once(dirname(__FILE__) . '/lang/eng.php');
            $pdf->setLanguageArray($l);
        }
        $pdf->setFontSubsetting(true);
        $pdf->SetFont('dejavusans', '', 8, '', true);
        $pdf->AddPage();
        $data2['data'] = $this->CI->M_cetak->get_peserta($id);
        foreach ($data2 as $row) {
            foreach ($row as $rows) {
                $data['nomor_polis']        = $rows['nomor_polis'];
                $data['nama_peserta']       = $rows['nama_peserta'];
                $data['tgl_lahir']          = date_format($rows['tgl_lahir'],'d-M-Y');
                $data['jeniskelamin']      = $rows['jeniskelamin'];
                $data['jenis_kredit']       = $rows['jenis_kredit'];
                $data['masa_asuransi']      = $rows['masa_asuransi'];
                $data['tgl_mulai']          = $rows['tgl_mulai'];
                $data['tgl_akhir']          = $rows['tgl_akhir'];
                $data['nilai_pertanggungan']= $rows['nilai_pertanggungan'];
                $data['premi']              = $rows['premi'];
                $data['nomor_pk']         = $rows['nomor_pk'];                
            }
        }
        $html = $this->CI->load->view($view, $data, true);
        $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

        $vfont = "dejavusans";
        $vfontsize = 99;
        $vfontbold = "B";
        $widthtext = $pdf->GetStringWidth(trim('DRAFT'), $vfont, $vfontbold, $vfontsize, false );
        $widthtextcenter = round(($widthtext * sin(deg2rad(45))) / 2 ,0);
        $myPageWidth = $pdf->getPageWidth();
        $myPageHeight = $pdf->getPageHeight();
        $myX = 75;//( $myPageWidth / 2 ) - $widthtextcenter;
        $myY = 125;//( $myPageHeight / 2 ) + $widthtextcenter;
        $pdf->SetAlpha(0.1);
        $pdf->StartTransform();
        $pdf->Rotate(30, $myX-90, $myY+50);
        $pdf->SetFont($vfont, $vfontbold, $vfontsize);
        $pdf->Text($myX, $myY ,trim('DRAFT'));
        $pdf->StopTransform();
        $pdf->SetAlpha(1);

        $pdf->lastPage();
        ob_clean();
        $output = 'draft' . date('Y_m_d_H_i_s') . '_.pdf';
        $pdf->Output("$output", 'I');
    }
}
