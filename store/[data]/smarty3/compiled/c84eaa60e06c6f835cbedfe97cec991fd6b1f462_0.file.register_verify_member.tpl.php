<?php
/* Smarty version 3.1.39, created on 2022-03-16 13:32:22
  from '/sites/git.bronyfurry.com/view/ru/register_verify_member.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6231bcb661dbc5_31140869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c84eaa60e06c6f835cbedfe97cec991fd6b1f462' => 
    array (
      0 => '/sites/git.bronyfurry.com/view/ru/register_verify_member.tpl',
      1 => 1646166058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6231bcb661dbc5_31140869 (Smarty_Internal_Template $_smarty_tpl) {
?>Спасибо за регистрацию на <?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
!

Ваши данные для входа:

Cайт: <?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>

Имя: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>


Войдите в систему с паролем, который вы выбрали при регистрации.

Нам необходимо подтвердить ваш адрес электронной почты, чтобы предоставить вам полный доступ.

Ваш проверочный код

<?php echo $_smarty_tpl->tpl_vars['hash']->value;?>



<?php if ($_smarty_tpl->tpl_vars['timeframe']->value) {?>
Этот код действителен с <?php echo $_smarty_tpl->tpl_vars['timeframe']->value[0];?>
 UTC и до <?php echo $_smarty_tpl->tpl_vars['timeframe']->value[1];?>
 UTC.


<?php }?>
Если вы зарегистрировали эту учетную запись, введите код подтверждения при запросе или перейдите по следующей ссылке:

<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/regate/<?php echo $_smarty_tpl->tpl_vars['mail']->value;?>



Чтобы отклонить запрос и удалить учетную запись, посетите:


<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/regate/<?php echo $_smarty_tpl->tpl_vars['mail']->value;
if ($_smarty_tpl->tpl_vars['ko']->value) {?>/<?php echo $_smarty_tpl->tpl_vars['ko']->value;
}?>


Спасибо.


-
Условия обслуживания:
<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
/help/TermsOfService 
<?php }
}
