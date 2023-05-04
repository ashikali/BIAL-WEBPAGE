<?php
/* Smarty version 3.1.47, created on 2023-02-24 15:04:32
  from '/var/www/html/modules/rep_agent_information/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63f884a8cbb845_73231207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd21765f23aa6844b4c3887f41a0297b2bba63a6' => 
    array (
      0 => '/var/www/html/modules/rep_agent_information/themes/default/filter.tpl',
      1 => 1674451780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f884a8cbb845_73231207 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="0" align="center">
<tr>
  <td>
    <table width="100%" cellpadding="4" cellspacing="0" border="0">
      <tr class="letra12">
        <td width="12%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td width="12%" align="left" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
        <td width="12%" align="right"><?php echo $_smarty_tpl->tpl_vars['queue']->value['LABEL'];?>
:<span  class="required">*</span></td>
        <td width="12%"><?php echo $_smarty_tpl->tpl_vars['queue']->value['INPUT'];?>
</td>
		<td>&nbsp;</td>
     </tr>
     <tr class="letra12">
        <td width="12%" align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td width="12%" align="left" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
        <td width="12%" align="right"><?php echo $_smarty_tpl->tpl_vars['agent']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td width="12%"><?php echo $_smarty_tpl->tpl_vars['agent']->value['INPUT'];?>
</td>
        <td width="10%" align="center"><input class="button" type="submit" name="submit" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" /></td>
      </tr>
   </table>
  </td>
</tr>
</table>

<?php }
}
