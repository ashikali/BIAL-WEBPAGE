<?php
/* Smarty version 3.1.47, created on 2023-03-24 11:15:20
  from '/var/www/html/modules/userlist/plugins/webmail/tpl/new_webmail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_641d38f0ddee19_90437039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd42c301bdddf49ea7f41d28199eb17abb7686d4e' => 
    array (
      0 => '/var/www/html/modules/userlist/plugins/webmail/tpl/new_webmail.tpl',
      1 => 1674451778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641d38f0ddee19_90437039 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset>
    <legend><img src="images/email.png" width="22" height="22" />&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['LBL_WEBMAIL_FIELDS']->value;?>
</b></legend>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
      <tr>
        <td width="20%"><?php echo $_smarty_tpl->tpl_vars['webmailuser']->value['LABEL'];?>
: </td>
        <td width="30%"><?php echo $_smarty_tpl->tpl_vars['webmailuser']->value['INPUT'];?>
</td>
        <td width="25%"><?php echo $_smarty_tpl->tpl_vars['webmaildomain']->value['LABEL'];?>
: </td>
        <td width="25%"><?php echo $_smarty_tpl->tpl_vars['webmaildomain']->value['INPUT'];?>
</td>
      </tr>
      <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['webmailpassword1']->value['LABEL'];?>
: </td>
        <td><?php echo $_smarty_tpl->tpl_vars['webmailpassword1']->value['INPUT'];?>
</td>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>
</fieldset>
<?php }
}
