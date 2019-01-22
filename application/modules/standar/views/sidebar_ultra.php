<?=
$x = '';
if (!$this->ion_auth->logged_in()) {
redirect('auth/login', 'refresh');
}
$user = $this->ion_auth->user()->row(); /*get data user*/
?>
<!-- SIDEBAR - START -->
<div class="page-sidebar ">

    <!-- MAIN MENU - START -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

        <!-- USER INFO - START -->
        <div class="profile-info row">

            <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                <a href="javascript:;">
                    <!-- <img src="<?= site_url(IMAGE_PROFILE);?>" class="img-responsive img-circle"> -->
                    <img src="<?= site_url('assets/ultra/data/profile/profile.png');?>" class="img-responsive img-circle">
                </a>
            </div>

            <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                <h3>
                    <a href="javascript:;"><?php echo ucfirst($user->first_name .' '. $user->last_name); ?></a>

                    <!-- Available statuses: online, idle, busy, away and offline -->
                    <span class="profile-status online"></span>
                </h3>

                <p class="profile-title"><?php echo $user->company; ?></p>

            </div>

        </div>
        <!-- USER INFO - END -->



        <ul class='wraplist'>   


            <li class=""> 
                <a href="<?= site_url('/dashboard/dashboard_manajemen'); ?>">
                    <i class="fa fa-dashboard"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class=""> 
                <a href="javascript:;">
                    <i class="fa fa-suitcase"></i>
                    <span class="title">Data Peserta</span>
                    <span class="arrow "></span><span class="label label-orange">NEW</span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="<?= site_url('/formapp/daftar_peserta'); ?>"  target = '_self' >Daftar Peserta</a>
                    </li>
                </ul>
            </li>
            <li class=""> 
                <a href="javascript:;">
                    <i class="fa fa-sliders"></i>
                    <span class="title">Forms</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu" >
                    <li>
                        <a class="" href="<?= site_url('/uploadpeserta'); ?>" >Form Upload</a>
                    </li>
                    <li>
                        <a class="" href="javascript:;" >Form Components</a>
                    </li>
                </ul>
            </li>
            <li class=""> <a href="javascript:;"> <i class="fa fa-folder-open"></i> <span class="title">Menu Levels</span> <span class="arrow "></span> </a>
                <ul class="sub-menu">
                    <li > <a href="<?= site_url('/dashboard/dashboard_manajemen'); ?>"> <span class="title">Level 1.1</span> </a> </li>
                    <li > <a href="javascript:;"> <span class="title">Level 1.2</span> <span class="arrow "></span> </a>
                        <ul class="sub-menu">
                            <li > <a href="<?= site_url('/formapp/daftar_peserta'); ?>"> <span class="title">Level 2.1</span> </a></li>
                            <li > <a href="javascript:;"> <span class="title">Level 2.2</span> <span class="arrow "></span></a> 
                                <ul class="sub-menu">
                                    <li > <a href="javascript:;"> <span class="title">Level 3.1</span> <span class="arrow "></span></a> 
                                        <ul class="sub-menu">
                                            <li > <a href="<?= site_url('/'); ?>"> <span class="title">Level 4.1</span> </a> </li>
                                            <li > <a href="<?= site_url('/formapp/daftar_peserta'); ?>"> <span class="title">Level 4.2</span> </a> </li>
                                        </ul>
                                    </li>
                                    <li > <a href="<?= site_url('/dashboard/dashboard_manajemen'); ?>"> <span class="title">Level 3.2</span> </a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>


        </ul>

    </div>
    <!-- MAIN MENU - END -->



    <!-- <div class="project-info">

        <div class="block1">
            <div class="data">
                <span class='title'>New&nbsp;Orders</span>
                <span class='total'>2,345</span>
            </div>
            <div class="graph">
                <span class="sidebar_orders">...</span>
            </div>
        </div>

        <div class="block2">
            <div class="data">
                <span class='title'>Visitors</span>
                <span class='total'>345</span>
            </div>
            <div class="graph">
                <span class="sidebar_visitors">...</span>
            </div>
        </div>

    </div> -->



</div>
<!--  SIDEBAR - END -->