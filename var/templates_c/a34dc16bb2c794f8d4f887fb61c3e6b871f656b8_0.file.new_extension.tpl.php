<?php
/* Smarty version 3.1.47, created on 2023-03-24 11:15:20
  from '/var/www/html/modules/userlist/plugins/extension/tpl/new_extension.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_641d38f0dc8dc0_49291286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a34dc16bb2c794f8d4f887fb61c3e6b871f656b8' => 
    array (
      0 => '/var/www/html/modules/userlist/plugins/extension/tpl/new_extension.tpl',
      1 => 1674451778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641d38f0dc8dc0_49291286 (Smarty_Internal_Template $_smarty_tpl) {
?><fieldset>
    <legend><img src="images/call.png" width="22" height="22" />&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['LBL_EXTENSION_FIELDS']->value;?>
</b></legend>
    <table width="99%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
        <tr>
            <td width="20%"><?php echo $_smarty_tpl->tpl_vars['extension']->value['LABEL'];?>
:</td>
            <td width="30%"><?php echo $_smarty_tpl->tpl_vars['extension']->value['INPUT'];?>
</td>
            <td colspan="2">&nbsp;</td>
        </tr>
    </table>
</fieldset>
<?php }
}
