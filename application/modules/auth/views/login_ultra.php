<div class="login-wrapper">
            <div id="login" class="login loginpage col-lg-offset-4 col-lg-4 col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6 col-xs-offset-0 col-xs-12">
                <h1><a href="#" title="Login Page" tabindex="-1">API Admin</a></h1>
                <!-- <span>New Company Name</span> -->
                
                <!-- <form name="loginform" id="loginform" action="index.html" method="post"> -->
                <?php echo form_open("auth/login","name='loginform' id='loginform'"); ?>
                    <p>
                        <label for="user_login">Username<br />
                            <!-- <input type="text" name="log" id="user_login" class="input" value="demo" size="20" /></label> -->
                            <?php echo form_input('identity', '', 'class="input"'); ?>
                    </p>
                    <p>
                        <label for="user_pass">Password<br />
                            <!-- <input type="password" name="pwd" id="user_pass" class="input" value="demo" size="20" /></label> 
                            -->
                            <?php echo form_password('password', '', 'class="input"'); ?>
                    </p>
                    <!-- <p class="forgetmenot">
                        <label class="icheck-label form-label" for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever" class="skin-square-orange" checked> Remember me</label>
                    </p> -->



                    <p class="submit">
                        <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-orange btn-block" value="Sign In" />
                    </p>
                <?php echo form_close(); ?>
                <!-- </form> -->

                <p id="nav">
                    <a class="pull-left" href="forgot_password" title="Password Lost and Found">Forgot password?</a>
                    <!-- <a class="pull-right" href="ui-register.html" title="Sign Up">Sign Up</a> -->
                </p>


            </div>
        </div>





        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


        <!-- CORE JS FRAMEWORK - START --> 
        <script src="<?= base_url('/assets/ultra/js/jquery-1.11.2.min.js');?>" type="text/javascript"></script> 
        <script src="<?= base_url('/assets/ultra/js/jquery.easing.min.js');?>" type="text/javascript"></script> 
        <script src="<?= base_url('/assets/ultra/plugins/bootstrap/js/bootstrap.min.js');?>" type="text/javascript"></script> 
        <script src="<?= base_url('/assets/ultra/plugins/pace/pace.min.js');?>" type="text/javascript"></script>  
        <script src="<?= base_url('/assets/ultra/plugins/perfect-scrollbar/perfect-scrollbar.min.js');?>" type="text/javascript"></script> 
        <script src="<?= base_url('/assets/ultra/plugins/viewport/viewportchecker.js');?>" type="text/javascript"></script>  
        <!-- CORE JS FRAMEWORK - END --> 


        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <script src="<?= base_url('/assets/ultra/plugins/icheck/icheck.min.js');?>" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


        <!-- CORE TEMPLATE JS - START --> 
        <script src="<?= base_url('/assets/ultra/js/scripts.js');?>" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 

        <!-- Sidebar Graph - START --> 
        <script src="<?= base_url('/assets/ultra/plugins/sparkline-chart/jquery.sparkline.min.js');?>" type="text/javascript"></script>
        <script src="<?= base_url('/assets/ultra/js/chart-sparkline.js');?>" type="text/javascript"></script>
        <!-- Sidebar Graph - END --> 







        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">

                        Body goes here...

                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
    </body>
</html>