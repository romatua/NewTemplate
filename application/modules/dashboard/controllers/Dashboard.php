<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends MX_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }

        $this->load->database();
        $this->load->helper('url');
        //$this->load->library('grocery_CRUD');
        $this->load->library('custom_grocery_crud');
		$this->load->Model('M_rate');
    }
	
	//================ Start Agen======================================================================================================
    public function dashboard_manajemen() {
		
        $userid = $this->ion_auth->get_user_id();
        $user = $this->ion_auth->user()->row();
        $usercabang = $user->id_cabang;
        $useragen_id = $user->id;
		$user_group = $user->username; 

	if (!$this->ion_auth->in_group(array('admin', 'cabang', 'manajemen', 'adminbank'))) { 
		$condition = " AND kc_kcp = '".$user->kc_kcp."'";
        } else { 
            $condition = "";             
        }
                
		$data = array();
		//$param1 = $useragen_id;
		//$param2 = $usercabang;
		$data_peserta_count = $this->M_rate->getPeserta($condition);
		$data['data_peserta_count'] = $data_peserta_count;
		
		$data_peserta_np = $this->M_rate->getSumNilaiPertanggungan($condition);
		$data['data_peserta_np'] = $data_peserta_np;
		
		$data_peserta_premi = $this->M_rate->getSumPremi($condition);
		$data['data_peserta_premi'] = $data_peserta_premi;
		
		$data_claim_paid_count = $this->M_rate->getClaimPaidCount($condition);
		$data['data_claim_paid_count'] = $data_claim_paid_count;
		
		$data_no_claim_count = $this->M_rate->getNoClaimCount($condition);
		$data['data_no_claim_count'] = $data_no_claim_count;
		
		$data_transaksi_count = $this->M_rate->getTransaksiCount($condition);
		$data['data_transaksi_count'] = $data_transaksi_count;
		
		$all_transaksi_count = $this->M_rate->getAllTransaksiCount($condition);
		$data['all_transaksi_count'] = $all_transaksi_count;
		
		//------------------------------------------------------
		
		
		$data_klaim_baru = $this->M_rate->getKlaimBaru($condition);
		$data['data_klaim_baru'] = $data_klaim_baru;
		
		$data_semua_klaim = $this->M_rate->getAllKlaim($condition);
		$data['data_semua_klaim'] = $data_semua_klaim;
		
		$data_semua_klaim = $this->M_rate->getAllKlaim($condition);
		$data['data_semua_klaim'] = $data_semua_klaim;
		
		$data_menuggu_dokumen = $this->M_rate->getDokumen($condition);
		$data['data_menuggu_dokumen'] = $data_menuggu_dokumen;
		
		$data_proses_verifikasi = $this->M_rate->getVerifikasi($condition);
		$data['data_proses_verifikasi'] = $data_proses_verifikasi;
		
		$data_proses_pembayaran = $this->M_rate->getPembayaran($condition);
		$data['data_proses_pembayaran'] = $data_proses_pembayaran;
		
		$data_klaim_paid = $this->M_rate->getKlaimPaid($condition);
		$data['data_klaim_paid'] = $data_klaim_paid;
		
		$data_no_klaim = $this->M_rate->getNoKlaim($condition);
		$data['data_no_klaim'] = $data_no_klaim;
		
//		$data_produk1 = $this->M_rate->getProduk1($condition);
//		$data['data_produk1'] = $data_produk1;
//		
//		$data_produk2 = $this->M_rate->getProduk2($condition);
//		$data['data_produk2'] = $data_produk2;
//		
//		$data_produk3 = $this->M_rate->getProduk3($condition);
//		$data['data_produk3'] = $data_produk3;
//		
//		$data_produk4 = $this->M_rate->getProduk4($condition);
//		$data['data_produk4'] = $data_produk4;
//		
//		$data_all_produk = $this->M_rate->getAllProduk();
//		$data['data_all_produk'] = $data_all_produk;

		//echo "<pre>"; print_r($data_all_produk); die();
		
		
		
		
		//---------------------------------------------------

		$kuk_konsumsi_perumahan = $this->M_rate->getByProduk($condition,$idKredit='12');
		$data['kuk_konsumsi_perumahan'] = $kuk_konsumsi_perumahan;
		
		$kuk_kupp_modal_kerja_retail = $this->M_rate->getByProduk($condition,$idKredit='15');
		$data['kuk_kupp_modal_kerja_retail'] = $kuk_kupp_modal_kerja_retail;
		
		$non_kuk_konsumsi_profesi = $this->M_rate->getByProduk($condition,$idKredit='23');
		$data['non_kuk_konsumsi_profesi'] = $non_kuk_konsumsi_profesi;

		$non_kuk_konsumsi_pegawai_bpd = $this->M_rate->getByProduk($condition,$idKredit='24');
		$data['non_kuk_konsumsi_pegawai_bpd'] = $non_kuk_konsumsi_pegawai_bpd;
		
		$non_kuk_konsumsi_kendaraan = $this->M_rate->getByProduk($condition,$idKredit='25');
		$data['non_kuk_konsumsi_kendaraan'] = $non_kuk_konsumsi_kendaraan;
		
		$non_kuk_konsumsi_perumahan = $this->M_rate->getByProduk($condition,$idKredit='26');
		$data['non_kuk_konsumsi_perumahan'] = $non_kuk_konsumsi_perumahan;
		
		$non_kuk_konsumsi_alat_rt = $this->M_rate->getByProduk($condition,$idKredit='27');
		$data['non_kuk_konsumsi_alat_rt'] = $non_kuk_konsumsi_alat_rt;
		
		$kuk_kupp_investasi_retail = $this->M_rate->getByProduk($condition,$idKredit='32');
		$data['kuk_kupp_investasi_retail'] = $kuk_kupp_investasi_retail;
		
		$krd_karyawan_tujuan_properti = $this->M_rate->getByProduk($condition,$idKredit='54');
		$data['krd_karyawan_tujuan_properti'] = $krd_karyawan_tujuan_properti;
		
		$krd_multiguna_peralihan = $this->M_rate->getByProduk($condition,$idKredit='57');
		$data['krd_multiguna_peralihan'] = $krd_multiguna_peralihan;
		
		$kredit_karyawan = $this->M_rate->getByProduk($condition,$idKredit='62');
		$data['kredit_karyawan'] = $kredit_karyawan;
		
		$krd_multiguna_pppk = $this->M_rate->getByProduk($condition,$idKredit='67');
		$data['krd_multiguna_pppk'] = $krd_multiguna_pppk;
		
		$kupp_ki_peralihan = $this->M_rate->getByProduk($condition,$idKredit='68');
		$data['kupp_ki_peralihan'] = $kupp_ki_peralihan;
		
		//------------------------------------------------------
		
		
		$data_claim_paid = $this->M_rate->getClaimPaid($condition);
		$data['data_claim_paid'] = $data_claim_paid;
		
		$data_no_claim = $this->M_rate->getNoClaim($condition);
		$data['data_no_claim'] = $data_no_claim;
		
		$data_transaksi = $this->M_rate->getTransaksi($condition);
		$data['data_transaksi'] = $data_transaksi;
		
		$all_transaksi = $this->M_rate->getAllTransaksi($condition);
		$data['all_transaksi'] = $all_transaksi;
		
		//echo "<pre>"; print_r($all_transaksi); die();
		$data_list_peserta = $this->M_rate->getListPeserta();
		$data['data_list_peserta'] = $data_list_peserta;
		
		
		$data_list_claim = $this->M_rate->getListClaim();
		$data['data_list_claim'] = $data_list_claim;
                
                $data_peserta_premi_outstanding = $this->M_rate->getSumPremiOutstanding($condition);
		$data['data_peserta_premi_outstanding'] = $data_peserta_premi_outstanding;
		
        $this->load->view('standar/header_ultra');
        $this->load->view('standar/sidebar_ultra');
        $this->load->view('standar/top_navigation_ultra');
        $this->load->view('dashboard_ultra' , array('data' => $data));
        /* $this->load->view('dashboard', array('data' => $data,
											 'data1'=>$data1 ,
											 'provinsi' => $provinsi,
											 'drilldown' => $drilldown)); */
        $this->load->view('standar/footer_ultra');
    }
	
	public function dashboard_cabang() {
		
		$userid = $this->ion_auth->get_user_id();
        $user = $this->ion_auth->user()->row();
        $usercabang = $user->id_cabang;
        $useragen_id = $user->id;
		$user_group = $user->username; 
		
        $this->load->view('standar/header');
        $this->load->view('standar/sidebar');
        $this->load->view('standar/top_navigation');
		$this->load->view('dashboard');
        /* $this->load->view('dashboard', array('data' => $data,
											 'data1'=>$data1 ,
											 'provinsi' => $provinsi,
											 'drilldown' => $drilldown)); */
        $this->load->view('standar/footer');
    }

    


}
