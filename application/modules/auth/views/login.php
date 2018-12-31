<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
            <?php echo form_open( "auth/login");?>
            <h2>
            <b>APLIKASI VERIFIKASI <br /> NELAYAN CALON PENERIMA BANTUAN PREMI ASURANSI NELAYAN</b>
            </h2>
            <h1>
               <!-- <?php echo lang('login_heading');?> -->
            </h1>
            <p>
                <?php echo lang( 'login_subheading');?>
            </p>
            <div>
                <?php echo lang( 'login_identity_label', 'identity');?>
                <?php echo form_input('identity','','class="form-control"');?>
            </div>
            <div>
                <?php echo lang( 'login_password_label', 'password');?>
                <?php echo form_password('password','','class="form-control"');?>
            </div>
            <div>
                <?php echo form_submit('submit', lang('login_submit_btn'));?>
            </div>

            <div style="text-align:center">
                <a href="forgot_password"><?php echo lang( 'login_forgot_password');?></a>
                <!--<b>APLIKASI VERIFIKASI <br /> PESERTA ASURANSI NELAYAN</b>-->
                <br />
            </div>


<!--            <div style="text-align:right">
                <a href="forgot_password"><?php echo lang( 'login_forgot_password');?></a>                                
            </div>-->

            <div class="clearfix"></div>

            <div class="separator">                
                <div class="clearfix"></div>
                <br />
<!--                <div>
                    <?php echo lang( 'login_remember_label', 'remember');?>
                    <?php echo form_checkbox( 'remember', '1', FALSE, 'id="remember"');?>
                </div>-->
            </div>
            </form>
        </section>
    </div>