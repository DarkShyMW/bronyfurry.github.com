<?php
/* Smarty version 3.1.39, created on 2022-03-16 10:05:16
  from '/sites/git.bronyfurry.com/view/ru/htconfig.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b65c13e7a5_45364137',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ae7b24ceae3cadd0451a76199d2c10977a82c9e' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/ru/htconfig.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231b65c13e7a5_45364137 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

';?>
// Set the following for your MySQL installation
// Copy or rename this file to .htconfig.php

$db_host = '<?php echo $_smarty_tpl->tpl_vars['dbhost']->value;?>
';
$db_port = '<?php echo $_smarty_tpl->tpl_vars['dbport']->value;?>
';
$db_user = '<?php echo $_smarty_tpl->tpl_vars['dbuser']->value;?>
';
$db_pass = '<?php echo $_smarty_tpl->tpl_vars['dbpass']->value;?>
';
$db_data = '<?php echo $_smarty_tpl->tpl_vars['dbdata']->value;?>
';
$db_type = '<?php echo $_smarty_tpl->tpl_vars['dbtype']->value;?>
'; // an integer. 0 or unset for mysql, 1 for postgres

/*
 * Notice: Many of the following settings will be available in the admin panel 
 * after a successful site install. Once they are set in the admin panel, they
 * are stored in the DB - and the DB setting will over-ride any corresponding
 * setting in this file
 *
 * The command-line tool util/config is able to query and set the DB items 
 * directly if for some reason the admin panel is not available and a system
 * setting requires modification. 
 *
 */ 


// Choose a legal default timezone. If you are unsure, use "America/Los_Angeles".
// It can be changed later and only applies to timestamps for anonymous viewers.

App::$config['system']['timezone'] = '<?php echo $_smarty_tpl->tpl_vars['timezone']->value;?>
';

// What is your site name?

App::$config['system']['baseurl'] = '<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
';
App::$config['system']['sitename'] = "Hubzilla";
App::$config['system']['location_hash'] = '<?php echo $_smarty_tpl->tpl_vars['site_id']->value;?>
';

// Your choices are REGISTER_OPEN, REGISTER_APPROVE, or REGISTER_CLOSED.
// Be certain to create your own personal account before setting 
// REGISTER_CLOSED. 'register_text' (if set) will be displayed prominently on 
// the registration page. REGISTER_APPROVE requires you set 'admin_email'
// to the email address of an already registered person who can authorise
// and/or approve/deny the request.

App::$config['system']['register_policy'] = REGISTER_OPEN;
App::$config['system']['register_text'] = '';
App::$config['system']['admin_email'] = '<?php echo $_smarty_tpl->tpl_vars['adminmail']->value;?>
';

// Maximum size of an imported message, 0 is unlimited

App::$config['system']['max_import_size'] = 200000;

// maximum size of uploaded photos

App::$config['system']['maximagesize'] = 8000000;

// Location of PHP command line processor

App::$config['system']['php_path'] = '<?php echo $_smarty_tpl->tpl_vars['phpath']->value;?>
';

// Configure how we communicate with directory servers.
// DIRECTORY_MODE_NORMAL     = directory client, we will find a directory
// DIRECTORY_MODE_SECONDARY  = caching directory or mirror
// DIRECTORY_MODE_PRIMARY    = main directory server
// DIRECTORY_MODE_STANDALONE = "off the grid" or private directory services

App::$config['system']['directory_mode']  = DIRECTORY_MODE_NORMAL;

// default system theme

App::$config['system']['theme'] = 'redbasic';

<?php }
}
