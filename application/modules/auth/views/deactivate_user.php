

<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>


        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left"><?php echo lang('deactivate_heading');?>
                      <small><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></small>
                    </h2>
                    <div class="actions panel_actions pull-right">
                        <!-- <i class="box_toggle fa fa-chevron-down"></i>
                        <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                        <i class="box_close fa fa-times"></i> -->
                    </div>
                </header>
                <div class="content-body">    
                    <div class="row">
                            <?php
                            if(!empty($message)){
                                $alert = explode('<p>', $message);
                                foreach ($alert as $row) {
                                    if (empty($row)) {
                                        continue;
                                    }
                            ?>
                            <div class="alert alert-warning alert-dismissible fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button><strong>Warning:</strong> <?php echo strip_tags($row); ?>
                            </div>
                            <?php
                                }
                            }else{
                                echo "";
                            }
                            ?>
                        <div class="col-md-5 col-sm-6 col-xs-7">
                            <?php #echo form_open("auth/deactivate/".$user->id);?>
                            <?php echo form_open(uri_string()); ?>

                                <div class="form-group">
                                        <!-- <label class="checkbox iradio-label form-label"> -->
                                          <input type="radio" name="confirm" value="yes" checked="checked" id="minimal-radio-2" class="icheck-minimal-purple">
                                          <?php echo lang('deactivate_confirm_y_label', 'confirm', 'class="form-label"'); ?>
                                          <!-- <input type="radio" name="confirm" value="yes" checked="checked" /> -->
                                        <!-- </label> -->
                                        <!-- <label class="checkbox iradio-label form-label"> -->
                                          <input type="radio" name="confirm" value="no" id="minimal-radio-2" class="icheck-minimal-purple">
                                          <?php echo lang('deactivate_confirm_n_label', 'confirm', 'class="form-label"'); ?>
                                          <!-- <input type="radio" name="confirm" value="no" /> -->
                                        <!-- </label> -->
                                </div>

                                <?php echo form_hidden($csrf); ?>
                                <?php echo form_hidden(array('id'=>$user->id)); ?>
                                <div class="pull-left">
                                    <?php echo form_submit('submit', lang('deactivate_submit_btn'),'class="btn btn-success"'); ?>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>


    </section>
</section>
<!-- END CONTENT -->