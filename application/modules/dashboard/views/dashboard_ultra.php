
<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>

        
        

        <div class="col-lg-12">
            <section class="box nobox">
                <div class="content-body">

                  <div class="page-title">
                    <div class="pull-left">
                      <h3 class="title">H2H AKU LAKU</h3>
                    </div>
                  </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <a href="<?= site_url('/formapp/daftar_percabang'); ?>" style="text-decoration: none;">
                            <i class='pull-right fa fa-users icon-sm icon-rounded icon-primary'></i>
                            <div class="r4_counter db_box">
                                <div class="">
                                    <h4><strong><?php echo number_format($data['data_summary'][0]['count_data'],0); ?></strong></h4>
                                    <h4><strong><?php echo number_format($data['data_summary'][0]['total_premi'],0); ?></strong></h4>
                                    <h5><span>Jumlah & Premi Peserta</span></h5>
                                </div>
                            </div>
                          </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <a href="<?= site_url('/formapp/daftar_percabang'); ?>" style="text-decoration: none;">
                            <i class='pull-right fa fa-dollar icon-sm icon-rounded icon-orange'></i>
                            <div class="r4_counter db_box">
                                <div class="">
                                    <h4><strong>&nbsp;</strong></h4>
                                    <h4><strong><?php echo number_format($data['data_summary'][0]['total_tsi'],0); ?></strong></h4>
                                    <h5><span>TSI</span></h5>
                                </div>
                            </div>
                          </a>
                        </div>
                        
                    </div> 
                </div>
            </section>
          </div>

    </section>
</section>
<!-- END CONTENT -->