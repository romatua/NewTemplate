<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><?php echo lang('edit_user_heading'); ?><small><?php echo lang('edit_user_subheading'); ?></small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div id="infoMessage"><?php echo $message; ?></div>
                        <?php echo form_open(uri_string()); ?>
                        <div class="col-md-4">
                            <?php echo lang('edit_user_fname_label', 'first_name'); ?> <br />
                            <?php echo form_input($first_name, '', 'class="form-control"'); ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <?php echo lang('edit_user_lname_label', 'last_name'); ?> <br />
                            <?php echo form_input($last_name, '', 'class="form-control"'); ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <?php echo lang('edit_user_company_label', 'company'); ?> <br />
                            <?php echo form_input($company, '', 'class="form-control"'); ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <?php echo lang('edit_user_phone_label', 'phone'); ?> <br />
                            <?php echo form_input($phone, '', 'class="form-control"'); ?>
                        </div>                        
                        <div class="clearfix"></div>
                        <div class="col-md-4">
                            <?php echo lang('edit_user_email_label', 'email'); ?> <br />
                            <?php echo form_input($email, '', 'class="form-control"'); ?>
                        </div>                        
                        <div class="clearfix"></div>
                        <?php
                        $currentuser = $this->ion_auth->user()->row();
                        //print_r($user->id_cabang);
                        //$user_groups = $this->ion_auth->get_users_groups($user->id)->result();
                        //print_r($user_groups);
                        $groups_member = array('cabangjasindo', 'admin');
                        //if (($this->ion_auth->is_admin()) || ($this->ion_auth->in_group($groups_member))) {
                        if ($this->ion_auth->in_group($groups_member)) {
                            //echo "in grup";
                        ?>
                        <div class="col-md-4">
                            <?php echo lang('edit_user_cabang_label', 'id_cabang'); ?> <br />
                            <select class="form-control" name="id_cabang" id="id_cabang" title=''>
                                <?php
                                foreach ($cabang as $row) {
                                echo '<option value="' . $row->id_cabang . '" ';
                                if ($id_cabang['value'] == $row->id_cabang) {
                                echo 'selected';
                                }
                                echo '>' . $row->nama_cabang . '</option>';
                                }
                                echo '>' . $row->nama_cabang . '</option>';                               
                                ?>
                            </select>
                        </div>
                        <?php
                        } else {
                            //echo "out grup";
                            echo form_hidden('id_cabang', $id_cabang['value']);
                        }
                        ?>
                        <div class="clearfix"></div>
                        <?php
                        $currentuser = $this->ion_auth->user()->row();
                        //print_r($user->id_cabang);
                        //$user_groups = $this->ion_auth->get_users_groups($user->id)->result();
                        //print_r($user_groups);
                        $groups_member = array('cabangjasindo', 'admin','adminbank');
                        //if (($this->ion_auth->is_admin()) || ($this->ion_auth->in_group($groups_member))) {
                        if ($this->ion_auth->in_group($groups_member)) {
                            //echo "in grup";
                        ?>
                        <div class="col-md-4">
                            <?php echo lang('edit_user_cabangbank_label', 'kc_kcp'); ?> <br />
                            <select class="form-control" name="kc_kcp" id="kc_kcp" title=''>
                                <?php
                                foreach ($cabangbank as $row) {
                                echo '<option value="' . $row->kc_kcp . '" ';
                                if ($kc_kcp['value'] == $row->kc_kcp) {
                                echo 'selected';
                                }
                                echo '>' .$row->kc_kcp.'-'.  $row->nama_cabang_bws . '</option>';
                                }
                                echo '>' .$row->kc_kcp.'-'.  $row->nama_cabang_bws . '</option>';                               
                                ?>
                            </select>
                        </div>
                        <?php
                        } else {
                            //echo "out grup";
                            echo form_hidden('kc_kcp', $kc_kcp['value']);
                        }
                        ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4">
                        <?php echo lang('edit_user_password_label', 'password'); ?> <br />
                        <?php echo form_input($password, '', 'class="form-control"'); ?>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4">
                        <?php echo lang('edit_user_password_confirm_label', 'password_confirm'); ?> <br />
                        <?php echo form_input($password_confirm, '', 'class="form-control"'); ?>
                    </div>

                    <?php
                    $groups_name = array('cabang', 'adminbni');
                    if ($this->ion_auth->is_admin() || $this->ion_auth->in_group($groups_name)):
                        ?>
                        <div class="clearfix"></div>
                        <div class="col-md-4 checkbox">
                            <?php echo lang('edit_user_groups_heading'); ?>
                            <?php foreach ($groups as $group): ?>
                                <label class="checkbox">
                                    <?php
                                    $gID = $group['id'];
                                    $checked = null;
                                    $item = null;
                                    //pada opsi admin        
                                    if ($group['name'] == 'admin') {
                                        if (!$this->ion_auth->is_admin()) {
                                            continue;
                                        }
                                    }
                                    //pada opsi uupm 
                                    if ($group['name'] == 'cabang') {
                                        $groups_name2 = array('cabang', 'admin');
                                        if (!$this->ion_auth->in_group($groups_name2)) {
                                            continue;
                                        }
                                    }
                                    //pada opsi kelompok 
                                    if ($group['name'] == 'adminbni') {
                                        $groups_name3 = array('adminbni', 'admin');
                                        if (!$this->ion_auth->in_group($groups_name3)) {
                                            continue;
                                        }
                                    }
                                    //
                                    foreach ($currentGroups as $grp) {
                                        if ($gID == $grp->id) {
                                            $checked = ' checked="checked"';
                                            break;
                                        }
                                    }
                                    ?>
                                    <!--<input type="checkbox" name="groups[]" value="<?php echo $group['id']; ?>"<?php echo $checked; ?> class="flat">-->
                                    <input type="radio" name="groups[]" value="<?php echo $group['id']; ?>"<?php echo $checked; ?> class="flat">
                                    <?php echo htmlspecialchars($group['description'], ENT_QUOTES, 'UTF-8'); ?>
                                </label>
                            <?php endforeach ?>

                        </div>
                    <?php endif ?>
                    <?php echo form_hidden('id', $user->id); ?>
                    <?php echo form_hidden($csrf); ?>

                    <div class="clearfix"></div>
                    <div class="col-md-4"><?php echo form_submit('submit', lang('edit_user_submit_btn')); ?></div>
                    <?php echo form_close(); ?>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->

