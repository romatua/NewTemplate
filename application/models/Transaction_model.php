<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author Pisyek Kumar
 * @email pisyek@gmail.com
 * @link http://www.pisyek.com
 */
class Transaction_model extends CI_Model {

    function insert_registerpeserta($data) {
        $sql = "INSERT INTO m_peserta(noref,custname,adrs,jobtitle,dob,ktp,premi,tsi,transdate"
                . ",enddate,priod,type,policyinsuranceno,policyurl,statuspolicy,nobatch,created_date,created_by) "
                . "VALUES('" . $data['noref'] . "',"
                . "'" . $data['custname'] . "',"
                . "'" . $data['adrs'] . "',"
                . "'" . $data['jobtitle'] . "',"
                . "'" . $data['dob'] . "',"
                . "'" . $data['ktp'] . "',"
                . "'" . $data['premi'] . "',"
                . "'" . $data['tsi'] . "',"
                . "'" . $data['transdate'] . "',"
                . "'" . $data['enddate'] . "',"
                . "'" . $data['priod'] . "',"
                . "'" . $data['type'] . "',"
                . "'" . $data['policyinsuranceno'] . "',"
                . "'" . $data['policyurl'] . "',"
                . "'" . $data['statuspolicy'] . "',"
                . "'" . $data['nobatch'] . "',"
                . "'" . $data['created_date'] . "',"
                . "'" . $data['created_by'] . "')";

        $table = $this->db->query($sql);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }
}