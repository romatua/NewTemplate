<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_wsbpdbali extends CI_Model {

    public function insertdebitur($executed) {
        $sqlqry = "INSERT INTO m_peserta(nik, nama_peserta, tgl_lahir, id_jeniskelamin, id_jeniskredit, tgl_mulai, masa_asuransi, tgl_akhir, nilai_pertanggungan
    , tarif_premi, premi_jasindo, premi, outstanding_premi, nomor_PK, id_status_transaksi, nomor_rekening, created_by, created_date, kc_kcp
    , is_refund, nilai_refund, alamat_agunan, alamat_peserta, pekerjaan, status) 
select a.nik, a.nama_peserta, a.tgl_lahir, a.id_jeniskelamin, a.id_jeniskredit, a.tanggal_PK tgl_mulai, a.masa_asuransi, DATE_ADD(a.tanggal_PK, INTERVAL a.masa_asuransi MONTH) tgl_akhir,a.nilai_pertanggungan
    , a.tarif_premi, a.premi premi_jasindo, a.premi, a.premi outstanding_premi, a.nomor_PK, 1 id_status_transaksi, a.nomor_rekening, 'H2H' created_by, now() created_date, a.kc_kcp
    , 0 is_refund, 0 nilai_refund, a.alamat_agunan, a.alamat_peserta, a.pekerjaan, a.status
from ws_bpdbali a
left join m_peserta b on a.nomor_PK = b.nomor_PK
where b.id_peserta is null";

        //$query = $this->db->query($sqlqry);
        
        $msg = '';
        if($this->db->query($sqlqry))
        {
            $msg = "".$executed." data berhasil di proses, ".$this->db->affected_rows()." data debitur baru berhasil ditambahkan.";
        }
        else
        {
            $msg = "Proses H2H gagal.";
        }
        
        return $msg;
    }
    
    function deleteexistingcalonpeserta()
    {
        $sql = "delete a
                from m_peserta a
                where a.id_status_transaksi = 1";
        if($this->db->query($sql)) { return true; } else { return false; }
    }
	 
    function deletetemporary($kc_kcp)
    {
        $sql = "delete from ws_bpdbali_kckcp where kc_kcp = '".$kc_kcp."';";
        if($this->db->query($sql)) { return true; } else { return false; }
    }
	 
    function deleteexistingcalonpesertabykckcp($kc_kcp)
    {
        $sql = "delete a
                from m_peserta a
                where a.id_status_transaksi = 1 and kc_kcp = '".$kc_kcp."';";        
        if($this->db->query($sql)) { return true; } else { return false; }
    }
	 
    function insertdebiturbykc_kcp($executed,$kc_kcp) {
        $sqlqry = "INSERT INTO m_peserta(nik, nama_peserta, tgl_lahir, id_jeniskelamin, id_jeniskredit, tgl_mulai, masa_asuransi, tgl_akhir, nilai_pertanggungan
    , tarif_premi, premi_jasindo, premi, outstanding_premi, nomor_PK, id_status_transaksi, nomor_rekening, created_by, created_date, kc_kcp
    , is_refund, nilai_refund, alamat_agunan, alamat_peserta, pekerjaan, status) 
select a.nik, a.nama_peserta, a.tgl_lahir, a.id_jeniskelamin, a.id_jeniskredit, a.tanggal_PK tgl_mulai, a.masa_asuransi, DATE_ADD(a.tanggal_PK, INTERVAL a.masa_asuransi MONTH) tgl_akhir,a.nilai_pertanggungan
    , a.tarif_premi, a.premi premi_jasindo, a.premi, a.premi outstanding_premi, a.nomor_PK, 1 id_status_transaksi, a.nomor_rekening, 'H2H' created_by, now() created_date, a.kc_kcp
    , 0 is_refund, 0 nilai_refund, a.alamat_agunan, a.alamat_peserta, a.pekerjaan, a.status
from ws_bpdbali_kckcp a
left join m_peserta b on a.nomor_PK = b.nomor_PK
where b.id_peserta is null and a.kc_kcp = '".$kc_kcp."';";

        //$query = $this->db->query($sqlqry);
        
        $msg = '';
        if($this->db->query($sqlqry))
        {
            $msg = "".$executed." data berhasil di proses, ".$this->db->affected_rows()." data debitur baru berhasil ditambahkan.";
        }
        else
        {
            $msg = "Proses H2H gagal.";
        }
        
        return $msg;
    }
	 

} #end class M_rate

/* End of file M_rate.php */
/* Location: ./application/models/M_rate.php */    
