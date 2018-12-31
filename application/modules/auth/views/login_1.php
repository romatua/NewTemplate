<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-10 p-b-20">
                <!-- <form class="login100-form validate-form"> -->
                    <?php echo form_open("auth/login","class='login100-form validate-form'"); ?>
                    <span class="login100-form-avatar">
                        <img src="<?= base_url('/assets/login_v6/images/logo3.png'); ?>" alt="LOGO JASINDO">
                        <!--<img src="<?= base_url('/assets/login_v6/images/logobpdbali.png'); ?>" alt="LOGO BPD BALI" width="10px">-->
                    </span>
                    <span class="login100-form-title p-b-50">
                        New Company Name
                    </span>

                    <div class="wrap-input100 validate-input m-b-20" data-validate = "Enter username">
                        <!-- <input class="input100" type="text" name="identity"> -->
                        <?php echo form_input('identity', '', 'class="input100"'); ?>
                        <span class="focus-input100" data-placeholder="Username"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-30" data-validate="Enter password">
                        <!-- <input class="input100" type="password" name="pass"> -->
                        <?php echo form_password('password', '', 'class="input100"'); ?>
                        <span class="focus-input100" data-placeholder="Password"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                        <!-- <?php echo form_submit('submit', lang('login_submit_btn')); ?> -->
                    </div>

                    <ul class="login-more p-t-20">
                        <li class="m-b-8">
                            <span class="txt1">
                                Forgot
                            </span>

                            <a href="forgot_password" class="txt2">
                                Username / Password?
                            </a>
                        </li>

                        <!-- <li>
                            <span class="txt1">
                                Don’t have an account?
                            </span>

                            <a href="#" class="txt2">
                                Sign up
                            </a>
                        </li> -->
                    </ul>
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
    <script src="<?= base_url('/assets/login_v6/vendor/jquery/jquery-3.2.1.min.js'); ?>"></script>
<!--===============================================================================================-->
    <script src="<?= base_url('/assets/login_v6/vendor/animsition/js/animsition.min.js'); ?>"></script>
<!--===============================================================================================-->
    <script src="<?= base_url('/assets/login_v6/vendor/bootstrap/js/popper.js'); ?>"></script>
    <script src="<?= base_url('/assets/login_v6/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!--===============================================================================================-->
    <script src="<?= base_url('/assets/login_v6/vendor/select2/select2.min.js'); ?>"></script>
<!--===============================================================================================-->
    <script src="<?= base_url('/assets/login_v6/vendor/daterangepicker/moment.min.js'); ?>"></script>
    <script src="<?= base_url('/assets/login_v6/vendor/daterangepicker/daterangepicker.js'); ?>"></script>
<!--===============================================================================================-->
    <script src="<?= base_url('/assets/login_v6/vendor/countdowntime/countdowntime.js'); ?>"></script>
<!--===============================================================================================-->
    <script src="<?= base_url('/assets/login_v6/js/main.js'); ?>"></script>