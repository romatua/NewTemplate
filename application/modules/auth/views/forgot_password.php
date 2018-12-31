<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
            <?php echo form_open("auth/forgot_password");?>
            <h1><?php echo lang('forgot_password_heading');?></h1>
            <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
            <div id="infoMessage"><?php echo $message;?></div>
            <div>
                <label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label>
                <?php echo form_input('identity','','class="form-control"');?>
            </div>
           
            <div >
                <?php echo form_submit('submit', lang('forgot_password_submit_btn'));?>
            </div>

            <div class="clearfix"></div>

            
            <?php echo form_close();?>
        </section>
    </div>

