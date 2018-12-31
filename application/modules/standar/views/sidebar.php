<?=
$x = '';
if (!$this->ion_auth->logged_in()) {
    redirect('auth/login', 'refresh');
}
?>
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">                
        <ul class="nav side-menu">
            <li>
                <a>
                    <?php $user = $this->ion_auth->user()->row(); ?>
                  <!--<i class="fa fa-user"></i><b><?= $user->username . ' | ' /* .$user->first_name .' '. $user->last_name.' | ' */ . $user->company; ?></b> <span class="fa fa-chevron-down"></span> -->
                    <!--<i class="fa fa-user">&nbsp;</i><b><?= $user->username; ?><br/> <?= $user->company; ?></b>-->
                    <i class="fa fa-user">&nbsp;</i><b><?= $user->first_name .' '. $user->last_name; ?><br/> <?= $user->company; ?></b>
                </a>
            </li>
            <li>
                <a href="<?= site_url('/dashboard/dashboard_manajemen'); ?>"><i class="fa fa-bar-chart-o"></i>Dashboard<span class="fa fa-chevron-down"></span></a></li>


            <?php
            /* $group = '';
              if ($this->ion_auth->in_group(array('cabangjasindo'))) :
              ?>
              <li>
              <a href="<?= site_url('/dashboard/dashboard_cabang'); ?>"><i class="fa fa-bar-chart-o"></i>Dashboard<span class="fa fa-chevron-down"></span></a></li>

              <?php
              endif; */
            ?>
            <li>
                <a><i class="fa fa-edit"></i>Daftar Peserta<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">                
                    <li><a href="<?= site_url('/wsbpdbali'); ?>">H2H Data Debitur</a></li>
                    <li><a href="<?= site_url('/formapp/daftar_calon_peserta'); ?>">Daftar Calon Peserta</a></li>
                    <!--<li><a href="<?= site_url('/uploadapproval'); ?>">Upload Peserta Asuransi</a></li>-->
                    <?= 
                $group = '';        
                if ($this->ion_auth->in_group(array('cabangjasindo','admin'))) : ?> 
                    <li><a href="<?= site_url('/formapp/daftar_peserta_tanpa_polis'); ?>">Menunggu Polis</a></li>
                    <?php endif; ?>
                    <li><a href="<?= site_url('/formapp/daftar_peserta'); ?>">Daftar Peserta</a></li>
                    <li><a href="<?= site_url('/formapp/daftar_percabang'); ?>">Daftar per Cabang</a></li>
                </ul>
            </li>

            <li>
                <a><i class="fa fa-edit"></i> Klaim<span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?= site_url('/formapp/readytoclaim'); ?>">Registrasi Klaim</a></li>
                    <li><a href="<?= site_url('/klaim'); ?>">Daftar Peserta Klaim</a></li>
                    <li><a href="<?= site_url('/klaim/klaimpercabang/6'); ?>">New Claim</a></li>
                    <li><a href="<?= site_url('/klaim/klaimpercabang/1'); ?>">Menunggu Dokumen</a></li>
                    <li><a href="<?= site_url('/klaim/klaimpercabang/2'); ?>">Proses Verifikasi</a></li>
                    <li><a href="<?= site_url('/klaim/klaimpercabang/3'); ?>">Proses Pembayaran</a></li>
             <!--       <li><a href="<?= site_url('/klaim/claimpaid'); ?>">Claim Paid</a></li>
                    <li><a href="<?= site_url('/klaim/noclaim'); ?>">No Claim</a></li>-->
                    <li><a href="<?= site_url('/klaim/klaimpercabang/4'); ?>">Claim Paid</a></li>
                    <li><a href="<?= site_url('/klaim/klaimpercabang/5'); ?>">Re-Verifikasi</a></li>
                    <li><a href="<?= site_url('/klaim/klaimcabang'); ?>">Daftar per Cabang</a></li>
                </ul>
            </li>
            <!-- Start Transaksi -->
            <!--<li>
              <a><i class="fa fa-edit"></i> Produk AJK<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
               <li><a href="<?= site_url('/upload'); ?>">Upload</a></li>
               <li><a href="<?= site_url('/form/ajk/add'); ?>">Form</a></li>
               <li><a href="<?= site_url('/formapp/list_ajk'); ?>">List</a></li>
               <li><a href="<?= site_url('/formapp/approve_ajk'); ?>">Disetujui</a></li>
             </ul>
           </li>-->
            <!-- End Transaksi -->
            <!--<li><a><i class="fa fa-cloud-download"></i> Host to Host <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="<?= site_url('/wsbpdbali'); ?>">H2H Data Debitur</a></li>
              </ul>
            </li>-->
            <li><a><i class="fa fa-users"></i> User Management <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                    <li><a href="<?= site_url('/auth/edit_user/' . $this->ion_auth->get_user_id()); ?>">Profile</a></li>
                    <?php
                    $group = '';
                    if ($this->ion_auth->in_group(array('admin', 'cabangjasindo', 'adminbank'))) :
                        ?>                              
                        <li><a href="<?php echo site_url('/auth'); ?>">List User</a></li>
                        <li><a href="<?php echo site_url('/auth/create_user'); ?>">Add User</a></li>
                        <?php
                        $group = '';
                        if ($this->ion_auth->in_group(array('admin'))) :
                            ?>                              
                            <li><a href="<?php echo site_url('/auth/create_group'); ?>">Add Group</a></li>
                            <?php
                        endif;
                        ?>
                        <?php
                    endif;
                    ?>   
                </ul>
            </li> 
            <?php
            $group = '';
            if ($this->ion_auth->in_group(array('admin', 'cabangjasindo'))) {
                if ($this->ion_auth->in_group(array('admin'))) {
                    ?>
                    <li><a><i class="fa fa-bar-chart-o"></i> Master Data <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <!--<li><a href="<?php echo site_url('/cabang'); ?>">mASTER Cabang</a></li>-->
                            <li><a href="<?php echo site_url('/jenisklaim'); ?>">Master Jenis Klaim</a></li>
                            <li><a href="<?php echo site_url('/jenis_dokklaim'); ?>">Mapping Dokumen Klaim</a></li>
                            <li><a href="<?php echo site_url('/produk'); ?>">Master Produk</a></li>
                            <li><a href="<?php echo site_url('/datatarif'); ?>">Master Rate</a></li>
                            <li><a href="<?php echo site_url('/cabang_bpd_bali'); ?>">Master Cabang</a></li>
                        </ul>
                    </li> 
                    <?php
                }
            }
            ?>
        </ul>
    </div>              
</div>

</div>
<!-- /sidebar menu -->            
</div>
</div>
