<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:22:00
  from '/sites/git.bronyfurry.com/view/tpl/admin_plugins.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231ba483bd281_93409895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be1239b768888a875855b2c23a47ab6e3a83caae' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/admin_plugins.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231ba483bd281_93409895 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="generic-content-wrapper">
	<div class="section-title-wrapper">
		<?php if ($_smarty_tpl->tpl_vars['allowManageRepos']->value) {?>
		<div class="float-end">
			<button class="btn btn-success btn-sm" onclick="openClose('form');"><?php echo $_smarty_tpl->tpl_vars['managerepos']->value;?>
</button>
		</div>
		<?php }?>
		<h2 id="title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</h2>
		<div class="clear"></div>
	</div>
	<div id="form" class="section-content-tools-wrapper"<?php if (!$_smarty_tpl->tpl_vars['expandform']->value) {?> style="display:none;"<?php }?>>
         
        <div class="clear"></div>
        <div class="section-title-wrapper" style="margin-top: 20px;">
          <h2><?php echo $_smarty_tpl->tpl_vars['installedtitle']->value;?>
</h2>
          <div class="clear"></div>
        </div>
      <div class="table-responsive section-content-tools-wrapper">
      <table class="table table-responsive table-striped table-hover">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addonrepos']->value, 'repo');
$_smarty_tpl->tpl_vars['repo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['repo']->value) {
$_smarty_tpl->tpl_vars['repo']->do_else = false;
?>
        <tr>
            <td style="width: 70%;">
				<span class="float-start"><?php echo $_smarty_tpl->tpl_vars['repo']->value['name'];?>
</span><span id="update-message-<?php echo $_smarty_tpl->tpl_vars['repo']->value['name'];?>
" style="margin-left: 20px;"></span>
            </td>
            <td style="width: 15%;">
              <button class="btn btn-sm btn-primary float-end" style="margin-left: 10px; margin-right: 10px;" onclick="updateAddonRepo('<?php echo $_smarty_tpl->tpl_vars['repo']->value['name'];?>
'); return false;"><i class='fa fa-download'></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['repoUpdateButton']->value;?>
</button>
            </td>
            <td style="width: 15%;">
              <button class="btn btn-sm btn-danger float-end" style="margin-left: 10px; margin-right: 0px;" onclick="removeAddonRepo('<?php echo $_smarty_tpl->tpl_vars['repo']->value['name'];?>
'); return false;"><i class='fa fa-trash-o'></i>&nbsp;<?php echo $_smarty_tpl->tpl_vars['repoRemoveButton']->value;?>
</button>
            </td>
        <div class="clear"></div>
        </td></tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table>
      </div>
      <div class="clear"></div>
         <div class="section-title-wrapper">
          <h2><?php echo $_smarty_tpl->tpl_vars['addnewrepotitle']->value;?>
</h2>
          <div class="clear"></div>
        </div>
		<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

    </div>
      <div class="clear"></div>
    <div id="chat-rotator" class="spinner-wrapper">
        <div class="spinner s"></div>
    </div>
    <div class="clear"></div>
	<div class="section-content-wrapper-np">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['plugins']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
      <div class="section-content-tools-wrapper" id="pluginslist">		
		<div class="contact-info plugin <?php echo $_smarty_tpl->tpl_vars['p']->value[1];?>
">
            <?php if (!$_smarty_tpl->tpl_vars['p']->value[2]['disabled']) {?>				
            <a class='toggleplugin' href='<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin/<?php echo $_smarty_tpl->tpl_vars['function']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value[0];?>
?a=t&amp;t=<?php echo $_smarty_tpl->tpl_vars['form_security_token']->value;?>
' title="<?php if ($_smarty_tpl->tpl_vars['p']->value[1] == 'on') {?>Disable<?php } else { ?>Enable<?php }?>" ><i class='fa <?php if ($_smarty_tpl->tpl_vars['p']->value[1] == 'on') {?>fa-check-square-o<?php } else { ?>fa-square-o<?php }?> admin-icons'></i></a>
            <?php } else { ?>
            <i class='fa fa-stop admin-icons'></i>
            <?php }?>
            <a href='<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/admin/<?php echo $_smarty_tpl->tpl_vars['function']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['p']->value[0];?>
'><span class='name'><?php echo $_smarty_tpl->tpl_vars['p']->value[2]['name'];?>
</span></a> - <span class="version"><?php echo $_smarty_tpl->tpl_vars['p']->value[2]['version'];?>
</span><?php if ($_smarty_tpl->tpl_vars['p']->value[2]['disabled']) {?> <?php echo $_smarty_tpl->tpl_vars['disabled']->value;
}?>
            <?php if ($_smarty_tpl->tpl_vars['p']->value[2]['experimental']) {?> <?php echo $_smarty_tpl->tpl_vars['experimental']->value;?>
 <?php }
if ($_smarty_tpl->tpl_vars['p']->value[2]['unsupported']) {?> <?php echo $_smarty_tpl->tpl_vars['unsupported']->value;?>
 <?php }?>

            <div class='desc'><?php echo $_smarty_tpl->tpl_vars['p']->value[2]['description'];?>
</div>
		</div>
	</div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      
	</div>
</div>
<?php echo $_smarty_tpl->tpl_vars['newRepoModal']->value;?>

<?php echo '<script'; ?>
>
  
  // TODO: Implement a simple interface controller that reconfigures the modal dialog
  // for each action in a more organized way
  
  function adminPluginsAddRepo() {
      $("#generic-modal-ok-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
").removeClass('btn-success');
      $("#generic-modal-ok-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
").addClass('btn-primary');
      var repoURL = $('#id_repoURL').val();
      var repoName = $('#id_repoName').val();
      $('#chat-rotator').show();
      $.post(
        "/admin/addons/addrepo", {repoURL: repoURL, repoName: repoName}, 
            function(response) {
                $('#chat-rotator').hide();
                if (response.success) {
                  var modalBody = $('#generic-modal-body-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
');
                  modalBody.html('<div>'+response.repo.readme+'</div>');
                  modalBody.append('<h2>Repo Info</h2><p>Message: ' + response.message + '</p>');
                  modalBody.append('<h4>Branches</h4><p>'+JSON.stringify(response.repo.branches)+'</p>');
                  modalBody.append('<h4>Remotes</h4><p>'+JSON.stringify(response.repo.remote)+'</p>');
                  $('.modal-dialog').width('80%');
                  $("#generic-modal-ok-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
").off('click');
                  $("#generic-modal-ok-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
").click(function () {
                    installAddonRepo();
                  });
                  $('#generic-modal-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
').modal();
                } else {
                    window.console.log('Error adding repo :' + response['message']);
                }
                return false;
            },
        'json');
  }
  
  function installAddonRepo() {
      var repoURL = $('#id_repoURL').val();
      var repoName = $('#id_repoName').val();
      $.post(
        "/admin/addons/installrepo", {repoURL: repoURL, repoName: repoName}, 
            function(response) {
                if (response.success) {
                  $('#generic-modal-title-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
').html('Addon repo installed');
                  var modalBody = $('#generic-modal-body-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
');
                  modalBody.html('<h2>Repo Info</h2><p>Message: ' + response.message + '</p>');
                  modalBody.append('<h4>Branches</h4><p>'+JSON.stringify(response.repo.branches)+'</p>');
                  modalBody.append('<h4>Remotes</h4><p>'+JSON.stringify(response.repo.remote)+'</p>');
                  $('.modal-dialog').width('80%');
                  //$("#generic-modal-cancel-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
").hide();
                  $("#generic-modal-ok-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
").html('OK');
                  $("#generic-modal-ok-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
").removeClass('btn-primary');
                  $("#generic-modal-ok-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
").addClass('btn-success');
                  $("#generic-modal-ok-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
").off('click');
                  $("#generic-modal-ok-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
").click(function () {
                    $('#generic-modal-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
').modal('hide');
                    if(confirm('Repo installed. Click OK to refresh page.')) {
                      location.reload();
                    }
                  });
                  $('#generic-modal-<?php echo $_smarty_tpl->tpl_vars['newRepoModalID']->value;?>
').modal();
              
                } else {
                    window.console.log('Error installing repo :' + response['message']);
                    alert('Error installing addon repo!');
                }
                return false;
            },
        'json');
  }
  function updateAddonRepo(repoName) {
    if(confirm('Are you sure you want to update the addon repo ' + repoName + '?')) {
      $.post(
        "/admin/addons/updaterepo", {repoName: repoName}, 
            function(response) {
                if (response.success) {
                  window.console.log('Addon repo '+repoName+' successfully updated :' + response['message']);
                  //alert('Addon repo updated.');
				  $('#update-message-' + repoName).css('background-color', 'yellow');
				  $('#update-message-' + repoName).html('Repo updated!');
				  setTimeout(function () {
					  $('#update-message-' + repoName).html('');
				  }, 60000);
                } else {
                  window.console.log('Error updating repo :' + response['message']);
                  //alert('Error updating addon repo!');
				  $('#update-message-' + repoName).css('background-color', 'red');
				  $('#update-message-' + repoName).html('Error updating repo!');
				  setTimeout(function () {
					  $('#update-message-' + repoName).html('');
				  }, 60000);
                }
                return false;
            },
        'json');
    }
  }
  function switchAddonRepoBranch(repoName) {
    window.console.log('switchAddonRepoBranch: ' + repoName);
    // TODO: Discover the available branches and create an interface to switch between them
  }
  
  function removeAddonRepo(repoName) {
    // TODO: Unlink the addons
    if(confirm('Are you sure you want to remove the addon repo ' + repoName + '?')) {
      $.post(
        "/admin/addons/removerepo", {repoName: repoName}, 
            function(response) {
                if (response.success) {
                  window.console.log('Addon repo '+repoName+' successfully removed :' + response['message']);
                  if(confirm('Repo deleted. Click OK to refresh page.')) {
                    location.reload();
                  }
                } else {
                  window.console.log('Error removing repo :' + response['message']);
                  alert('Error removing addon repo!');
                }
                return false;
            },
        'json');
    }
  }  
  
<?php echo '</script'; ?>
>
<?php }
}
