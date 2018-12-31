<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_rate extends CI_Model {

	function ajk($masa,$ijk)
	{
		
		$sql = "SELECT tarif_masa_$masa FROM m_rate WHERE id_jeniskredit = '".$ijk."' limit 1";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	 
	
	function getClaimPaidCount($condition)
	{
		$sql = 
		"SELECT COUNT(a.id) as jumlah , nomor_lks , nama_peserta , nama_tertanggung 
		from klaim a 
		WHERE id_status_klaim = 4 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function getNoClaimCount($condition)
	{
		$sql = 
		"SELECT  COUNT(a.id) as jumlah , nomor_lks , nama_peserta , nama_tertanggung 
		from klaim a 
		WHERE id_status_klaim = 5 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getTransaksiCount($condition)
	{
		$sql = 
		"SELECT COUNT(a.id) as jumlah , nomor_lks , nama_peserta , nama_tertanggung 
		from klaim a 
		WHERE id_status_klaim = 2 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getAllTransaksiCount($condition)
	{
		$sql = 
		"SELECT COUNT(a.id) as jumlah , nomor_lks , nama_peserta , nama_tertanggung 
		from klaim a 
                WHERE 1 = 1 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	
	function getClaimPaid($condition)
	{
		$sql = 
		"SELECT  nomor_lks , nama_peserta , nama_tertanggung 
		from klaim  
		WHERE id_status_klaim = 4 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function getNoClaim($condition)
	{
		$sql = 
		"SELECT   nomor_lks , nama_peserta , nama_tertanggung 
		from klaim  
		WHERE id_status_klaim = 5 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getTransaksi($condition)
	{
		$sql = 
		"SELECT  nomor_lks , nama_peserta , nama_tertanggung 
		from klaim  
		WHERE id_status_klaim = 2 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getAllTransaksi($condition)
	{
		$sql = 
		"SELECT  nomor_lks , nama_peserta , nama_tertanggung 
		from klaim  
                WHERE 1=1 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getPeserta($condition)
	{
		$sql = 
		"SELECT COUNT(1) as jumlah
		from m_peserta a 
                WHERE id_status_transaksi in (2,3) AND 1 = 1 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	} 
	
	function getAllProduk()
	{
		$sql = 
		"
		select a.nama_produk,count(b.kode_produk) as jumlah from m_produk a 
		left join m_peserta b on a.kode_produk = b.kode_produk group by a.kode_produk
		";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getProduk1($condition)
	{
		$sql = 
		"
		SELECT COUNT(1) as jumlah
		from m_peserta a 
                WHERE kode_produk in ('0001') AND 1 = 1 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getProduk2($condition)
	{
		$sql = 
		"
		SELECT COUNT(1) as jumlah
		from m_peserta a 
                WHERE kode_produk in ('0002') AND 1 = 1 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getProduk3($condition)
	{
		$sql = 
		"
		SELECT COUNT(1) as jumlah
		from m_peserta a 
                WHERE kode_produk in ('0003') AND 1 = 1 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	function getProduk4($condition)
	{
		$sql = 
		"
		SELECT COUNT(1) as jumlah
		from m_peserta a 
                WHERE kode_produk in ('0004') AND 1 = 1 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}	
	
	
	function getSumNilaiPertanggungan($condition)
	{
		$sql = "SELECT SUM(a.nilai_pertanggungan) AS total_pertanggungan FROM m_peserta a"
                        . " WHERE id_status_transaksi in (2,3) AND 1=1 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getSumPremi($condition)
	{
		$sql = "SELECT SUM(a.premi) AS total_premi FROM m_peserta a"
                        . " WHERE id_status_transaksi in (2,3) AND 1=1 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
		/* Semua Klaim : COUNT(1) tabel klaim
		laporan klaim baru: count(1) dan sum(claim_amount) tabel klaim where id_status_klaim = 6
		Menunggu Dokumen: count(1) dan sum(claim_amount) tabel klaim where id_status_klaim = 1
		Proses Verifikasi: count(1) dan sum(claim_amount) tabel klaim where id_status_klaim = 2
		Proses Pembayaran: count(1) dan sum(claim_amount) tabel klaim where id_status_klaim = 3
		Claim Paid: count(1) dan sum(claim_amount) tabel klaim where id_status_klaim = 4
		No Claim: count(1) dan sum(claim_amount) tabel klaim where id_status_klaim = 5
		Loss Ratio: (Laporan Klaim Baru + Menunggu Dokumen + Proses Verifikasi + Proses Pembayaran + Claim Paid) / Total Premi */
	
	
	
	function getAllKlaim($condition)
	{
		$sql = 
		"SELECT COUNT(1) as jumlah , SUM(a.claim_amount) AS total_amount
		from klaim a  
                WHERE 1=1 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getKlaimBaru($condition)
	{
		$sql = 
		"
		SELECT COUNT(1) as hitung , SUM(a.claim_amount) AS total_amount FROM klaim a 
		WHERE a.id_status_klaim = 6 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getDokumen($condition)
	{
		$sql = 
		"
		SELECT COUNT(1) as hitung , SUM(a.claim_amount) AS total_amount FROM klaim a 
		WHERE a.id_status_klaim = 1 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getVerifikasi($condition)
	{
		$sql = 
		"
		SELECT COUNT(1) as hitung , SUM(a.claim_amount) AS total_amount FROM klaim a 
		WHERE a.id_status_klaim = 2 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getPembayaran($condition)
	{
		$sql = 
		"
		SELECT COUNT(1) as hitung , SUM(a.claim_amount) AS total_amount FROM klaim a 
		WHERE a.id_status_klaim = 3 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getKlaimPaid($condition)
	{
		$sql = 
		"
		SELECT COUNT(1) as hitung , SUM(a.claim_amount) AS total_amount FROM klaim a 
		WHERE a.id_status_klaim = 4 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getNoKlaim($condition)
	{
		$sql = 
		"
		SELECT COUNT(1) as hitung , SUM(a.claim_amount) AS total_amount FROM klaim a 
		WHERE a.id_status_klaim = 5 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
        function getSumPremiOutstanding($condition)
	{
		$sql = "SELECT SUM(a.outstanding_premi) AS total_premi_outstanding FROM m_peserta a"
                        . " WHERE id_status_transaksi in (2,3) AND 1=1 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
        function getListPeserta()
	{
            $sql = "
            SELECT a.id_jeniskredit , c.nama_cabang_bws nama_cabang , jk.deskripsi jeniskredit,
            COUNT(a.id_peserta)  
            AS jumlah_peserta ,
            SUM(ifnull(a.premi,0))  
            AS jumlah_premi 
            FROM m_peserta a
            LEFT JOIN m_cabang_bws c on a.kc_kcp = c.kc_kcp 
            INNER JOIN m_jeniskredit jk on a.id_jeniskredit = jk.id_jeniskredit
            WHERE a.id_status_transaksi in (2,3) 
            ";
            $user = $this->ion_auth->user()->row();
            if (!$this->ion_auth->in_group(array('admin', 'cabangjasindo', 'manajemen', 'adminbank','pusatjasindo'))) {
                $sql .= " AND a.kc_kcp = '". $user->kc_kcp . "'";
            }
            $sql .= ' group by jk.deskripsi';
            $query = $this->db->query($sql);
            return $query->result_array();
	}
	
	function getListClaim()
	{
		$sql = 
		"
		SELECT 
		c.nama_cabang_bws, jk.deskripsi jeniskredit,		
		COUNT(a.id)  
		AS jumlah_peserta ,
		SUM(a.claim_amount)  
		AS jumlah_klaim 
		FROM klaim a inner join m_peserta p on a.id_peserta = p.id_peserta
		LEFT JOIN m_cabang_bws c on a.kc_kcp = c.kc_kcp 
		LEFT JOIN status_klaim s on a.id_status_klaim = s.id_status_klaim
                INNER JOIN m_jeniskredit jk on p.id_jeniskredit = jk.id_jeniskredit 
		WHERE a.id_status_klaim not in (5) ";
            $user = $this->ion_auth->user()->row();
            if (!$this->ion_auth->in_group(array('admin', 'cabangjasindo', 'manajemen', 'adminbank','pusatjasindo'))) {
                $sql .= " AND a.kc_kcp = '". $user->kc_kcp . "'";
            }
		$sql .= " group by jk.deskripsi 
		";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function getByProduk($condition,$idKredit)
	{
		$sql = "SELECT count(1) AS jumlah, id_jeniskredit, SUM(premi) AS total_premi FROM m_peserta"
				. " WHERE id_jeniskredit = '".$idKredit."' AND id_status_transaksi in (2,3) AND 1=1 ".$condition;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	 

} #end class M_rate

/* End of file M_rate.php */
/* Location: ./application/models/M_rate.php */    
