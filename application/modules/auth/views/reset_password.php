<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">

            <?php echo form_open('auth/reset_password/' . $code); ?>
            <h1><?php echo lang('reset_password_heading'); ?></h1>

            <div id="infoMessage"><?php echo $message; ?></div>
            <p>
                <label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length); ?></label> <br />
                <?php echo form_input($new_password); ?>
            </p>

            <p>
                <?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm'); ?> <br />
                <?php echo form_input($new_password_confirm); ?>
            </p>

            <?php echo form_input($user_id); ?>
            <?php echo form_hidden($csrf); ?>
            <div style="display:inline-block; margin-left:-38px !important;"><?php echo form_submit('submit', lang('reset_password_submit_btn')); ?></div>



            <?php echo form_close(); ?>
        </section>
    </div>