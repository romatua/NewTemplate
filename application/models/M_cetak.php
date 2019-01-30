<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_cetak extends CI_Model {

    function get_peserta($id) {
        $sql = 'SELECT noref,custname,adrs,jobtitle,DATE_FORMAT(dob, "%d %b %Y") dob,ktp,premi,tsi,DATE_FORMAT(transdate, "%d %b %Y") transdate,DATE_FORMAT(enddate, "%d %b %Y") enddate,priod,type,policyinsuranceno,policyurl,statuspolicy,nobatch
        FROM m_peserta 
        WHERE id_peserta = "' . $id . '"';

        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    function is_sertifikat_generated($id,$policyurl) {
        $data = array('policyurl' => $policyurl);
        $this->db->where('id_peserta',$id);
        $this->db->update('m_peserta',$data);
    }

} 
/* End of file M_cetak.php */
/* Location: ./application/models/M_cetak.php */    
