<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * @author Pisyek Kumar
 * @email pisyek@gmail.com
 * @link http://www.pisyek.com
 */
class Transaction_model extends CI_Model {
    function update_payment_by_va($data){
        $query = "UPDATE m_peserta SET
            id_payment = ".((isset($data['id_payment']))?"'".$data['id_payment']."'":"id_payment").",
            id_status_transaksi = ".((isset($data['id_status_transaksi']))?"'".$data['id_status_transaksi']."'":"id_status_transaksi").",
            nomor_polis = ".((isset($data['nomor_polis']))?"'".$data['nomor_polis']."'":"nomor_polis").",
            tgl_bayar = ".((isset($data['tgl_bayar']))?"'".$data['tgl_bayar']."'":"tgl_bayar").",
            approved_date = ".((isset($data['approved_date']))?"'".$data['approved_date']."'":"approved_date").",
            approved_by = ".((isset($data['approved_by']))?"'".$data['approved_by']."'":"approved_by").",
            payment_amount = ".((isset($data['payment_amount']))?"'".$data['payment_amount']."'":"payment_amount").",
            cumulative_payment_amount = ".((isset($data['cumulative_payment_amount']))?"'".$data['cumulative_payment_amount']."'":"cumulative_payment_amount").",
            datetime_payment = ".((isset($data['datetime_payment']))?"'".$data['datetime_payment']."'":"datetime_payment").",
            datetime_payment_iso8601 = ".((isset($data['datetime_payment_iso8601']))?"'".$data['datetime_payment_iso8601']."'":"datetime_payment_iso8601")."
        WHERE nomor_vacc = '".$data['trx_id']."'";
       
        if($this->db->query($query)) {
            return true;
        } else { return false; }        
    }
    
    function update_aging_klaim(){
        $query = "call sp_update_aging_klaim()";
        
        if($this->db->query($query)) {
            return true;
        } else { return false; }        
    }

    function update_dokumen_lengkap(){
        $query = "call sp_automatic_update_doklengkap()";
        
        if($this->db->query($query)) {
            return true;
        } else { return false; }        
    }

    function insert_dokklaim($id_klaim, $created_by){
        $data = array('id_klaim' => $id_klaim, 'created_by' => $created_by);
//        $str = $this->db->insert_string('table_name', $data);
        $this->db->insert('dokklaim', $data);
        return $this->db->insert_id();
        
//        $query = "insert into dokklaim(id_klaim, created_by) values('".$id_klaim."','".$created_by."')";
//        
//        if($this->db->query($query)) {
//            return true;
//        } else { return false; }        
    }
}