
<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>


        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left"><?php echo lang('edit_user_heading'); ?>
                        <small><?php echo lang('edit_user_subheading'); ?></small>
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
                            <div class="alert alert-success alert-dismissible fade in">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button><strong>Success:</strong> <?php echo strip_tags($row); ?>
                            </div>
                            <?php
                                }
                            }else{
                                echo "";
                            }
                            ?>
                        <div class="col-md-5 col-sm-6 col-xs-7">
                            <!-- <form id="msg_validate" action="javascript:;" novalidate="novalidate"> -->
                            <?php echo form_open(uri_string()); ?>

                                <div class="form-group">
                                    <!-- <label class="form-label" for="formfield1">Name</label> -->
                                    <?php echo lang('edit_user_fname_label', 'first_name', 'class="form-label"'); ?>
                                    <!-- <span class="desc">e.g. "Beautiful Mind"</span> -->
                                    <div class="controls">
                                        <!-- <input type="text" class="form-control" id="formfield1" name="formfield1" > -->
                                        <?php echo form_input($first_name, '', 'class="form-control"'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- <label class="form-label" for="formfield2">Email</label> -->
                                    <?php echo lang('edit_user_lname_label', 'last_name', 'class="form-label"'); ?>
                                    <!-- <span class="desc">e.g. "some@example.com"</span> -->
                                    <div class="controls">
                                        <!-- <input type="text" class="form-control" id="formfield2" name="formfield2" > -->
                                        <?php echo form_input($last_name, '', 'class="form-control"'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- <label class="form-label" for="formfield3">Website</label> -->
                                    <?php echo lang('edit_user_company_label', 'company', 'class="form-label"'); ?>
                                    <!-- <span class="desc">e.g. "http://www.example.com"</span> -->
                                    <div class="controls">
                                        <!-- <input type="text" class="form-control" id="formfield3" name="formfield3" > -->
                                        <?php echo form_input($company, '', 'class="form-control"'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- <label class="form-label" for="formfield3">Website</label> -->
                                    <?php echo lang('edit_user_phone_label', 'phone', 'class="form-label"'); ?>
                                    <!-- <span class="desc">e.g. "http://www.example.com"</span> -->
                                    <div class="controls">
                                        <!-- <input type="text" class="form-control" id="formfield3" name="formfield3" > -->
                                        <?php echo form_input($phone, '', 'class="form-control"'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- <label class="form-label" for="formfield3">Website</label> -->
                                    <?php echo lang('edit_user_email_label', 'email', 'class="form-label"'); ?>
                                    <!-- <span class="desc">e.g. "http://www.example.com"</span> -->
                                    <div class="controls">
                                        <!-- <input type="text" class="form-control" id="formfield3" name="formfield3" > -->
                                        <?php echo form_input($email, '', 'class="form-control"'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- <label class="form-label" for="formfield3">Website</label> -->
                                    <?php echo lang('edit_user_password_label', 'password', 'class="form-label"'); ?>
                                    <!-- <span class="desc">e.g. "http://www.example.com"</span> -->
                                    <div class="controls">
                                        <!-- <input type="text" class="form-control" id="formfield3" name="formfield3" > -->
                                        <?php echo form_input($password, '', 'class="form-control"'); ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- <label class="form-label" for="formfield3">Website</label> -->
                                    <?php echo lang('edit_user_password_confirm_label', 'password_confirm', 'class="form-label"'); ?>
                                    <!-- <span class="desc">e.g. "http://www.example.com"</span> -->
                                    <div class="controls">
                                        <!-- <input type="text" class="form-control" id="formfield3" name="formfield3" > -->
                                        <?php echo form_input($password_confirm, '', 'class="form-control"'); ?>
                                    </div>
                                </div>

                                <?php
                                $groups_name = array('cabang', 'adminbni');
                                if ($this->ion_auth->is_admin() || $this->ion_auth->in_group($groups_name)):
                                ?>
                                <div class="form-group">
                                    <!-- <label class="form-label" for="formfield3">Website</label> -->
                                    <?php echo lang('edit_user_groups_heading', '', 'class="form-label"'); ?>
                                    <!-- <span class="desc">e.g. "http://www.example.com"</span> -->
                                    <ul class="list-unstyled">
                                        <?php foreach ($groups as $group): ?>
                                            <li>
                                                <label class="checkbox iradio-label form-label">
                                                    <?php
                                                    $gID = $group['id'];
                                                    $checked = null;
                                                    $item = null;
                                                    if ($group['name'] == 'admin') { //pada opsi admin        
                                                        if (!$this->ion_auth->is_admin()) {
                                                            continue;
                                                        }
                                                    }                                                    
                                                    foreach ($currentGroups as $grp) {
                                                        if ($gID == $grp->id) {
                                                            $checked = ' checked="checked"';
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                                    <!--<input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>"<?php echo $checked; ?> class="flat">-->
                                                    <input type="radio" name="groups[]" id="minimal-radio-2" class="icheck-minimal-purple" value="<?php echo $group['id']; ?>"
                                                    <?php echo $checked; ?> >
                                                    <?php echo htmlspecialchars($group['description'], ENT_QUOTES, 'UTF-8'); ?>
                                                </label>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </div>
                                <?php endif ?>

                                <?php echo form_hidden('id', $user->id); ?>
                                <?php echo form_hidden($csrf); ?>

                                <div class="pull-left">
                                    <!-- <button type="submit" class="btn btn-success">Save</button> -->
                                    <?php echo form_submit('submit', lang('edit_user_submit_btn'),'class="btn btn-success"'); ?>
                                    <!-- <button type="button" class="btn">Cancel</button> -->
                                </div>
                            <?php echo form_close(); ?>
                            <!-- </form> -->
                        </div>
                    </div>
                </div>
            </section>
        </div>


    </section>
</section>
<!-- END CONTENT -->