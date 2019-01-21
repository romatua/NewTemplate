
<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>


        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left"><?php echo lang('edit_group_heading');?>
                     <small><?php echo lang('edit_group_subheading');?></small>
                    </h2>
                    <div class="actions panel_actions pull-right">
                        <!-- <i class="box_toggle fa fa-chevron-down"></i>
                        <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
                        <i class="box_close fa fa-times"></i> -->
                    </div>
                </header>
                <div class="content-body">    
                    <div class="row">
                            <?php
                            if(!empty($message)){
                                $alert = explode('<p>', $message);
                                foreach ($alert as $row) {
                                    if (empty($row)) {
                                        continue;
                                    }
                            ?>
                            <div class="alert alert-warning alert-dismissible fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button><strong>Warning:</strong> <?php echo strip_tags($row); ?>
                            </div>
                            <?php
                                }
                            }else{
                                echo "";
                            }
                            ?>
                        <div class="col-md-5 col-sm-6 col-xs-7">
                            <?php echo form_open(uri_string()); ?>

                                <div class="form-group">
                                    <?php echo lang('edit_group_name_label', 'group_name', 'class="form-label"'); ?>
                                    <div class="controls">
                                        <?php echo form_input($group_name,'', 'class="form-control"'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <?php echo lang('edit_group_desc_label', 'description', 'class="form-label"'); ?>
                                    <div class="controls">
                                        <?php echo form_input($group_description, '', 'class="form-control"'); ?>
                                    </div>
                                </div>

                                <div class="pull-left">
                                    <?php echo form_submit('submit', lang('edit_group_submit_btn'),'class="btn btn-success"'); ?>
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </section>
        </div>


    </section>
</section>
<!-- END CONTENT -->