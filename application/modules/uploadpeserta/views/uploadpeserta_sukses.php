
<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>

        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left">Upload Selesai
                        <small></small>
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
                        if(!empty($upload_msg)){
                            ?>
                            <div class="alert alert-success alert-dismissible fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button><strong>Warning:</strong> <?php echo strip_tags($upload_msg); ?>
                            </div>
                            <?php
                        }else{
                            echo "";
                        }
                        ?>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                        <?php echo form_open_multipart('uploadpeserta/do_upload'); ?>
                        <div class="form-group">
                            <!-- <label class="form-label" for="formfield10">Upload File</label>
                            <span class="desc">e.g. "character.jpg"</span> -->
                            <div class="controls">
                                <input type="file" class="form-control" id="formfield10" name="formfield10" >
                            </div>
                        </div>
                        <div class="pull-left">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
                        <div class="pull-left">
                            Format file dapat didownload dari 
                            <a href="<?= base_url('download/template_upload.xlsx'); ?>" class="btn-info badge">sini</a>
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