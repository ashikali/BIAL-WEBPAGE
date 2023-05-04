<?php
/* Smarty version 3.1.47, created on 2023-02-24 18:05:29
  from '/var/www/html/modules/calls_per_agent/themes/default/filter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_63f8af11acd682_35532233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef36fc05132dee525d8ff33005c864e843c77333' => 
    array (
      0 => '/var/www/html/modules/calls_per_agent/themes/default/filter.tpl',
      1 => 1674451778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f8af11acd682_35532233 (Smarty_Internal_Template $_smarty_tpl) {
?><table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
      <tr class="letra12">
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['date_start']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_start']->value['INPUT'];?>
</td>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['date_end']->value['LABEL'];?>
: <span  class="required">*</span></td>
        <td align="left" nowrap><?php echo $_smarty_tpl->tpl_vars['date_end']->value['INPUT'];?>
</td>
        <td colspan="3">&nbsp;</td>
     </tr>
      <tr class="letra12">
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['type']->value['LABEL'];?>
</td>
        <td align="left" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['type']->value['INPUT'];?>
</td>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['queue']->value['LABEL'];?>
</td>
        <td align="left" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['queue']->value['INPUT'];?>
</td>
        <td align="right"><?php echo $_smarty_tpl->tpl_vars['number']->value['LABEL'];?>
</td>
        <td align="left" nowrap="nowrap"><?php echo $_smarty_tpl->tpl_vars['number']->value['INPUT'];?>
</td>
        <td align="center"><input class="button" type="submit" name="filter" value="<?php echo $_smarty_tpl->tpl_vars['Filter']->value;?>
" /></td>
      </tr>
</table>
<?php }
}
