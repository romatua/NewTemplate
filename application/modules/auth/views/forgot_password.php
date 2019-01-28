<div class="col-lg-12">
    <section class="box nobox">
        <div class="content-body">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <h1 class="lockscreen_icon"><i class='fa fa-lock'></i></h1>
                    <h1 class="lockscreen_info"><img src='<?= site_url('/assets/ultra/data/profile/profile.png');?>'> Hello Guest, <?php echo lang('forgot_password_heading');?>?</h1>


                    <div class="col-md-4 col-sm-6 col-xs-8 col-md-offset-4 col-sm-offset-3 col-xs-offset-2 lockscreen_search_area">
                    <?php
                    if(!empty($message)){
                        $alert = explode('<p>', $message);
                        foreach ($alert as $row) {
                            if (empty($row)) {
                                continue;
                            }
                            ?>
                            <div class="alert alert-warning fade in">
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
                    <?php #echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?>
                        <!-- <form action="javascript:;" method="post" class="lockscreen_search"> -->
                        <?php echo form_open("auth/forgot_password",'class="lockscreen_search"');?>
                            <div class="input-group transparent">
                                <!-- <span class="input-group-addon">
                                    <i class="fa fa-unlock icon-primary"></i>
                                </span> -->
                                <!-- <input type="text" class="form-control" placeholder="Type & Enter"> -->
                                <?php echo form_input('identity','','class="form-control" placeholder="Type Identity & Enter"');?>
                                <input type='submit' value="">
                            </div>
                        <?php echo form_close();?>
                        <!-- </form> -->
                    </div>
                    <div class="clearfix"></div>
                    <h1 class="lockscreen_tagline"><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></h1>


                </div>
            </div>
        </div>
    </section>
</div>