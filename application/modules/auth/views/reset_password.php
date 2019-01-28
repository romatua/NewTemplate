
<div class="col-lg-12">
    <section class="box nobox">
        <div class="content-body">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">

                    <h1 class="lockscreen_icon"><i class='fa fa-unlock-alt'></i></h1>
                    <h1 class="lockscreen_info"><img src='<?= site_url('/assets/ultra/data/profile/profile.png');?>'> Hello Guest, <?php echo lang('reset_password_heading'); ?>!</h1>

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
                        <?php echo form_open('auth/reset_password/' . $code); ?>
                        <div class="form-group">
                            <?php echo sprintf(lang('reset_password_new_password_label','','class="form-label"'), $min_password_length); ?>
                            <div class="controls">
                                <?php echo form_input($new_password, '', 'class="form-control" placeholder="Type New Password"'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm','class="form-label"'); ?>
                            <div class="controls">
                                <?php echo form_input($new_password_confirm, '', 'class="form-control" placeholder="Type Confirm New Password"'); ?>
                            </div>
                        </div>
                        <?php echo form_input($user_id); ?>
                        <?php echo form_hidden($csrf); ?>
                        <div class="pull-left">
                            <?php echo form_submit('submit', lang('reset_password_submit_btn'),'class="btn btn-success"'); ?>
                        </div>
                        <?php echo form_close();?>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>