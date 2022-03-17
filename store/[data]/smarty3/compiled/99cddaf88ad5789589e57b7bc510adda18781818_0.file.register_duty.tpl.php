<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:20:04
  from '/sites/git.bronyfurry.com/view/tpl/register_duty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231b9d47ea908_23318576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99cddaf88ad5789589e57b7bc510adda18781818' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/tpl/register_duty.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:field_input.tpl' => 1,
  ),
),false)) {
function content_6231b9d47ea908_23318576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:field_input.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('field'=>$_smarty_tpl->tpl_vars['register_duty']->value), 0, false);
?>
<pre id="zar083msg" class='zarhid'></pre>
<?php echo '<script'; ?>
>
  // @hilmar |->
  typeof(window.tao) == 'undefined' ? window.tao = {} : '';
  tao.zar = { vsn: '2.0.0', s: {}, t: {} };
  <?php echo $_smarty_tpl->tpl_vars['tao']->value;?>

  $('head').append(
  '<style> '+
  '  .zarmsg { font-family: monospace; }'+
  '  .zarhid { visibility: hidden; }'+
  '</style>');
  tao.zar.op = 'zar083';
 $('#zar083a').click( function() {
   $.ajax({
       type: 'POST', url: 'admin/site', 
      data: {
      	zarop: tao.zar.op,
        register_duty: $('#id_register_duty').val(),
        form_security_token: $("input[name='form_security_token']").val() 
      }
    }).done( function(r) {
      tao.zar.r = JSON.parse(r);
      $('#zar083msg').attr('style', 'visibility: visible;');
      $('#zar083msg').text(tao.zar.r.msgbg);
    })
 });
 <?php echo '</script'; ?>
><?php }
}
