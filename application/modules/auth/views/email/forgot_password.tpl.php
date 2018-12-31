<html>
    <head>
        <style>
            .divButton {
                padding:2px 10px; 
                border:solid #707070 1px; 
                font-family:caption; 
                font-size:18px;
                font-weight:bold;
                color:#FFFFFF; 
                background-color:#3333FF;
                border-radius:2px;
                border-color:#3333FF;
                cursor:default;
                text-align:center;
                padding-top: 14px;  
                width:200px;  
                height:30px;            
                /*
                display:inline; 
                background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #3300FF), color-stop(1, #A7D8F5));
                */
            }
            div.divButton a {
                text-decoration:none;
                color:#FFFFFF; 
            }
            .divButton:hover{
                /* background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #EAF6FD), color-stop(1, #A7D8F5));*/
                background-color:#A7D8F5;
                border-color:#A7D8F5;
            }
        </style>
    </head>
    <body>
        <h1>Hello!</h1>
        <p>You are receiving this email because we received a password reset request for your account </p>
        <p>If you did not request a password reset, no further action is required.</p>
        <div class="divButton" style="">
            <?php echo sprintf(anchor('auth/reset_password/' . $forgotten_password_code, 'Reset Password')); ?>
        </div>


        <p>Regards,</p>
        <p>PT Asuransi Jasa Indonesia (Persero)</p>
        <!-- 
            <h1><?php echo sprintf(lang('email_forgot_password_heading'), $identity); ?></h1> 
            <p><?php echo sprintf(lang('email_forgot_password_subheading'), anchor('auth/reset_password/' . $forgotten_password_code, lang('email_forgot_password_link'))); ?></p>
        -->

    </body>
</html>