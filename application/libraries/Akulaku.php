<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Akulaku {

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
    
    public function endofmassa($offset, $tglmulai) {
        return date('Y-m-d', strtotime("+$offset days", strtotime($tglmulai)));
    }
    
    public function getPremi($start, $end, $tsi) {
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
    
}

?>