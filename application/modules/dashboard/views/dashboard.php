		<style>
		.color-stat1{
			/*background-color : #1ec1d5 ;*/
			background-color : #0091D5 ;
		}
		.color-stat2{
			/*background-color : #de2768 ;*/
			background-color :  #4aa54e;
		}
		.color-stat3{
			/*background-color : #fc940c ;*/
			background-color : #B2912F ;
		}
		.color-stat4{
			background-color : #488A99 ;
			/*background-color : #6AB187 ;*/
		}
		
		.color-count{
			color:#ffffff; 

		}
		</style>
		
		<?php 
		$userid = $this->ion_auth->get_user_id();
        
        $user = $this->ion_auth->user()->row();
       
        //$usercabang = $user->id_cabang;
        //$useragen_id = $user->id;
		$user_group = $user->username; 
		?> 
		
		
		<!-- page content -->
		
        <div class="right_col" role="main">
          <div class="">
		  <!--Start Akseptasi General-->
          <div class="x-title"><h2>AKSEPTASI</h2></div>
            <div class="row">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?= site_url('/formapp/daftar_percabang'); ?>" style="color:#ffffff;">
                <div class="tile-stats color-stat1">
                    <div class="icon"><i class="fa fa-user-plus" style="font-size:36px"></i></div>
                    <div class="count color-count" style="font-size:25px;"> <?php echo number_format($data['data_peserta_count'][0]['jumlah'],0); ?></div>
                    <div class="count color-count" style="font-size:20px;">&nbsp;</div>
                    <div class="count color-count" style="font-size:20px;">
				  <?php echo number_format($data['data_peserta_premi'][0]['total_premi'],0); ?>
				  </div>
                    
                    <h3 style="font-size:20px;padding-bottom: 10px;">Jumlah & Premi Peserta</h3>
                                  
                  <!--<p><a href="<?= site_url('/formapp/daftar_percabang'); ?>" style="color:#ffffff;">More info &#187;</a></p>--> 
                </div>
                    </a>
              </div>
			  
			  
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <a href="<?= site_url('/formapp/daftar_percabang'); ?>" style="color:#ffffff;">
                <div class="tile-stats color-stat2" title="Total Nilai Pertanggungan">
                    <div class="icon"><i class="fa fa-umbrella" style="font-size:36px"></i></div>
                    <div class="count color-count" style="font-size:45px;">&nbsp;</div>
                  <div class="count color-count" style="font-size:20px;">
				  <?php echo number_format($data['data_peserta_np'][0]['total_pertanggungan'],0); ?> 
				  </div>
                  <h3 style="font-size:20px;padding-bottom: 10px;">Total NP</h3>
                  <!--<p><a href="#" >&nbsp;</a></p>--> 
                  <!--<p><a href="#" >More info</a></p>--> 
                </div>
                  </a>
              </div>              
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="#" style="color:#ffffff;">
                    <div class="tile-stats color-stat4" title="Data(H-1) outstanding premi sesuai dengan pembukuan premi pada aplikasi CORE JASINDO">
                        <div class="icon"><i class="fa fa-suitcase" style="font-size:36px"></i></div>
                    <div class="count color-count" style="font-size:45px;">&nbsp;</div>
                        <div class="count color-count" style="font-size:20px;">
                                      <?php echo number_format($data['data_peserta_premi_outstanding'][0]['total_premi_outstanding'],0); ?>
                                      </div>				  
                        <h3 style="font-size:20px;padding-bottom: 10px;">Outstanding</h3>
                    </div> </a>
              </div>

            </div>
			
			
			 <!--End Akseptasi General-->
			 
			  <!--Start Produk-->
			<!--div class="x-title"><h2>AKSEPTASI PRODUK</h2></div>
			
			<div class="row">
				
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats color-stat1">
                  <div class="icon"><i class="fa fa-th-large" style="font-size:36px"></i></div>
                  
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['kuk_konsumsi_perumahan'][0]['jumlah'],0); ?>
                  </div>
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['kuk_konsumsi_perumahan'][0]['total_premi'],0); ?>
                  </div>          
                  <h3>KUK KONSUMSI PERUMAHAN</h3>
                  <p><a href="<?= site_url('/detail_dashboard/detail/12'); ?>" style="color:#ffffff;">More info &#187;</a></p> 
                </div>
              </div>


              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats color-stat2">
                  <div class="icon"><i class="fa fa-th-large" style="font-size:36px"></i></div>
                  
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['kuk_kupp_modal_kerja_retail'][0]['jumlah'],0); ?>
                  </div>
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['kuk_kupp_modal_kerja_retail'][0]['total_premi'],0); ?> 
                  </div>
                  <h3>KUK KUPP MODAL KERJA RETAIL</h3>
                  <p><a href="<?= site_url('/detail_dashboard/detail/15'); ?>" style="color:#ffffff;">More info &#187;</a></p>
                </div>
              </div>


              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats color-stat4">
                  <div class="icon"><i class="fa fa-th-large" style="font-size:36px"></i></div>
                  
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['non_kuk_konsumsi_profesi'][0]['jumlah'],0); ?>
                  </div>
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['non_kuk_konsumsi_profesi'][0]['total_premi'],0); ?> 
                  </div>
                  <h3>NON KUK KONSUMSI PROFESI</h3>
                  <p><a href="<?= site_url('/detail_dashboard/detail/23'); ?>" style="color:#ffffff;">More info &#187;</a></p>
                </div>
              </div>


              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats color-stat3">
                  <div class="icon"><i class="fa fa-th-large" style="font-size:36px"></i></div>
                  
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['non_kuk_konsumsi_pegawai_bpd'][0]['jumlah'],0); ?>
                  </div>
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['non_kuk_konsumsi_pegawai_bpd'][0]['total_premi'],0) ?>
                  </div>          
                  <h3>NON KUK KONSUMSI PEGAWAI BPD</h3>
                 <p><a href="<?= site_url('/detail_dashboard/detail/24'); ?>" style="color:#ffffff;">More info &#187;</a></p>
                </div>
              </div>

            </div>

			<div class="row">
				
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats color-stat1">
                  <div class="icon"><i class="fa fa-th-large" style="font-size:36px"></i></div>
                 
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['non_kuk_konsumsi_kendaraan'][0]['jumlah'],0); ?>
                  </div>
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['non_kuk_konsumsi_kendaraan'][0]['total_premi'],0); ?>
                  </div>          
                  <h3>NON KUK KONSUMSI KENDARAAN</h3>
                  <p><a href="<?= site_url('/detail_dashboard/detail/25'); ?>" style="color:#ffffff;">More info &#187;</a></p>
                </div>
              </div>


              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats color-stat2">
                  <div class="icon"><i class="fa fa-th-large" style="font-size:36px"></i></div>
                  
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['non_kuk_konsumsi_perumahan'][0]['jumlah'],0); ?>
                  </div>
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['non_kuk_konsumsi_perumahan'][0]['total_premi'],0); ?> 
                  </div>
                  <h3>NON KUK KONSUMSI PERUMAHAN</h3>
                  <p><a href="<?= site_url('/detail_dashboard/detail/26'); ?>" style="color:#ffffff;">More info &#187;</a></p> 
                </div>
              </div>


              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats color-stat4">
                  <div class="icon"><i class="fa fa-th-large" style="font-size:36px"></i></div>
                  
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['non_kuk_konsumsi_alat_rt'][0]['jumlah'],0); ?>
                  </div>
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['non_kuk_konsumsi_alat_rt'][0]['total_premi'],0); ?> 
                  </div>
                  <h3>NON KUK KONSUMSI ALAT RT</h3>
                  <p><a href="<?= site_url('/detail_dashboard/detail/27'); ?>" style="color:#ffffff;">More info &#187;</a></p>  
                </div>
              </div>


              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats color-stat3">
                  <div class="icon"><i class="fa fa-th-large" style="font-size:36px"></i></div>
                  
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['kuk_kupp_investasi_retail'][0]['jumlah'],0); ?>
                  </div>
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['kuk_kupp_investasi_retail'][0]['total_premi'],0) ?>
                  </div>          
                  <h3>KUK KUPP INVESTASI RETAIL</h3>
                  <p><a href="<?= site_url('/detail_dashboard/detail/32'); ?>" style="color:#ffffff;">More info &#187;</a></p>
                </div>
              </div>

            </div>
			
			<div class="row">
				
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats color-stat1">
                  <div class="icon"><i class="fa fa-th-large" style="font-size:36px"></i></div>
                 
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['krd_karyawan_tujuan_properti'][0]['jumlah'],0); ?>
                  </div>
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['krd_karyawan_tujuan_properti'][0]['total_premi'],0); ?>
                  </div>          
                  <h3>KRD KARYAWAN TUJUAN PROPERTI</h3>
                  <p><a href="<?= site_url('/detail_dashboard/detail/54'); ?>" style="color:#ffffff;">More info &#187;</a></p>
                </div>
              </div>


              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats color-stat2">
                  <div class="icon"><i class="fa fa-th-large" style="font-size:36px"></i></div>
                  
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['krd_multiguna_peralihan'][0]['jumlah'],0); ?>
                  </div>
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['krd_multiguna_peralihan'][0]['total_premi'],0); ?> 
                  </div>
                  <h3>KRD MULTIGUNA PERALIHAN</h3>
                  <p><a href="<?= site_url('/detail_dashboard/detail/57'); ?>" style="color:#ffffff;">More info &#187;</a></p>
                </div>
              </div>


              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats color-stat4">
                  <div class="icon"><i class="fa fa-th-large" style="font-size:36px"></i></div>
                  
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['kredit_karyawan'][0]['jumlah'],0); ?>
                  </div>
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['kredit_karyawan'][0]['total_premi'],0); ?> 
                  </div>
                  <h3>KREDIT</h3>
				  <h3>KARYAWAN</h3>
                  <p><a href="<?= site_url('/detail_dashboard/detail/62'); ?>" style="color:#ffffff;">More info &#187;</a></p>
                </div>
              </div>


              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats color-stat3">
                  <div class="icon"><i class="fa fa-th-large" style="font-size:36px"></i></div>
                  
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['krd_multiguna_pppk'][0]['jumlah'],0); ?>
                  </div>
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['krd_multiguna_pppk'][0]['total_premi'],0) ?>
                  </div>          
                  <h3>KRD MULTIGUNA PPPK</h3>
                  <p><a href="<?= site_url('/detail_dashboard/detail/67'); ?>" style="color:#ffffff;">More info &#187;</a></p>
                </div>
              </div>

            </div>
			
			<div class="row">
				
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats color-stat1">
                  <div class="icon"><i class="fa fa-th-large" style="font-size:36px"></i></div>
                  
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['kupp_ki_peralihan'][0]['jumlah'],0); ?>
                  </div>
                  <div class="count color-count" style="font-size:25px;">
                    <?php echo number_format($data['kupp_ki_peralihan'][0]['total_premi'],0); ?>
                  </div>          
                  <h3>KUPP</h3>
				  <h3>KI PERALIHAN</h3>
                  <p><a href="<?= site_url('/detail_dashboard/detail/68'); ?>" style="color:#ffffff;">More info &#187;</a></p>
                </div>
              </div>
			  
			</div-->
			
			 <!--End Produk -->
			 
			 <!--Start Akseptasi Per Product-->
<!--          <div class="x-title"><h2>AKSEPTASI PRODUK</h2></div>
            <div class="row">
			
			<?php foreach ($data['data_all_produk'] as $rows) {?>
				 <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="<?//= site_url('/formapp/daftar_percabang'); ?>" style="color:#ffffff;">
                <div class="tile-stats color-stat1">
                    <div class="icon"><i class="fa fa-shopping-basket" style="font-size:36px"></i></div>
                    <div class="count color-count">&nbsp;</div>
                    <div class="count color-count" style="font-size:25px;">
				  <?php //echo number_format($data['data_produk1'][0]['jumlah'],0); 
				  echo $rows['jumlah'];?>
				  </div>				  
                    <h3 style="padding-bottom: 10px;"><?php echo $rows['nama_produk'] ; ?></h3>
                                  
                  <p><a href="<?//= site_url('/formapp/daftar_percabang'); ?>" style="color:#ffffff;">More info &#187;</a></p> 
                </div>
                    </a>
              </div>	
                          
                       
			<?php } ?>
				
            </div>-->
			 <!--End Akseptasi Per Product-->
			 
			 
<!--              <div class="row"><h3>Klaim</h3></div>-->

            <div class="x-title"><h2>KLAIM</h2></div>
            <div class="row">
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="<?= site_url('/klaim/klaimcabang'); ?>" style="color:#ffffff;" >
                <div class="tile-stats color-stat1">
                  <div class="icon"><i class="fa fa-signal" style="font-size:36px"></i></div>
                  <div class="count color-count" style="font-size:25px;">
				  <?php echo number_format($data['data_semua_klaim'][0]['jumlah'],0); ?>
				  </div>
				  <br>
                  <div class="count color-count" style="font-size:20px;">
				  <?php echo number_format($data['data_semua_klaim'][0]['total_amount'],0); ?>
				  </div>				  
                  <h3 style="padding-bottom: 10px;font-size: 20px;">Semua Klaim</h3>
                  <!--<p><a href="<?= site_url('/klaim/klaimcabang'); ?>" style="color:#ffffff;" >More info &#187;</a></p>--> 
                </div>
                </a>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="<?= site_url('/klaim/klaimpercabang/6'); ?>" style="color:#ffffff;" >
                <div class="tile-stats color-stat2">
                  <!--<div class="icon"><i class="fa fa-tasks" style="font-size:36px"></i></div>-->
                    <div class="icon" style="width:20px;height:20px;color:#BAB8B8;position:absolute;right:60px;top:22px;z-index:1"><img src="<?php echo site_url('assets/images/logo_bpdbali.png'); ?>" style="width:50px;"/><i style="font-size:36px"></i></div>
                  <div class="count color-count" style="font-size:18px;">
				  <?php $klaim0 = $data['data_klaim_baru'][0]['hitung'] / max($data['data_semua_klaim'][0]['jumlah'],1) * 100 ; 
				  echo $data['data_klaim_baru'][0]['hitung'];?> 
				  </div>
                  <div class="count color-count" style="font-size:18px;">
				  <?php echo round($klaim0 ,2) ;?> %
                                  </div>
                  <div class="count color-count" style="font-size:20px;">
				  <?php echo number_format($data['data_klaim_baru'][0]['total_amount'],0); ?> <!--<sup style="font-size: 25px">%</sup>-->
				  </div>
                  <h3 style="font-size:20px;padding-bottom: 10px;">New Claim</h3>
<!--                  <p><a href="<?= site_url('/klaim/klaimpercabang/6'); ?>" style="color:#ffffff;" >More info &#187;</a></p> -->
                </div>
                </a>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <a href="<?= site_url('/klaim/klaimpercabang/1'); ?>" style="color:#ffffff;" title="Menunggu kekurangan dokumen yang sudah di verifikasi oleh pihak Jasindo" >
                <div class="tile-stats color-stat4">
                  <!--<div class="icon"><i class="fa fa-newspaper-o" style="font-size:36px"></i></div>-->
                    <div class="icon" style="width:20px;height:20px;color:#BAB8B8;position:absolute;right:60px;top:22px;z-index:1"><img src="<?php echo site_url('assets/images/logo_bpdbali.png'); ?>" style="width:50px;"/><i style="font-size:36px"></i></div>
                  <div class="count color-count" style="font-size:18px;">
				  <?php  
				  $dok0 = $data['data_menuggu_dokumen'][0]['hitung'] / max($data['data_semua_klaim'][0]['jumlah'],1) *100; 
				  echo $data['data_menuggu_dokumen'][0]['hitung']; ?>
				  </div>
                  <div class="count color-count" style="font-size:18px;">
				  <?php echo round($dok0 ,2) ;?> %
                                  </div>
                  <div class="count color-count" style="font-size:20px;">
				  <?php  
				  echo number_format($data['data_menuggu_dokumen'][0]['total_amount'],0); ?>
				  </div>
                  <h3 style="font-size:20px;padding-bottom: 10px;">Menunggu Dokumen</h3>
                  <!--<p><a href="<?= site_url('/klaim/klaimpercabang/1'); ?>" style="color:#ffffff;" >More info &#187;</a></p>--> 
                </div>
                  </a>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <a href="<?= site_url('/klaim/klaimpercabang/2'); ?>" style="color:#ffffff;" >
                <div class="tile-stats color-stat3">
                  <!--<div class="icon"><i class="fa fa-pencil-square-o" style="font-size:36px"></i></div>-->
                <div class="icon" style="width:20px;height:20px;color:#BAB8B8;position:absolute;right:90px;top:22px;z-index:1"><img src="<?php echo site_url('assets/images/logo-jasindo.png'); ?>" style="width:100px;"/><i style="font-size:36px"></i></div>
                  <div class="count color-count" style="font-size:18px;">
				  <?php  $verif0 = $data['data_proses_verifikasi'][0]['hitung'] / max($data['data_semua_klaim'][0]['jumlah'],1) *100 ; 
				  echo $data['data_proses_verifikasi'][0]['hitung']; ?>
				  </div>
                  <div class="count color-count" style="font-size:18px;">
				  <?php echo round($verif0 ,2) ;?> %
                                  </div>
                  <div class="count color-count" style="font-size:20px;">
				  <?php  echo number_format($data['data_proses_verifikasi'][0]['total_amount'],0); ?>
				  </div>
                  <h3 style="font-size:20px;padding-bottom: 10px;">Proses Verifikasi</h3>
                  <!--<p><a href="<?= site_url('/klaim/klaimpercabang/2'); ?>" style="color:#ffffff;" >More info &#187;</a></p>--> 
                </div>
                  </a>
              </div>
            </div>
            <div class="row">
			<div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="<?= site_url('/klaim/klaimpercabang/3'); ?>" style="color:#ffffff;" >
                <div class="tile-stats color-stat1">
                  <!--<div class="icon"><i class="fa fa-shopping-bag" style="font-size:36px"></i></div>-->
                  <div class="icon" style="width:20px;height:20px;color:#BAB8B8;position:absolute;right:90px;top:22px;z-index:1"><img src="<?php echo site_url('assets/images/logo-jasindo.png'); ?>" style="width:100px;"/><i style="font-size:36px"></i></div>
                  <div class="count color-count" style="font-size:18px;">
				  <?php $bayar0 =  $data['data_proses_pembayaran'][0]['hitung'] / max($data['data_semua_klaim'][0]['jumlah'],1) *100; 
				  echo $data['data_proses_pembayaran'][0]['hitung']; ?>
				  </div>
                  <div class="count color-count" style="font-size:18px;">
				  <?php echo round($bayar0 ,2) ;?> %
                                  </div>
                  <div class="count color-count" style="font-size:20px;">
				  <?php echo number_format($data['data_proses_pembayaran'][0]['total_amount'],0) ?> 
				  </div>
                  <h3 style="font-size:20px;padding-bottom: 10px;">Proses Pembayaran</h3>
<!--                  <p><a href="<?= site_url('/klaim/klaimpercabang/3'); ?>" style="color:#ffffff;" >More info &#187;</a></p> -->
                </div>
                </a>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="<?= site_url('/klaim/klaimpercabang/4'); ?>" style="color:#ffffff;" >
                <div class="tile-stats color-stat2">
                  <div class="icon"><i class="fa fa-newspaper-o" style="font-size:36px"></i></div>
                  <div class="count color-count" style="font-size:18px;">
				  <?php $paid0 =  $data['data_klaim_paid'][0]['hitung'] /  max($data['data_semua_klaim'][0]['jumlah'],1) *100; 
				  echo $data['data_klaim_paid'][0]['hitung'];?>
				  </div>
                  <div class="count color-count" style="font-size:18px;">
				  <?php echo round($paid0 ,2) ;?> %
                                  </div>
                  <div class="count color-count" style="font-size:20px;">
				  <?php echo number_format($data['data_klaim_paid'][0]['total_amount'], 0); ?>
				  </div>
                  <h3 style="font-size:20px;padding-bottom: 10px;">Claim Paid</h3>
                  <!--<p><a href="<?= site_url('/klaim/klaimpercabang/4'); ?>" style="color:#ffffff;" >More Info &#187;</a></p>--> 
                </div>
                </a>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <a href="<?= site_url('/klaim/klaimpercabang/5'); ?>" style="color:#ffffff;" >
                <div class="tile-stats color-stat4">
                  <div class="icon"><i class="fa fa-hourglass-start" style="font-size:36px"></i></div>
                  <div class="count color-count" style="font-size:18px;">
				  <?php $noclaim0 =  $data['data_no_klaim'][0]['hitung'] /  max($data['data_semua_klaim'][0]['jumlah'],1) *100; 
				  echo $data['data_no_klaim'][0]['hitung']; ?>
				  </div>
                  <div class="count color-count" style="font-size:18px;">
				  <?php echo round($noclaim0 ,2) ;?> %
                                  </div>
                  <div class="count color-count" style="font-size:20px;">
				  <?php echo number_format($data['data_no_klaim'][0]['total_amount'], 0); ?> 
				  </div>
                  <h3 style="font-size:20px;padding-bottom: 10px;">Re-Verifikasi</h3>
                  <!--<p><a href="<?= site_url('/klaim/klaimpercabang/5'); ?>" style="color:#ffffff;" >More info &#187;</a></p>-->
                </div>
                </a>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats color-stat3">
                  <div class="icon"><i class="fa fa-search-minus" style="font-size:36px"></i></div>
                  <?php $total = ( ($data['data_klaim_baru'][0]['total_amount'] + 
                            $data['data_menuggu_dokumen'][0]['total_amount'] + 
                            $data['data_proses_verifikasi'][0]['total_amount'] +
                            $data['data_proses_pembayaran'][0]['total_amount'] +
                            $data['data_klaim_paid'][0]['total_amount']) /
                            max($data['data_peserta_premi'][0]['total_premi'],1) * 1.00) *100 
								 ; ?>
				  <div class="count color-count" style="font-size:25px;">
				  <?php echo  number_format($total,2) ; ?> %
                                  </div><br>				  
                                <div class="count color-count" style="font-size:18px;">&nbsp;</div>    
                        
                  <h3 style="font-size:20px;padding-bottom: 10px;">Loss Ratio</h3>
                  <!--<p><a href="#" >&nbsp;</a></p>-->
                </div>
              </div>
            </div>
            <div class="x-title"><h2>KATEGORI PRODUK</h2></div>
            <div class="row" style="padding-bottom:30px;">
            <div class="col-md-6 col-sm-6 col-xs-12">			  
                <div class="x_panel">
                  <div class="x_title">
                      <h2 style="font-size:16px;">Peserta <small> </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr style="font-size: 12px;">
                          <th>No</th>
                          <th>Produk</th>
                          <th>Peserta</th>
                          <th>Premi</th>
						  <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php //echo "<pre>"; print_r($data['data_peserta']); die(); ?>
					<?php $no=1; ?> 
					<?php foreach ($data['data_list_peserta'] as $rows) {?>
					
                        <tr style="font-size: 10px;">
                            <td><span style="font-size: 10px;vertical-align: center;"><?php echo $no++; ?></span></td>
                            <td><span style="font-size: 10px;vertical-align: center;"><?php echo $rows['jeniskredit']; ?></span></td>
                            <td><span style="width:100%;text-align:center;display:block;vertical-align: center;"><?php echo $rows['jumlah_peserta'] ; ?></span></td>
                            <td><span style="width:100%;text-align:right;display:block;vertical-align: center;"><?php echo number_format($rows['jumlah_premi'],0); ?></span></td>
                            <td><span><a href="<?= site_url('/detail_dashboard/detail/'.$rows['id_jeniskredit']); ?>" >Detail</a></span></td> 
                        </tr>
					<?php } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
				
              </div>


              <div class="col-md-6 col-sm-6 col-xs-12">
                
                <div class="x_panel">
                  <div class="x_title">
                    <h2 style="font-size:16px;">Klaim<small> </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr style="font-size: 12px;">
                          <th>No</th>
                          <th>Produk</th>
                          <th>Peserta</th>
                          <th>Klaim</th>
						  <!--<th>Status</th>-->
                        </tr>
                      </thead>
                      <tbody>
					<?php $no=1; ?> 
					<?php foreach ($data['data_list_claim'] as $rows) {?>
					
                        <tr style="font-size: 10px;vertical-align: center;padding: 2px; line-height: 20px;">
                            <td><span style="font-size: 10px;vertical-align: center;"><?php echo $no++; ?></span></td>
                            <td><span style="font-size: 10px;vertical-align: center;"><?php echo $rows['jeniskredit']; ?></span></td>
                            <td><span style="width:100%;text-align:center;display:block;vertical-align: center;"><?php echo $rows['jumlah_peserta'] ; ?></span></td>
                            <td><span style="width:100%;text-align:right;display:block;vertical-align: center;"><?php echo number_format($rows['jumlah_klaim'],0); ?></span></td>
                            <!--<td><span style="font-size: 10px;vertical-align: center;"><?php echo $rows['deskripsi']; ?></span></td>-->
                          
                        </tr>
					<?php } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
				
              </div>

              <div class="clearfix"></div>
              
            <!-- Bootstrap core CSS -->
            <link href="<?php echo base_url('/assets/css/bootstrap.min.css'); ?>" rel="stylesheet">    
            <!-- Custom styles for this template -->
            <link href="<?php echo base_url('/assets/css/style.css'); ?>" rel="stylesheet">
            <script type="text/javascript" src="<?php echo base_url('/assets/jquery-1.7.2.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url('/assets/highcharts/highcharts.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url('/assets/highcharts/modules/data.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url('/assets/highcharts/modules/drilldown.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url('/assets/highcharts/modules/exporting.js'); ?>"></script>
            <!-- <script type="text/javascript" src="<?php echo base_url('/assets/highcharts/themes/dark-green.js'); ?>"></script> -->
            <script type="text/javascript" src="<?php echo base_url('/assets/js/jquery.min.js'); ?>"></script>
            <script type="text/javascript" src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
                        
              </div>
            </div>
          </div>
        
        <!-- /page content -->