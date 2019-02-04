<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_dashboard extends CI_Model {

    function get_datasummary() {
        $sql = 'select count(1) count_data, sum(premi) total_premi, sum(tsi) total_tsi from m_peserta';

        $query = $this->db->query($sql);
        return $query->result_array();
    }

} 
