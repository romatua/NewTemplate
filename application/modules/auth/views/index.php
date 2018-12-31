<!-- page content -->
<div class="right_col" role="main">
   <div class="">
      <div class="row">
         <div class="col-md-12">
            <div class="x_panel">
               <div class="x_title">
                  <h2><?php echo lang('index_heading');?><small><?php echo lang('index_subheading');?></small></h2>
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                  <div id="infoMessage"><?php echo $message;?></div>
                  
                <?php echo form_open(uri_string() . '', 'role="search" class="form"'); ?>  
                <div id="infoMessage">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group pull-right">                      
                            <input type="text" class="form-control input-sm" placeholder="Cari berdasarkan username/first name/last name" name="q" autocomplete="off"> 
                            <span class="input-group-btn">
                                <button class="btn btn-primary btn-sm" type="submit"><i class="glyphicon glyphicon-search"></i> Cari</button>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-3"></div>
                    <div class="col-sm-3"></div>
                  </div>
                </div>

                </form> 
                <?php echo form_close(); ?>
                  <div id="infoMessage"><?php echo $links;?></div>
                  <table class="table">
                     <tr>
                         <th>Username</th>
                        <th><?php echo lang('index_fname_th');?></th>
                        <th><?php echo lang('index_lname_th');?></th>
                        <th><?php echo lang('index_email_th');?></th>
                        <th><?php echo lang('index_groups_th');?></th>
                        <th><?php echo lang('index_status_th');?></th>
                        <th><?php echo lang('index_action_th');?></th>
                     </tr>
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
                  </table>
                  <p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> </p>
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- /page content -->