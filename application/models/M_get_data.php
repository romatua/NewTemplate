<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_get_data extends CI_Model {

    function get_log_persetujuan($value = '', $primary_key = null) {
        $id = $primary_key;
        $sql = 'SELECT a.`created_date`,a.`created_by`,a.`keterangan`,b.`deskripsi` '
                . 'FROM log_keterangan_klaim a '
                . 'LEFT JOIN status_klaim b ON a.`id_status_klaim` = b.`id_status_klaim` '
                . 'WHERE a.id_klaim= "' . $id . '" '
                . 'ORDER BY a.created_date';
        $rowcount = $this->db->query($sql)->num_rows();
        $get_notes = $this->db->query($sql)->result_array();
        $to_show = "";
        //$to_show = "<div class:'form-field-box even'>";

        if ($rowcount > 0) {
            $to_show .= "<div class='kotak'>
            <table class='paleBlueRows'>
            <thead> 
            <tr>
              <th>Tanggal</th>
              <th>User</th>
              <th width='30%'>Status Klaim</th>
              <th width='40%'>Keterangan</th>
              
            </tr>
            </thead>
            <tbody>
            ";

            foreach ($get_notes as $getnotes) {
                $to_show .= "
                <tr valign='top'>
                  <td>" . $getnotes['created_date'] . "</td>
                  <td>" . $getnotes['created_by'] . "</td>
                  <td>" . $getnotes['deskripsi'] . "</td>    
                  <td>" . $getnotes['keterangan'] . "</td>
                  
                </tr>";
            }
            $to_show .= "
                </tbody>
        </table> 
        </div>
        <br>
        ";
        }
        //*/
        //$to_show .= "</div>";
        return "" . $to_show;
    }
    
    function read_documentgap($value = '', $primary_key = null) {
        $id = $primary_key;
        $sql = "select a.id_jenisklaim
                    , concat(
                        case when ifnull(b.dok_surat_pengajuan_klaim,'') = '' and id_jenisklaim in (1,2,3,4) then ' SURAT PENGAJUAN KLAIM, ' else '' end
                        , case when ifnull(b.dok_copy_polis,'') = '' and id_jenisklaim in (1,2,3,4) then ' COPY POLIS / SERTIFIKAT, ' else '' end
                        , case when ifnull(b.dok_surat_pernyataan_kesehatan,'') = '' and id_jenisklaim in (1,2,3,4) then ' SURAT PERNYATAAN KESEHATAN,<br> ' else '' end
                        , case when ifnull(b.dok_kartu_keluarga_peserta,'') = '' and id_jenisklaim in (1,2,3,4) then ' KARTU KELUARGA PESERTA, ' else '' end
                        , case when ifnull(b.dok_ktp_peserta,'') = '' and id_jenisklaim in (1,2,3,4) then ' KTP PESERTA, ' else '' end
                        , case when ifnull(b.dok_copy_perjanjian_kredit,'') = '' and id_jenisklaim in (1,2,3,4) then ' COPY PERJANJIAN KREDIT,<br> ' else '' end
                        , case when ifnull(b.dok_copy_polis,'') = '' and id_jenisklaim in (1,2,3,4) then ' COPY POLIS / SERTIFIKAT, ' else '' end
                        , case when ifnull(b.dok_copy_loan_inquiry,'') = '' and id_jenisklaim in (1,2,3,4) then ' COPY LOAN INQUIRY,<br> ' else '' end
                        , case when ifnull(b.dok_surat_kematian,'') = '' and id_jenisklaim in (1) then ' SURAT KEMATIAN, ' else '' end
                        , case when ifnull(b.dok_laporan_kerugian,'') = '' and id_jenisklaim in (1) then ' LAPORAN KERUGIAN, ' else '' end
                        , case when ifnull(b.dok_fk_01_02,'') = '' and id_jenisklaim in (1) then ' FK 01 / 02,<br> ' else '' end
                        , case when ifnull(b.dok_kronologis_klaim,'') = '' and id_jenisklaim in (1) then ' KRONOLOGIS KLAIM, ' else '' end
                        , case when ifnull(b.dok_surat_keterangan_ahli_waris,'') = '' and id_jenisklaim in (1) then ' SURAT KETERANGAN AHLI WARIS, ' else '' end
                        , case when ifnull(b.dok_kartu_keluarga_ahli_waris,'') = '' and id_jenisklaim in (1) then ' KARTU KELUARGA AHLI WARIS,<br> ' else '' end
                        , case when ifnull(b.dok_ktp_ahli_waris,'') = '' and id_jenisklaim in (1) then ' KTP AHLI WARIS, ' else '' end
                        , case when ifnull(b.dok_copy_sim_peserta,'') = '' and id_jenisklaim in (1) then ' COPY SIM PESERTA, ' else '' end
                        , case when ifnull(b.dok_sk_pengangkatan,'') = '' and id_jenisklaim in (2,3) then ' SK PENGANGKATAN, ' else '' end
                        , case when ifnull(b.dok_sk_phk_paw,'') = '' and id_jenisklaim in (2,3) then ' SK PHK / PAW,<br> ' else '' end
                        , case when ifnull(b.dok_surat_keterangan_macet,'') = '' and id_jenisklaim in (4) then ' SURAT KETERANGAN MACET, ' else '' end
                        , case when ifnull(b.dok_printout_bi_checking,'') = '' and id_jenisklaim in (4) then ' PRINT OUT BI CHECKING, ' else '' end
                        , case when ifnull(b.dok_surat_peringatan,'') = '' and id_jenisklaim in (4) then ' SURAT PERINGATAN 1, 2, 3, ' else '' end
                     ) gap
                    , b.* 
                from klaim a
                inner join dokklaim b on a.id = b.id_klaim
                "
                . "WHERE a.id= '" . $id . "' "
                ;
        $rowcount = $this->db->query($sql)->num_rows();
        $get_notes = $this->db->query($sql)->result_array();
        $to_show = "";
        //$to_show = "<div class:'form-field-box even'>";

        if ($rowcount > 0) {
            foreach ($get_notes as $getnotes) {
                $to_show .= $getnotes['gap'];
            }
        }
        //*/
        //$to_show .= "</div>";
        return "" . $to_show;
    }
    
    function get_last_log_history($id = null){
        $sql = 'SELECT a.`created_date`,a.`created_by`,a.`keterangan`,b.`deskripsi` '
                . 'FROM log_keterangan_klaim a '
                . 'LEFT JOIN status_klaim b ON a.`id_status_klaim` = b.`id_status_klaim` '
                . 'WHERE a.id_klaim= "' . $id . '" '
                . 'ORDER BY a.created_date DESC LIMIT 1';
        $query = $this->db->query($sql);
        return $query->result_array();        
    }
    
    function get_documentgap($id = null){
        $sql = "select a.id_jenisklaim
                    , concat(
                        case when ifnull(b.dok_surat_pengajuan_klaim,'') = '' and id_jenisklaim in (1,2,3,4) then ' SURAT PENGAJUAN KLAIM, ' else '' end
                        , case when ifnull(b.dok_copy_polis,'') = '' and id_jenisklaim in (1,2,3,4) then ' COPY POLIS / SERTIFIKAT, ' else '' end
                        , case when ifnull(b.dok_surat_pernyataan_kesehatan,'') = '' and id_jenisklaim in (1,2,3,4) then ' SURAT PERNYATAAN KESEHATAN,<br> ' else '' end
                        , case when ifnull(b.dok_kartu_keluarga_peserta,'') = '' and id_jenisklaim in (1,2,3,4) then ' KARTU KELUARGA PESERTA, ' else '' end
                        , case when ifnull(b.dok_ktp_peserta,'') = '' and id_jenisklaim in (1,2,3,4) then ' KTP PESERTA, ' else '' end
                        , case when ifnull(b.dok_copy_perjanjian_kredit,'') = '' and id_jenisklaim in (1,2,3,4) then ' COPY PERJANJIAN KREDIT,<br> ' else '' end
                        , case when ifnull(b.dok_copy_polis,'') = '' and id_jenisklaim in (1,2,3,4) then ' COPY POLIS / SERTIFIKAT, ' else '' end
                        , case when ifnull(b.dok_copy_loan_inquiry,'') = '' and id_jenisklaim in (1,2,3,4) then ' COPY LOAN INQUIRY,<br> ' else '' end
                        , case when ifnull(b.dok_surat_kematian,'') = '' and id_jenisklaim in (1) then ' SURAT KEMATIAN, ' else '' end
                        , case when ifnull(b.dok_laporan_kerugian,'') = '' and id_jenisklaim in (1) then ' LAPORAN KERUGIAN, ' else '' end
                        , case when ifnull(b.dok_fk_01_02,'') = '' and id_jenisklaim in (1) then ' FK 01 / 02,<br> ' else '' end
                        , case when ifnull(b.dok_kronologis_klaim,'') = '' and id_jenisklaim in (1) then ' KRONOLOGIS KLAIM, ' else '' end
                        , case when ifnull(b.dok_surat_keterangan_ahli_waris,'') = '' and id_jenisklaim in (1) then ' SURAT KETERANGAN AHLI WARIS, ' else '' end
                        , case when ifnull(b.dok_kartu_keluarga_ahli_waris,'') = '' and id_jenisklaim in (1) then ' KARTU KELUARGA AHLI WARIS,<br> ' else '' end
                        , case when ifnull(b.dok_ktp_ahli_waris,'') = '' and id_jenisklaim in (1) then ' KTP AHLI WARIS, ' else '' end
                        , case when ifnull(b.dok_copy_sim_peserta,'') = '' and id_jenisklaim in (1) then ' COPY SIM PESERTA, ' else '' end
                        , case when ifnull(b.dok_sk_pengangkatan,'') = '' and id_jenisklaim in (2,3) then ' SK PENGANGKATAN, ' else '' end
                        , case when ifnull(b.dok_sk_phk_paw,'') = '' and id_jenisklaim in (2,3) then ' SK PHK / PAW,<br> ' else '' end
                        , case when ifnull(b.dok_surat_keterangan_macet,'') = '' and id_jenisklaim in (4) then ' SURAT KETERANGAN MACET, ' else '' end
                        , case when ifnull(b.dok_printout_bi_checking,'') = '' and id_jenisklaim in (4) then ' PRINT OUT BI CHECKING, ' else '' end
                        , case when ifnull(b.dok_surat_peringatan,'') = '' and id_jenisklaim in (4) then ' SURAT PERINGATAN 1, 2, 3, ' else '' end
                     ) gap
                    , b.* 
                from klaim a
                inner join dokklaim b on a.id = b.id_klaim
                "
                . "WHERE a.id= '" . $id . "' "
                ;
        $query = $this->db->query($sql);
        return $query->result_array();        
    }
    
    function get_klaim($id = null){
        $sql = 'SELECT a.*, b.jenisklaim '
                . 'FROM klaim a '
                . 'INNER JOIN m_jenisklaim b ON a.id_jenisklaim = b.id_jenisklaim '
                . 'WHERE a.id= "' . $id . '" '
                . 'ORDER BY a.created_date DESC LIMIT 1';
        $query = $this->db->query($sql);
        return $query->result_array();        
    }

    function get_dokklaim($id = null){
        $sql = 'SELECT b.id_status_klaim, a.* '
                . 'FROM dokklaim a INNER JOIN klaim b on a.id_klaim = b.id '
                . 'WHERE a.id_klaim= "' . $id . '" '
                . 'LIMIT 1';
        $query = $this->db->query($sql);
        return $query->result_array();        
    }

    function get_peserta($id = null){
        $sql = 'SELECT a.* '
                . 'FROM m_peserta a '
                . 'WHERE a.id_peserta= "' . $id . '" ';
        
        $query = $this->db->query($sql);
        return $query->result_array();        
    }

    function get_jenisklaimbyid($id = null){
        $sql = 'SELECT * '
                . 'FROM m_jenisklaim a '
                . 'WHERE a.id_jenisklaim = "' . $id . '" ';
        
        $query = $this->db->query($sql);
        return $query->result_array();        
    }
    
    function get_namacabangbws($kodecabangbws = null){
        $sql = 'SELECT * '
                . 'FROM m_cabang_bws a '
                . 'WHERE a.kc_kcp = "' . $kodecabangbws . '" ';
        
        $query = $this->db->query($sql);
        return $query->result_array();        
    }
    
    function get_statusklaim($id_status_klaim = null){
        $sql = 'SELECT * '
                . 'FROM status_klaim a '
                . 'WHERE a.id_status_klaim = "' . $id_status_klaim . '" ';
        
        $query = $this->db->query($sql);
        return $query->result_array();        
    }
    function get_list_dokumen_klaim2($status_klaim = null){
        //`mapping_dokumenklaim``is_meninggaldunia``is_phk``is_paw``is_kreditmacet`
        $sql = 'SELECT * '
                . 'FROM mapping_dokumenklaim a '
                . 'WHERE a.' . $status_klaim . ' = "1" ';
        
        $query = $this->db->query($sql);
        return $query->result_array();        
    }
    function get_list_dokumen_klaim($status_klaim = null){
        //`mapping_dokumenklaim``is_meninggaldunia``is_phk``is_paw``is_kreditmacet`
        //SELECT * FROM `mapping_dokumenklaim` WHERE `list_jenis_klaim` LIKE '%1%'
        $sql = 'SELECT * '
                . 'FROM mapping_dokumenklaim a '
                . 'WHERE a.list_jenis_klaim LIKE "%'.$status_klaim.'%" ';
        
        $query = $this->db->query($sql);
        return $query->result_array();        
    }
    
    function get_admincabang(){
        $sql = "select GROUP_CONCAT(distinct c.email SEPARATOR ', ') email
            from groups a
            inner join users_groups b on a.id = b.group_id
            inner join users c on b.user_id = c.id
            where a.name = 'cabangjasindo' and ifnull(c.email,'') <> ''
            ";
        
        $query = $this->db->query($sql);
        return $query->result_array();        
    }
    
}

#end class 

/* End of file blog_model.php */
/* Location: ./application/models/blog_model.php */    
