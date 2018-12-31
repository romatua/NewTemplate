<!-- page content -->
<div class="right_col" role="main">
   <div class="">
      <div class="row">
         <div class="col-md-12">
            <div class="x_panel">
               <div class="x_title">
                  <h2><?php echo lang('deactivate_heading');?><small><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></small></h2>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                  <?php echo form_open("auth/deactivate/".$user->id);?>
                  <div class="col-md-4">
                      <?php echo lang('deactivate_confirm_y_label', 'confirm');?>
                      <input type="radio" name="confirm" value="yes" checked="checked" />
                      <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
                      <input type="radio" name="confirm" value="no" />
                  </div>
                  
                  <div class="clearfix"></div>
                   <?php echo form_hidden($csrf); ?>
                   <?php echo form_hidden(array('id'=>$user->id)); ?>
                  <div class="col-md-4"><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></div>
                  <?php echo form_close();?>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /page content -->