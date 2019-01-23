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
        $this->load->model('M_cetak');
        $this->load->database();
        $this->load->helper('url');
        $this->load->model('Grocery_crud_model');
    }

    public function index() {
        echo "<h1> Link Belum Tersedia!</h1>";
    }

    public function draft()
    {
        ini_set('memory_limit', '1024M');
        //============================================================+
        // File name   : example_001.php
        //
        // Description : Example 001 for TCPDF class
        //               Default Header and Footer
        //
        // Author: Muhammad Saqlain Arif
        //
        // (c) Copyright:
        //               Muhammad Saqlain Arif
        //               PHP Latest Tutorials
        //               http://www.phplatesttutorials.com/
        //               saqlain.sial@gmail.com
        //============================================================+
        // create new PDF document
        //print_r($this->uri->segment(3));die();
        $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Jasindo');
        $pdf->SetTitle('Draft Peserta');
        $pdf->SetSubject('Draft Peserta');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        // set default header data
        $logo = 'logo2.png'; //'PDF_HEADER_LOGO';
        //$header_title = 'BERITA ACARA PEMERIKSAAN KERUSAKAN';
        $pdf->SetHeaderData("", "", "", "", array(0, 64, 0), array(255,255,255));
        // $pdf->SetHeaderData($logo, PDF_HEADER_LOGO_WIDTH, '', '', '', array(255,255,255));
        $pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, '18px', PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        //$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
            require_once(dirname(__FILE__) . '/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        // ---------------------------------------------------------    
        // set default font subsetting mode
        $pdf->setFontSubsetting(true);

        // Set font
        // dejavusans is a UTF-8 Unicode font, if you only need to
        // print standard ASCII chars, you can use core fonts like
        // helvetica or times to reduce file size.
        $pdf->SetFont('dejavusans', '', 8, '', true);

        
        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();
        $data2['data'] = $this->M_cetak->get_peserta(urldecode($this->uri->segment(3)));
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
        /*$data['persyaratan']                = "- Debitur dalam keadaan sehat dan tidak dirawat dirumah sakit"."<br>".
                                              "- Subjet to no claim up to tanggal"."<br>".
                                              "- Usia + Masa pertanggungan maksimal 75 Tahun (Tenor max 15 Tahun)"."<br>".
                                              "- Usia Masuk 20-74 Tahun";*/
        /*`nomor_polis``nama_peserta``tmp_lahir``tgl_lahir``id_kredit``jenis_kelamin``tgl_mulai``masa_asuransi``grace_priode``nilai_pertanggungan``usia_masuk``tgl_akhir``usia_jatuhtempo``tarif_premi``premi``nomor_PK`*/
        // print_r($data);die();
        $html = $this->load->view('v_draft', $data, true);
            // Print text using writeHTMLCell()
        $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

        $vfont = "dejavusans";
        $vfontsize = 99;
        $vfontbold = "B";
// Calcular ancho de la cadena
        $widthtext = $pdf->GetStringWidth(trim('DRAFT'), $vfont, $vfontbold, $vfontsize, false );
        $widthtextcenter = round(($widthtext * sin(deg2rad(45))) / 2 ,0);
// Get the page width/height
        $myPageWidth = $pdf->getPageWidth();
        $myPageHeight = $pdf->getPageHeight();
// Find the middle of the page and adjust.
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

        // set text shadow effect
        //$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));

        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.
        $output = 'draft' . date('Y_m_d_H_i_s') . '_.pdf';
        $pdf->Output("$output", 'I');
        //$pdf->Output('example_001.pdf', 'I');    
        //============================================================+
        // END OF FILE
        //============================================================+
    }
    public function sertifikat()
    {
        ini_set('memory_limit', '1024M');
        //============================================================+
        // File name   : example_001.php
        //
        // Description : Example 001 for TCPDF class
        //               Default Header and Footer
        //
        // Author: Muhammad Saqlain Arif
        //
        // (c) Copyright:
        //               Muhammad Saqlain Arif
        //               PHP Latest Tutorials
        //               http://www.phplatesttutorials.com/
        //               saqlain.sial@gmail.com
        //============================================================+
        // create new PDF document
        //print_r($this->uri->segment(3));die();
        $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        // set document information
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Jasindo');
        $pdf->SetTitle('Sertifikat Peserta');
        $pdf->SetSubject('Sertifikat Peserta');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        // set default header data
        $logo = 'logo2.png'; //'PDF_HEADER_LOGO';
        //$header_title = 'BERITA ACARA PEMERIKSAAN KERUSAKAN';
        $pdf->SetHeaderData("", "", "", "", array(0, 64, 0), array(255,255,255));
        // $pdf->SetHeaderData($logo, PDF_HEADER_LOGO_WIDTH, '', '', '', array(255,255,255));
        $pdf->setFooterData(array(0, 64, 0), array(0, 64, 128));

        // set header and footer fonts
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $pdf->SetMargins(PDF_MARGIN_LEFT, '18px', PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        //$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
            require_once(dirname(__FILE__) . '/lang/eng.php');
            $pdf->setLanguageArray($l);
        }

        // ---------------------------------------------------------    
        // set default font subsetting mode
        $pdf->setFontSubsetting(true);

        // Set font
        // dejavusans is a UTF-8 Unicode font, if you only need to
        // print standard ASCII chars, you can use core fonts like
        // helvetica or times to reduce file size.
        $pdf->SetFont('dejavusans', '', 8, '', true);

        // Add a page
        // This method has several options, check the source code documentation for more information.
        $pdf->AddPage();
        $data2['data'] = $this->M_cetak->get_peserta(urldecode($this->uri->segment(3)));
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
        /*$data['persyaratan']                = "- Debitur dalam keadaan sehat dan tidak dirawat dirumah sakit"."<br>".
                                              "- Subjet to no claim up to tanggal"."<br>".
                                              "- Usia + Masa pertanggungan maksimal 75 Tahun (Tenor max 15 Tahun)"."<br>".
                                              "- Usia Masuk 20-74 Tahun";*/
        /*`nomor_polis``nama_peserta``tmp_lahir``tgl_lahir``id_kredit``jenis_kelamin``tgl_mulai``masa_asuransi``grace_priode``nilai_pertanggungan``usia_masuk``tgl_akhir``usia_jatuhtempo``tarif_premi``premi``nomor_PK`*/
        // print_r($data);die();
        $html = $this->load->view('v_sertifikat', $data, true);
            // Print text using writeHTMLCell()
        $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
        $pdf->lastPage();
        ob_clean();

        // set text shadow effect
        //$pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));

        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.
        $output = 'sertifikat' . date('Y_m_d_H_i_s') . '_.pdf';
        $pdf->Output("$output", 'I');
        //$pdf->Output('example_001.pdf', 'I');    
        //============================================================+
        // END OF FILE
        //============================================================+
    }
}

/* End of file cetak.php */
/* Location: ./application/controllers/c_test.php */
