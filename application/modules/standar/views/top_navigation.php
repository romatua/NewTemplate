<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <li>
            <a href="<?php echo site_url('auth/logout');?>"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
          </li>
          <!-- <li>
            <a href="JavaScript:void(0);">
              <?php 
              $user = $this->ion_auth->user()->row();
              echo $user->username .' | '. $user->first_name .' '. $user->last_name .' | '. $user->company;
              ?> 
            </a>
          </li> -->
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- /top navigation -->