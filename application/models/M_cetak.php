<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_cetak extends CI_Model {

    function get_peserta($id) {
        $sql = 'SELECT nomor_polis,nama_peserta, DATE_FORMAT(tgl_lahir, "%d/%b/%Y") AS tgl_lahir,jeniskelamin,b.deskripsi jenis_kredit,masa_asuransi, DATE_FORMAT(tgl_mulai, "%d/%b/%Y") AS tgl_mulai, DATE_FORMAT(tgl_akhir, "%d/%b/%Y") AS tgl_akhir,DATE_FORMAT(approved_date, "%e %M %Y") AS approved_date,nilai_pertanggungan,premi,nomor_pk,DATE_FORMAT(tgl_bayar, "%e %M %Y") AS tgl_bayar
                ,nomor_rekening, nama_cabang_bws
        FROM m_peserta a LEFT JOIN m_jeniskredit b ON a.id_jeniskredit = b.id_jeniskredit 
        LEFT JOIN m_jeniskelamin c ON a.id_jeniskelamin = c.id_jeniskelamin
        LEFT JOIN m_cabang_bws d on a.kc_kcp = d.kc_kcp
        WHERE id_peserta = "' . $id . '"';

        $query = $this->db->query($sql);
        return $query->result_array();
    }
/*FLOOR(DATEDIFF (NOW(), tgl_lahir)/365) AS age*/

} #end class M_peserta

/* End of file M_cetak.php */
/* Location: ./application/models/M_cetak.php */    
