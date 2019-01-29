
<!-- START CONTENT -->
<section id="main-content" class=" ">
    <section class="wrapper main-wrapper" style=''>

      
        <div class="col-lg-12">
            <section class="box ">
                <header class="panel_header">
                    <h2 class="title pull-left"><?php echo lang('index_heading');?>
                      <small><?php echo lang('index_subheading');?></small>
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
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <table id="example-1" class="table table-striped dt-responsive display" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>Username</th>
                                <th><?php echo lang('index_fname_th');?></th>
                                <th><?php echo lang('index_lname_th');?></th>
                                <th><?php echo lang('index_email_th');?></th>
                                <th><?php echo lang('index_groups_th');?></th>
                                <th><?php echo lang('index_status_th');?></th>
                                <th><?php echo lang('index_action_th');?></th>
                              </tr>
                            </thead>

                            <tfoot>
                              <tr>
                                <th>Username</th>
                                <th><?php echo lang('index_fname_th');?></th>
                                <th><?php echo lang('index_lname_th');?></th>
                                <th><?php echo lang('index_email_th');?></th>
                                <th><?php echo lang('index_groups_th');?></th>
                                <th><?php echo lang('index_status_th');?></th>
                                <th><?php echo lang('index_action_th');?></th>
                              </tr>
                            </tfoot>

                            <tbody>
                              <?php foreach ($users as $user):?>
                              <tr>
                                <td><?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?></td>
                                <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                                <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                                <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                                <td>
                                  <?php foreach ($user->groups as $group):?>
                                    <?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?><br />
                                  <?php endforeach?>
                                </td>
                                <td><?php echo ($user->active) ? anchor("auth/deactivate/".$user->id, lang('index_active_link')) : anchor("auth/activate/". $user->id, lang('index_inactive_link'));?></td>
                                <td><?php echo anchor("auth/edit_user/".$user->id, 'Edit') ;?></td>
                              </tr>
                              <?php endforeach;?>
                            </tbody>
                          </table>
                        </div>
                  </div>
                </div>
            </section>
        </div>


    </section>
</section>
<!-- END CONTENT -->