
<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>

        
        

        <div class="col-lg-12">
            <section class="box nobox">
                <div class="content-body">

                  <div class="page-title">
                    <div class="pull-left">
                      <h3 class="title">AKSEPTASI</h3>
                    </div>
                  </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <a href="<?= site_url('/formapp/daftar_percabang'); ?>" style="text-decoration: none;">
                            <i class='pull-right fa fa-users icon-sm icon-rounded icon-primary'></i>
                            <div class="r4_counter db_box">
                                <div class="">
                                    <h4><strong><?php echo number_format($data['data_peserta_count'][0]['jumlah'],0); ?></strong></h4>
                                    <h4><strong><?php echo number_format($data['data_peserta_premi'][0]['total_premi'],0); ?></strong></h4>
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
                                    <h4><strong><?php echo number_format($data['data_peserta_np'][0]['total_pertanggungan'],0); ?></strong></h4>
                                    <h5><span>Total NP</span></h5>
                                </div>
                            </div>
                          </a>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <i class='pull-right fa fa-dollar icon-sm icon-rounded icon-purple'></i>
                            <div class="r4_counter db_box">
                                <div class="">
                                    <h4><strong>&nbsp;</strong></h4>
                                    <h4><strong><?php echo number_format($data['data_peserta_premi'][0]['total_premi'],0); ?></strong></h4>
                                    <h5><span>Total Premi</span></h5>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-3 col-sm-6 col-xs-12">
                            <i class='pull-right fa fa-users icon-sm icon-rounded icon-warning'></i>
                            <div class="r4_counter db_box">
                                <div class="">
                                    <h4><strong>&nbsp;</strong></h4>
                                    <h4><strong><?php echo number_format($data['data_peserta_premi_outstanding'][0]['total_premi_outstanding'],0); ?></strong></h4>
                                    <h5><span>Outstanding</span></h5>
                                </div>
                            </div>
                        </div> -->
                    </div> <!-- End .row -->

                  <!-- <div class="page-title">
                    <div class="pull-left">
                      <h3 class="title">Dashboard</h3>
                    </div>
                  </div>

                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <i class='pull-left fa fa-thumbs-up icon-md icon-rounded icon-primary'></i>
                                <div class="stats">
                                    <h4><strong>45%</strong></h4>
                                    <span>New Orders</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <i class='pull-left fa fa-shopping-cart icon-md icon-rounded icon-orange'></i>
                                <div class="stats">
                                    <h4><strong>243</strong></h4>
                                    <span>New Products</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <i class='pull-left fa fa-dollar icon-md icon-rounded icon-purple'></i>
                                <div class="stats">
                                    <h4><strong>$3424</strong></h4>
                                    <span>Profit Today</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <i class='pull-left fa fa-users icon-md icon-rounded icon-warning'></i>
                                <div class="stats">
                                    <h4><strong>1433</strong></h4>
                                    <span>New Users</span>
                                </div>
                            </div>
                        </div>
                    </div> --> <!-- End .row -->

                  <!-- <div class="page-title">
                    <div class="pull-left">
                      <h3 class="title">Statistics</h3>
                    </div>
                  </div>

                    <div class="row">

                    <div class="col-md-3 col-sm-5 col-xs-12">

                        <div class="r1_graph1 db_box">
                            <span class='bold'>98.95%</span>
                            <span class='pull-right'><small>SERVER UP</small></span>
                            <div class="clearfix"></div>
                            <span class="db_dynamicbar">Loading...</span>
                        </div>


                        <div class="r1_graph2 db_box">
                            <span class='bold'>2332</span>
                            <span class='pull-right'><small>USERS ONLINE</small></span>
                            <div class="clearfix"></div>
                            <span class="db_linesparkline">Loading...</span>
                        </div>


                        <div class="r1_graph3 db_box hidden-xs">
                            <span class='bold'>342/123</span>
                            <span class='pull-right'><small>ORDERS / SALES</small></span>
                            <div class="clearfix"></div>
                            <span class="db_compositebar">Loading...</span>
                        </div>

                    </div>



                    <div class="col-md-6 col-sm-7 col-xs-12">
                        <div class="r1_maingraph db_box">
                            <span class='pull-left'>
                                <i class='icon-purple fa fa-square icon-xs'></i>&nbsp;<small>PAGE VIEWS</small>&nbsp; &nbsp;<i class='fa fa-square icon-xs icon-primary'></i>&nbsp;<small>UNIQUE VISITORS</small>
                            </span>
                            <span class='pull-right switch'>
                                <i class='icon-default fa fa-line-chart icon-xs'></i>&nbsp; &nbsp;<i class='icon-secondary fa fa-bar-chart icon-xs'></i>&nbsp; &nbsp;<i class='icon-secondary fa fa-area-chart icon-xs'></i>
                            </span>

                            <div id="db_morris_line_graph" style="height:272px;width:95%;"></div>
                            <div id="db_morris_area_graph" style="height:272px;width:90%;display:none;"></div>
                            <div id="db_morris_bar_graph" style="height:272px;width:90%;display:none;"></div>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="r1_graph4 db_box">
                            <span class=''>
                                <i class='icon-purple fa fa-square icon-xs icon-1'></i>&nbsp;<small>CPU USAGE</small>
                            </span>
                            <canvas width='180' height='90' id="gauge-meter"></canvas>
                            <h4 id='gauge-meter-text'></h4>
                        </div>
                        <div class="r1_graph5 db_box col-xs-6">
                            <span class=''><i class='icon-purple fa fa-square icon-xs icon-1'></i>&nbsp;<small>LONDON</small>&nbsp; &nbsp;<i class='fa fa-square icon-xs icon-2'></i>&nbsp;<small>PARIS</small></span>
                            <div style="width:120px;height:120px;margin: 0 auto;">
                                <span class="db_easypiechart1 easypiechart" data-percent="66"><span class="percent" style='line-height:120px;'></span></span>
                            </div>
                        </div>

                    </div>

                </div> --> <!-- End .row -->

                </div>
            </section>
          </div>

    </section>
</section>
<!-- END CONTENT -->