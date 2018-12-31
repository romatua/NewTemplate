<!-- page content -->
<div class="right_col" role="main">
   <div class="">
      <div class="row">
         <div class="col-md-12">
            <div class="x_panel">
               <div class="x_title">
                  <h2><?php echo lang('edit_group_heading');?><small><?php echo lang('edit_group_subheading');?></small></h2>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                  <div id="infoMessage"><?php echo $message;?></div>
                  <?php echo form_open(uri_string());?>
                  <div class="col-md-4">
                     <?php echo lang('edit_group_name_label', 'group_name');?> <br />
            <?php echo form_input($group_name,'','class="form-control"');?>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-4">
                     <?php echo lang('edit_group_desc_label', 'description');?> <br />
            <?php echo form_input($group_description,'','class="form-control"');?>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-4"><?php echo form_submit('submit', lang('edit_group_submit_btn'));?></div>
                  <?php echo form_close();?>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /page content -->