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

    function gen_polis($branch_id,$kode_cob,$tahun_priod) {
        $hostname = $this->db->hostname;
        $user = $this->db->username;
        $pass = $this->db->password;
        $db = $this->db->database;
        $connection = mysqli_connect($hostname, $user, $pass, $db);
        $result = mysqli_query($connection, "CALL SP_numbering('".$branch_id."','".$kode_cob."','".$tahun_priod."')") or die("query fail: " . mysqli_error());
        $row = mysqli_fetch_array($result);
        return $row['number'];
    }
}